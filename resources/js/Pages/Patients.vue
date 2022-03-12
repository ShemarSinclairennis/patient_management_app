<template>
    <dashboard-layout header="Patients">
        <base-card></base-card>
    </dashboard-layout>
</template>

<script>
import DashboardLayout from "@/Layouts/DashboardLayout";
import BaseCard from "@/Components/BaseCard";

export default {
    components: {
        BaseCard,
        DashboardLayout,
    },
};
</script>
