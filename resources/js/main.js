// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from "vue";
import App from "./App";
import AppModal from "./components/HaltLayout";

Vue.config.productionTip = false;

const ModalPlugin = {
    install(Vue) {
        Vue.component(AppModal.name, AppModal);
        Vue.prototype.$modal = {
            $event: new Vue(),
            show(name, params = {}) {
                this.$event.$emit("show", name, params);
            },
            hide(name) {
                this.$event.$emit("hide", name);
            }
        };
    }
};

Vue.use(ModalPlugin);
/* eslint-disable no-new */
new Vue({
    el: "#app",
    components: { App },
    template: "<App/>"
});
