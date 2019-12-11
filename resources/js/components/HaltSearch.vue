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
        <!-- <v-select>
                :items="radiusOptions"
                @change="onRadiusChange"
                v-model="radius"
                label="Select Radius (miles)"
                single-line
        &gt;
        </v-select> -->

      <select c lass="form-control" v-model="radius" @change="fetchNearestLocations" >
          <option value="200">Select Radius</option>
          <option value="3">nearest</option>
          <!-- <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option> -->
          <option value="10">Street</option>
          <option value="20">City</option>
          <option value="200">All</option>

      </select>
      </div>

    </v-layout>
</span>

</template>

<script>
    export default {
        data () {
            return {
                center: {lat: 5.955345, lng: 80.533022},
                radiusOptions: [3, 10, 200],
                radius: 200
            }
        },
        methods: {
            fetchNearestLocations() {
                axios.post('/api/nearest-halts', {center: this.center,radius:this.radius})
                    .then(response => {
                        let data = response.data;
                        Bus.$emit('markers_fetched', data);
                        console.log(response);
                    });
                ;
            },
            getPlace(place){
                let center = {
                    lat: place.geometry.location.lat(),
                    lng: place.geometry.location.lng()
                };
                this.center=center;
                this.fetchNearestLocations();
            },
            onRadiusChange(){
                console.log(this.radius);
            }

        }
    }
</script>
