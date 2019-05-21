
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import DrawerLayout from 'vue-drawer-layout'

import vueHeadful from 'vue-headful';

Vue.component('vue-headful', vueHeadful);

Vue.use(DrawerLayout)

import Vuetify from 'vuetify'

Vue.use(Vuetify)

import * as VueGoogleMaps from 'vue2-google-maps'

import GmapCluster from 'vue2-google-maps/dist/components/cluster' // replace src with dist if you have Babel issues
 
Vue.component('GmapCluster', GmapCluster)

window.Bus=new Vue;
 
Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyCLbarhqrxyP9XUh29eJzGQnbqbjgITShY',
    libraries: 'places', // This is required if you use the Autocomplete plugin
    // OR: libraries: 'places,drawing'
    // OR: libraries: 'places,drawing,visualization'
    // (as you require)
 
    //// If you want to set the version, you can do so:
    // v: '3.26',
  }
 
  //// If you intend to programmatically custom event listener code
  //// (e.g. `this.$refs.gmap.$on('zoom_changed', someFunc)`)
  //// instead of going through Vue templates (e.g. `<GmapMap @zoom_changed="someFunc">`)
  //// you might need to turn this on.
  // autobindAllEvents: false,
 
  //// If you want to manually install components, e.g.
  //// import {GmapMarker} from 'vue2-google-maps/src/components/marker'
  //// Vue.component('GmapMarker', GmapMarker)
  //// then disable the following:
  // installComponents: true,
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('halt-layout', require('./components/HaltLayout.vue').default);
Vue.component('halt-map', require('./components/HaltMap.vue').default);
Vue.component('halt-search', require('./components/HaltSearch.vue').default);
Vue.component('results', require('./components/Results.vue').default);
Vue.component('google-layout', require('./components/googleVue.vue').default);
Vue.component('toolbar-layout', require('./components/toolbar.vue').default);
// Vue.component('info-content', require('./components/InfoContent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
