import Vue from "vue";
import VueToastr from "vue-toastr";

// use plugin
Vue.use(VueToastr, {
    /* OverWrite Plugin Options if you need */
});

Vue.config.productionTip = false;

new Vue({
    render: h => h(App),
    mounted() {

        this.$toastr.defaultPosition = "toast-bottom-right";

        this.$toastr.s(
            "This Message From Toastr Plugin\n You can access this plugin : <font color='yellow'>this.$toastr</font>"
        );
    }
}).$mount("vue-toastr");

