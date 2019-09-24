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
        // You are able to access plugin from everywhere via this.$toastr
        this.$toastr.defaultPosition = "toast-top-left";
        // Send message to browser screen
        this.$toastr.s(
            "This Message From Toastr Plugin\n You can access this plugin : <font color='yellow'>this.$toastr</font>"
        );
    }
}).$mount("vue-toastr");

