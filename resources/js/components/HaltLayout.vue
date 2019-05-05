<template>
  <v-app id="inspire">
   <div>
        <vue-headful
            title="City Transport"
            description="Bus Route Navigation System"
        />
    </div>

   <results></results>

    <v-toolbar color="amber" app absolute clipped-left>
      <v-toolbar-side-icon v-on:click.native="drawer = !drawer"></v-toolbar-side-icon>
      <span class="title ml-3 mr-5">Find Nearby Halt&nbsp;<span class="text">App</span></span>

        <halt-search></halt-search>

      <v-spacer></v-spacer>

    </v-toolbar>


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

  props: {
    source: String
  },

  mounted() {
   
  }
};
</script>

<style scoped>
#keep main .container {
  height: 660px;
}

.navigation-drawer__border {
  display: none;
}

.text {
  font-weight: 400;
}
.autocomplete {
  width: 200px;
}
</style>
