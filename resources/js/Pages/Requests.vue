<template>
    <dashboard-layout header="Requests">
        <card-title
            title="Request Page is currently unable to use - Author: Shemar Ennis"
            color="red"
            class="mb-8"
        />
        <div class="flex justify-between items-center mb-12">
            <div class="flex items-center">
                <base-input
                    class="mr-3"
                    container-class="input-size"
                    leading="fas fa-search"
                    placeholder="Search Patients..."
                    type="text"
                />

                <date-picker
                    class="mr-3 input-size"
                    format="DD/MM/YYYY"
                    placeholder="Filter By Date"
                    prefix-class="xmx"
                    type="date"
                    value-type="YYYY-MM-DD"
                />
            </div>

            <base-button
                color="purple"
                type="button"
                label="Make a Request"
                icon="fa-solid fa-plus"
            />
        </div>
        <base-card>
            <base-table class="px-8 pb-8">
                <template #head>
                    <tr>
                        <th class="w-1/6">Name</th>
                        <th class="w-1/6">Date of Birth</th>
                        <th class="w-1/6">Contact</th>
                        <th class="w-1/6">Emergency Contact</th>
                        <th class="w-1/6">Address</th>
                    </tr>
                </template>
                <template #body>
                    <tr v-for="n in 15" :key="n">
                        <td>Katey Perry</td>
                        <td>May 2 ,1998</td>
                        <td>(876)-447-3334</td>
                        <td>(876)-447-3556</td>
                        <td class="extend">
                            <div class="flex justify-between items-center">
                                24 Mabel Avenue

                                <dropdown>
                                    <dropdown-link
                                        icon="fa-solid fa-eye"
                                        label="View"
                                    />
                                    <dropdown-link
                                        icon="fas fa-edit"
                                        label="Edit"
                                    />
                                    <dropdown-link
                                        icon="fas fa-trash"
                                        label="Delete"
                                    />
                                </dropdown>
                            </div>
                        </td>
                    </tr>
                </template> </base-table
        ></base-card>
    </dashboard-layout>
</template>

<script>
import DashboardLayout from "@/Layouts/DashboardLayout";
import BaseTable from "@/Components/BaseTable";
import BaseCard from "@/Components/BaseCard";
import CardTitle from "@/Components/CardTitle";
import BaseInput from "@/Components/BaseInput";
import BaseButton from "@/Components/BaseButton";
import DatePicker from "vue-datepicker-next";
import Dropdown from "@/Components/Dropdown";
import DropdownLink from "@/Components/DropdownLink";

export default {
    components: {
        DatePicker,
        BaseTable,
        BaseButton,
        BaseCard,
        BaseInput,
        CardTitle,
        DashboardLayout,
        Dropdown,
        DropdownLink,
    },
};
</script>
