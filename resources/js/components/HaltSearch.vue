<template>
    <span>
<v-layout row>
    <div style="width:auto"
         class=" my-3 input-group input-group--prepend-icon input-group--solo input-group--solo-inverted elevation-0 input-group--text-field input-group--single-line primary--text">
        <label></label>
        <div class="form-control">
            <i aria-hidden="true" class="icon material-icons input-group__prepend-icon"></i>
            <gmap-autocomplete
                class='autocomplete'
                @place_changed="getPlace">
            </gmap-autocomplete>
        </div>

    </div>


&nbsp;&nbsp;


      <div class="my-3" style="width:auto">
          <select c lass="form-control" v-model="radius" @change="fetchNearestLocations">
              <option value="200" selected disabled hidden>Select Radius</option>
              <option value="3">nearest</option>
              <option value="10">Street</option>
              <option value="20">City</option>
              <option value="200">All</option>
          </select>
      </div>



    <div class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
    <!-- Any other Bulma elements you want -->
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
    </div>

    </v-layout>
</span>

</template>

<script>
    export default {
        data() {
            return {
                center: {},
                radiusOptions: [3, 10, 200],
                radius: 200
            }
        },
        methods: {
            fetchNearestLocations() {
                axios.post('/api/nearest-halts', {center: this.center, radius: this.radius})
                    .then(response => {
                        let data = response.data;
                        Bus.$emit('markers_fetched', data);
                        console.log(response);
                    });
                ;
            },
            getPlace(place) {
                let center = {
                    lat: place.geometry.location.lat(),
                    lng: place.geometry.location.lng()
                };
                this.center = center;
                this.fetchNearestLocations();
            },
            onRadiusChange() {
                console.log(this.radius);
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


    }


</script>
