<template>
    <div class="flex flex-col md:flex-row">
        <Head :title="header" />

        <dashboard-sidebar class="order-2 md:order-1" />
        <dashboard-content class="order-1 md:order-2">
            <slot />
        </dashboard-content>
    </div>
</template>

<script>
import DashboardSidebar from "@/Components/SideBar.vue";
import DashboardContent from "@/Components/DashboardContent.vue";

import { Head, usePage } from "@inertiajs/inertia-vue3";
import { provide, ref, toRefs } from "vue";

export default {
    components: {
        DashboardContent,
        DashboardSidebar,
        Head,
    },

    props: {
        header: String,
        headerCaption: [String, Number],
    },

    setup(props) {
        const { header, headerCaption } = toRefs(props);

        provide("user", toRefs(usePage().props.value.auth.user));
        provide("header", header);
        provide("headerCaption", headerCaption);
    },
};
</script>
