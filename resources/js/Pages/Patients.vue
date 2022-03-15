<template>
    <dashboard-layout header="Patients">
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
                label="Add Patient"
                icon="fa-solid fa-plus"
                @click="togglePatientModal"
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
                    <tr v-for="patient in patients" :key="patient.id">
                        <td>{{ patient.first_name }}</td>
                        <td>{{ formatDate(patient.dob) }}</td>

                        <td>{{ patient.mobile_number }}</td>
                        <td>{{ patient.emergency_mobile_number }}</td>
                        <td class="extend">
                            <div class="flex justify-between items-center">
                                {{ patient.street_address }}

                                <dropdown>
                                    <dropdown-link
                                        icon="fa-solid fa-eye"
                                        label="View"
                                        class="hover:bg-black"
                                        :href="route('patients.show', patient)"
                                    />
                                    <dropdown-link
                                        icon="fas fa-edit"
                                        label="Edit"
                                        class="hover:bg-black"
                                        @click="togglePatientModal(patient)"
                                    />
                                    <dropdown-link
                                        icon="fas fa-trash"
                                        label="Delete"
                                        class="hover:bg-black"
                                        @click="
                                            $inertia.delete(
                                                route(
                                                    'patients.destroy',
                                                    patient
                                                )
                                            )
                                        "
                                    />
                                </dropdown>
                            </div>
                        </td>
                    </tr>
                </template> </base-table
        ></base-card>
        <patient-modal v-if="showPatientModal" @toggle="togglePatientModal" />
    </dashboard-layout>
</template>

<script>
import DashboardLayout from "@/Layouts/DashboardLayout";
import PatientModal from "@/Components/Modal/Modals/PatientModal";
import BaseTable from "@/Components/BaseTable";
import BaseCard from "@/Components/BaseCard";
import BaseInput from "@/Components/BaseInput";
import BaseButton from "@/Components/BaseButton";
import DatePicker from "vue-datepicker-next";
import Dropdown from "@/Components/Dropdown";
import DropdownLink from "@/Components/DropdownLink";
import useFormatter from "@/composables/useFormatter";
import useModal from "@/composables/useModal";
import { provide, toRefs } from "vue";

export default {
    components: {
        PatientModal,
        DatePicker,
        BaseTable,
        BaseButton,
        BaseCard,
        BaseInput,
        DashboardLayout,
        Dropdown,
        DropdownLink,
    },
    props: {
        patients: Array,
    },
    setup(props) {
        const { showModal, toggleModal } = useModal();
        const { formatDate } = useFormatter();
        const {
            showModal: showPatientModal,
            toggleModal: togglePatientModal,
            selectedValue: patient,
            mode,
        } = useModal();

        provide("togglePatientModal", togglePatientModal);
        provide("patient", patient);
        provide("mode", mode);

        return {
            formatDate,
            showModal,
            toggleModal,
            showPatientModal,
            togglePatientModal,
        };
    },
};
</script>
