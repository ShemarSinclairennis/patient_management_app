<template>
    <dashboard-layout header="Tickets">
        <div>
            <card-label label="Services" />
            <base-card title="Service Tickets" class="h-44">
                <card-title title="Service Tickets" color="purple" />
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
            <!-- <card-label label="Patients" />
            <base-card class="h-96">
                <card-title title="Service Tickets" />
               
            </base-card> -->
            <card-label label="Patients" />
            <base-card>
                <div class="m-8">
                    <base-input
                        class="w-1/3"
                        container-class="input-size"
                        leading="fas fa-search"
                        placeholder="Search Patients..."
                        type="text"
                    />
                </div>
                <base-table class="px-8 pb-8">
                    <template #head>
                        <tr>
                            <th class="w-1/6">Ticket Number</th>
                            <th class="w-1/6">Name</th>
                            <th class="w-1/6">Service</th>
                            <th class="w-1/6">Status</th>
                        </tr>
                    </template>
                    <template #body>
                        <tr v-for="n in 15" :key="n">
                            <td>RD00023</td>
                            <td>Katey Perry</td>
                            <td>X-RAY</td>
                            <td class="flex space-x-12">
                                <status-tag :status="'In Progress'" />
                                <i
                                    class="fa-solid fa-circle-xmark fa-lg text-red-400"
                                ></i>
                            </td>
                        </tr>
                    </template>
                </base-table>
            </base-card>
        </div>
    </dashboard-layout>
</template>

<script>
import DashboardLayout from "@/Layouts/DashboardLayout";
import BaseCard from "@/Components/BaseCard";
import BaseInput from "@/Components/BaseInput";
import CardLabel from "@/Components/CardLabel";
import CardTitle from "@/Components/CardTitle";
import CounterIcon from "@/Components/CounterIcon";
import BaseTable from "@/Components/BaseTable";
import StatusTag from "@/Components/StatusTag";

export default {
    components: {
        StatusTag,
        BaseTable,
        BaseInput,
        CounterIcon,
        CardTitle,
        CardLabel,
        BaseCard,
        DashboardLayout,
    },
};
</script>
