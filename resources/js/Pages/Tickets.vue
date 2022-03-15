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
                        :count="xray_count.length"
                    />
                    <counter-icon
                        icon="fas fa-user"
                        icon-color="blue"
                        service="US"
                        :count="us_count.length"
                    />
                    <counter-icon
                        icon="fas fa-user"
                        icon-color="orange"
                        service="CT"
                        :count="ct_count.length"
                    />
                    <counter-icon
                        icon="fas fa-user"
                        icon-color="purple"
                        service="PET"
                        :count="pet_count.length"
                    />
                    <counter-icon
                        icon="fas fa-user"
                        icon-color="red"
                        service="MRI"
                        :count="mri_count.length"
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
                        v-model="params.query"
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
                        <tr v-for="ticket in tickets" :key="ticket.id">
                            <td>{{ ticket.ticket_number }}</td>
                            <td>
                                {{ ticket.first_name }}
                                {{ ticket.last_name }}
                            </td>
                            <td>{{ ticket.service }}</td>
                            <td class="flex space-x-12">
                                <status-tag
                                    :status="ticket.status"
                                    @click="toggleStatusModal(ticket)"
                                />
                                <i
                                    class="fa-solid fa-circle-xmark fa-lg text-red-400"
                                    @click="
                                        $inertia.delete(
                                            route('tickets.destroy', ticket)
                                        )
                                    "
                                ></i>
                            </td>
                        </tr>
                    </template>
                </base-table>
            </base-card>
        </div>
        <status-modal v-if="showStatusModal" @toggle="toggleStatusModal" />
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
import StatusModal from "@/Components/Modal/Modals/StatusModal";
import useFilterRequest from "@/composables/useFilterRequest";
import useEmptyResource from "@/composables/useEmptyResource";
import useModal from "@/composables/useModal";
import { provide, toRefs } from "vue";

export default {
    components: {
        StatusTag,
        StatusModal,
        BaseTable,
        BaseInput,
        CounterIcon,
        CardTitle,
        CardLabel,
        BaseCard,
        DashboardLayout,
        StatusModal,
    },

    props: {
        tickets: Array,
        xray_count: Array,
        us_count: Array,
        ct_count: Array,
        pet_count: Array,
        mri_count: Array,
    },
    setup(props) {
        const { showModal, toggleModal } = useModal();
        const {
            showModal: showStatusModal,
            toggleModal: toggleStatusModal,
            selectedValue: ticket,
            mode,
        } = useModal();
        const { tickets } = toRefs(props);

        const { params } = useFilterRequest("tickets.index", {
            ticket: route().params.ticket,
        });

        const { resourceEmpty: ticketsEmpty } = useEmptyResource(tickets);
        provide("params", params);
        provide("ticket", ticket);
        provide("toggleStatusModal", toggleStatusModal);

        provide("mode", mode);

        return {
            showStatusModal,
            toggleStatusModal,
            params,
        };
    },
};
</script>
