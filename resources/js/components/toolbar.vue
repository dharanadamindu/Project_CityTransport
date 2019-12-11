<template>
    <v-app>

        <v-toolbar app class="warning">

            <v-toolbar-side-icon @click="drawer = !drawer"></v-toolbar-side-icon>

            <v-toolbar-title>vuetyfy</v-toolbar-title>

            <v-spacer></v-spacer>

            <v-btn class="success">
                success
            </v-btn>
            <v-btn class="error">
                error
            </v-btn>
        </v-toolbar>

        <v-navigation-drawer app v-model="drawer" temporary dark>
            <h3>test</h3>
        </v-navigation-drawer>



        <v-content>
            <router-view/>
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
