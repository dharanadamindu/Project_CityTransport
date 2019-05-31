<template>
  <v-app id="inspire">
   <div>
        <vue-headful
            title="City Transport"
            description="Bus Route Navigation System"
        />
    </div>

   

    <v-toolbar app class="secondary">

        <!-- <v-toolbar-side-icon @click="drawer = !drawer"></v-toolbar-side-icon> -->
        <v-btn class="warning" @click="drawer = !drawer">
                Halts
        </v-btn>
        <!-- <a href="/"><v-btn class="success">
                 Home
        </v-btn></a> -->
              


            <v-spacer></v-spacer>
            <span class="title ml-3 mr-5">&nbsp;<span class="text"></span></span>

            <halt-search></halt-search>
            
            

            <v-spacer></v-spacer>
        </v-toolbar>

        

        <v-navigation-drawer app v-model="drawer" temporary>
            <results></results>
        </v-navigation-drawer>


    <v-content>
      <v-container fluid fill-height class="grey lighten-4">
        <v-layout justify-center align-center>
            
         <halt-map></halt-map>

        </v-layout>
      </v-container>
    </v-content>

  </v-app>
</template>




<script>
export default {
    name: "App",
    data(){
        return {
            drawer: true
        };
    }
};
</script>





