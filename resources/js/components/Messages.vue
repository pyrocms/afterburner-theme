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
                required: false
            }
        },
        data() {
            return {
                variable: ""
            };
        },
        created() {},
        mounted() {
            this.$refs.mytoast.defaultPosition = "toast-top-left";
            this.$refs.mytoast.s(
                this.message
            );
            console.log(this.$refs.mytoast);
        },
        watch: {
            data(newVal, oldVal) {}
        },
        computed: {
            aname() {}
        },
        methods: {
            methodname() {}
        }
    };
</script>
