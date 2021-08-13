import Vue from "vue";
import App from "./App.vue";
import vuetify from "./plugins/vuetify";
import vueScrollto from "vue-scrollto";

Vue.use(vueScrollto);

Vue.config.productionTip = false;

new Vue({
  vuetify,
  render: (h) => h(App),
}).$mount("#app");
