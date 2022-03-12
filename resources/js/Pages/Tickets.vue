<template>
    <dashboard-layout header="Tickets">
        <div>
            <card-label label="Services" />
            <base-card title="Service Tickets" class="h-44">
                <card-title title="Service Tickets" />
                <div class="flex justify-center mt-8 space-x-20">
                    <counter-icon
                        icon="fas fa-user"
                        icon-color="green"
                        service="X-Ray"
                        count="15"
                    />
                    <counter-icon
                        icon="fas fa-user"
                        icon-color="blue"
                        service="US"
                        count="09"
                    />
                    <counter-icon
                        icon="fas fa-user"
                        icon-color="orange"
                        service="CT"
                        count="11"
                    />
                    <counter-icon
                        icon="fas fa-user"
                        icon-color="purple"
                        service="PET"
                        count="17"
                    />
                    <counter-icon
                        icon="fas fa-user"
                        icon-color="red"
                        service="MRI"
                        count="05"
                    />
                </div>
            </base-card>
        </div>
        <div class="mt-12">
            <card-label label="Patients" />
            <base-card class="h-96">
                <card-title title="Service Tickets" />
            </base-card>
        </div>
    </dashboard-layout>
</template>

<script>
import DashboardLayout from "@/Layouts/DashboardLayout";
import BaseCard from "@/Components/BaseCard";
import CardLabel from "@/Components/CardLabel";
import CardTitle from "@/Components/CardTitle";
import CounterIcon from "@/Components/CounterIcon";

export default {
    components: {
        CounterIcon,
        CardTitle,
        CardLabel,
        BaseCard,
        DashboardLayout,
    },
};
</script>
