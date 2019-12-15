<template>
    <gmap-map
        :center="center"
        :zoom="11"
        style="width: 100%; height: 100%"
    >
        <gmap-cluster>
            <gmap-marker
                :key="index"
                v-for="(m, index) in markers"
                :position="m.position"
                :clickable="true"
                icon="/stop 64.png"

                :draggable="true"
                @click="toggleInfoWindow(m,index)"
            ></gmap-marker>
        </gmap-cluster>

        <gmap-info-window :options="infoOptions" :position="infoWindowPos" :opened="infoWinOpen"
                          @closeclick="infoWinOpen=false">
            <info-content :content="infooContent" :timeTable="time_table"></info-content>
            <!-- <info-content :city_y="city"></info-content> -->
        </gmap-info-window>

    </gmap-map>
</template>

<script>
    // var lat = 8.001707, lng = 80.995594;
    // $(function () {
    //
    // });
    import InfoContent from './InfoContent.vue'

    // $.ajax("/getLocation", {
    //     'type': 'GET',
    //     success: function (data, textStatus, jqXHR) {
    //         var row = data;
    //         var lat = row["lat"];
    //         var lng = row["lng"];
    //         Bus.$emit('markers_fetched', {
    //             center: {lat: parseFloat(lat), lng: parseFloat(lng)},
    //             // center: cp,
    //             radiusOptions: [3, 10, 200],
    //             radius: 200
    //         });
    //     },
    //     error: function (jqXHR, textStatus, errorThrown) {
    //         alert("Error : " + errorThrown);
    //     }
    // });
    export default {

        components: {
            'info-content': InfoContent
        },
        data() {
            return {
                center: {},
                zoom: 5,
                markers: [],
                infooContent: '',
                city: '',
                infoWindowPos: {
                    lat: 0,
                    lng: 0
                },
                infoWinOpen: false,
                currentMidx: null,
                infoOptions: {
                    pixelOffset: {
                        width: 0,
                        height: -35
                    }
                }
            }
        },

        mounted: function () {
            var self = this;

            $.ajax("/getLocation", {
                'type': 'GET',
                success: function (data, textStatus, jqXHR) {
                    var row = data;
                    var lat = row["lat"];
                    var lng = row["lng"];
                    // alert(lat + ' ' + lng);
                    self.center = {lat: parseFloat(lat), lng: parseFloat(lng)};
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert("Error : " + errorThrown);
                }
            });

        },


        methods: {
            toggleInfoWindow(marker, idx) {
                this.infoWindowPos = marker.position;
                this.infooContent = marker.name;
                this.time_table = marker.timetable;
                //check if its the same marker that was selected if yes toggle
                if (this.currentMidx == idx) {
                    this.infoWinOpen = !this.infoWinOpen;
                }
                //if different marker set infowindow to open and reset current marker index
                else {
                    this.infoWinOpen = true;
                    this.currentMidx = idx;
                }
            },
            getPlace(place) {
                let center = {
                    lat: place.geometry.location.lat(),
                    lng: place.geometry.location.lng()
                };
                this.center = center;
                this.fetchNearestLocations();
            },
            fetchLocations() {
                axios.post('/api/nearest-halts', {center: this.center, radius: this.radius})
                    .then(response => {
                        let data = response.data;
                        Bus.$emit('markers_fetched', data);
                        console.log(response);
                    });
            }
        },
        created() {
            this.fetchLocations();
            Bus.$on('markers_fetched', data => {
                this.markers = data.markers;
                if (this.markers.length > 0) {
                    this.center = data.markers[0].position;
                }
                console.log('event data', data);
            })
            Bus.$on('marker_result_clicked', index => {
                let targetMarker = this.markers[index];
                this.center = targetMarker.position;
                this.toggleInfoWindow(targetMarker, index)
            })
        }
    }

</script>


<style>
</style>
