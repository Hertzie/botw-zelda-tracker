/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
import VueToastr from "vue-toastr";

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component(
    "grid-arco",
    require("./components/utilerias/Grids/GridArco.vue").default
);
Vue.component(
    "grid-materiales",
    require("./components/utilerias/Grids/GridMateriales.vue").default
);
Vue.component("medallas", require("./components/Medallas.vue").default);
Vue.component("secciones", require("./components/Secciones.vue").default);
Vue.component(
    "configuracion",
    require("./components/secciones/Configuracion.vue").default
);
Vue.component(
    "grafica",
    require("./components/estadisticas/Grafica.vue").default
);
Vue.component(
    "estadisticas",
    require("./components/estadisticas/Estadisticas.vue").default
);
Vue.component("torres", require("./components/Torres.vue").default);
Vue.component("arco-flecha", require("./components/ArcoFlecha.vue").default);
Vue.component("materiales", require("./components/Materiales.vue").default);
Vue.component("recuerdos", require("./components/Recuerdos.vue").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.use(VueToastr);
const app = new Vue({
    el: "#app"
});
