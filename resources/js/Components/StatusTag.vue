<template>
    <base-tag :color="color" :icon="icon" :label="status ?? `Not Set`" />
</template>

<script>
import BaseTag from "@/Components/BaseTag.vue";

export default {
    props: {
        status: String,
    },

    components: {
        BaseTag,
    },

    computed: {
        statusRegularized() {
            return this.status?.toLowerCase();
        },

        icon() {
            if (this.statusRegularized === "completed") {
                return "fa-solid fa-circle-check";
            }

            if (this.statusRegularized === "in progress") {
                return "fa-solid fa-user-doctor";
            }

            if (this.statusRegularized === "waiting") {
                return "fa-solid fa-clock";
            }
        },

        color() {
            if (this.statusRegularized === "completed") {
                return "green";
            }

            if (this.statusRegularized === "in progress") {
                return "blue";
            }

            if (this.statusRegularized === "waiting") {
                return "gray";
            }
        },
    },
};
</script>
