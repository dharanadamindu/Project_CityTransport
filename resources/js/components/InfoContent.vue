<template>
    <div>
        <v-card>
            <v-card-media src="https://picsum.photos/200/300/?blur" height="200px">
            </v-card-media>
            <v-card-title primary-title>
                <div>
                    <h3 class="headline mb-0">{{content}}</h3>
                    <h3 class="">{{city_y}}</h3>
                    <span>{{ someDate | moment("dddd, MMMM Do YYYY") }}</span>
                    <div>City Transport</div>
                </div>
            </v-card-title>
            <v-card-actions>
                <!-- <v-btn flat color="orange">Share</v-btn>
                <v-btn flat color="orange">Explore</v-btn> -->
            </v-card-actions>
        </v-card>
    </div>
</template>

<script>
    export default {
        props:['content','city_y'],
        data () {
            return {
                card_text: 'Bus Halts'
            }
        }
    }
</script>




