<template>
    <vue-toastr ref="mytoast"></vue-toastr>
</template>

<script>
    import VueToastr from "vue-toastr";

    export default {
        name: "toaster",
        components: {VueToastr},
        props: {
            open: {
                type: Boolean,
                required: true
            },
            message: {
                type: String,
                required: true
            },
            type: {
                type: String,
                required: true
            },
            position: {
                type: String,
                required: false,
                default: "bottom-right"
            }
        },
        data() {
            return {
                isVisible: false,
                myToaster: null
            };
        },
        created() {
            this.isVisible = this.open;
        },
        mounted() {
            if (this.open) {
                this.openToast();
            }
        },
        methods: {
            openToast() {

                this.$refs.mytoast.defaultPosition = "toast-bottom-left";

                this.myToaster = this.$refs.mytoast.Add({
                    position: "toast-" + this.position,
                    //name: "UniqName",
                    msg: this.message,
                    type: this.type,
                    timeout: 0,
                });
            }
        }
    };
</script>
