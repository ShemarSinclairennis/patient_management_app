<template>
    <dashboard-layout header="Patient Profile">
        <card-label label="General Information" />
        <base-card class="h-24 grid content-center">
            <div class="flex justify-around items-center">
                <info-field name="Title" :info="patient.title" />
                <info-field name="Name" :info="patient.first_name" />
                <info-field name="Gender" :info="patient.gender" />
                <info-field name="D.O.B" :info="formatDate(patient.dob)" />
                <info-field name="P.O.B" :info="patient.pob" />
            </div>
        </base-card>
        <div class="my-8 mt-12">
            <div class="flex justify-between">
                <div class="w-3/5">
                    <card-label label="Patient Contact Information" />
                    <base-card
                        class="flex justify-center grid content-center h-48"
                    >
                        <div class="flex flex-col space-y-3">
                            <info-field
                                name="Address"
                                :info="patient.street_address"
                            />
                            <info-field name="Email" info="Kate@gmail.com" />
                            <info-field
                                name="Mobile"
                                :info="patient.mobile_number"
                            />
                            <div class="flex space-x-4">
                                <info-field
                                    name="Home"
                                    :info="patient.home_number"
                                />
                                <info-field
                                    name="Work"
                                    :info="patient.work_number"
                                />
                            </div>
                        </div>
                    </base-card>
                </div>

                <div class="w-3/5">
                    <card-label label="Emergency Contact Information" />
                    <base-card
                        class="flex justify-center grid content-center h-48"
                    >
                        <div class="flex flex-col space-y-3">
                            <info-field
                                name="Name"
                                :info="patient.emergency_first_name"
                            />
                            <info-field
                                name="Address"
                                :info="patient.street_address"
                            />
                            <div class="flex space-x-4">
                                <info-field
                                    name="Email"
                                    info="Kate@gmail.com"
                                />
                                <info-field
                                    name="Mobile"
                                    :info="patient.mobile_number"
                                />
                            </div>
                            <div class="flex space-x-4">
                                <info-field
                                    name="Home"
                                    :info="patient.home_number"
                                />
                                <info-field
                                    name="Work"
                                    :info="patient.work_number"
                                />
                            </div>
                        </div>
                    </base-card>
                </div>
            </div>
        </div>
        <div class="mt-12">
            <card-label label="Departments" />

            <base-card class="h-24 grid content-center">
                <div
                    class="grid gap-1 gap-y-2 grid-cols-5 grid-rows-2 items-center ml-12"
                >
                    <department-tag
                        icon-color="Cardiothoracic"
                        icon="fa-solid fa-circle"
                        department="Cardiothoracic"
                    />
                    <department-tag
                        icon-color="Orthopaedics"
                        icon="fa-solid fa-circle"
                        department="Orthopaedics"
                    />
                    <department-tag
                        icon-color="OB/GYN"
                        icon="fa-solid fa-circle"
                        department="OB/GYN"
                    />
                    <department-tag
                        icon-color="Otolaryngology"
                        icon="fa-solid fa-circle"
                        department="Otolaryngology"
                    />
                    <department-tag
                        icon-color="Gastroenterology"
                        icon="fa-solid fa-circle"
                        department="Gastroenterology"
                    />
                    <department-tag
                        icon-color="Neurology"
                        icon="fa-solid fa-circle"
                        department="Neurology"
                    />
                    <department-tag
                        icon-color="Pediatric"
                        icon="fa-solid fa-circle"
                        department="Pediatric"
                    />
                    <department-tag
                        icon-color="Opthamology"
                        icon="fa-solid fa-circle"
                        department="Opthamology"
                    />
                    <department-tag
                        icon-color="Urology"
                        icon="fa-solid fa-circle"
                        department="Urology"
                    />
                </div>
            </base-card>
        </div>
        <div class="flex justify-between mt-16">
            <card-label label="Medical Cards" />
            <div>
                <base-button
                    color="purple"
                    type="button"
                    label="Add Medical Card"
                    icon="fa-solid fa-plus"
                    class="mr-8"
                    @click="toggleReportModal(patient)"
                />
            </div>
        </div>
        <div class="grid gap-y-12 grid-cols-2 mt-8">
            <report-card
                v-for="report in reports"
                :key="report.id"
                :service="report.service"
                :department="report.department"
                :attachment="true"
                :description="report.description"
                :date="formatDate(report.created_at)"
                iconColor="OB/GYN"
            />
            <base-card
                class="h-64 border-dotted border-2 border-gray-500 grid justify-items-center items-center"
                ><i
                    class="fa-solid fa-circle-plus text-8xl text-purple-400 hover:text-blue-400"
                    @click="toggleReportModal(report)"
                ></i
            ></base-card>
        </div>
        <report-modal v-if="showReportModal" @toggle="toggleReportModal" />
    </dashboard-layout>
</template>

<script>
import DashboardLayout from "@/Layouts/DashboardLayout";
import BaseTable from "@/Components/BaseTable";
import BaseCard from "@/Components/BaseCard";
import BaseInput from "@/Components/BaseInput";
import BaseButton from "@/Components/BaseButton";
import CardLabel from "@/Components/CardLabel";
import CardTitle from "@/Components/CardTitle";
import DatePicker from "vue-datepicker-next";
import Dropdown from "@/Components/Dropdown";
import DropdownLink from "@/Components/DropdownLink";
import InfoField from "@/Components/InfoField";
import DepartmentTag from "@/Components/DepartmentTag";
import ReportCard from "@/Components/ReportCard";
import ReportModal from "@/Components/Modal/Modals/ReportModal";
import useFormatter from "@/composables/useFormatter";
import useModal from "@/composables/useModal";
import { provide, toRefs } from "vue";

export default {
    components: {
        DatePicker,
        BaseTable,
        BaseButton,
        BaseCard,
        BaseInput,
        CardLabel,
        CardTitle,
        DashboardLayout,
        Dropdown,
        DropdownLink,
        InfoField,
        ReportCard,
        ReportModal,
        DepartmentTag,
    },
    props: {
        patient: Object,
        reports: Array,
    },
    setup(props) {
        const { showModal, toggleModal } = useModal();
        const { formatDate } = useFormatter();
        const {
            showModal: showReportModal,
            toggleModal: toggleReportModal,
            selectedValue: report,

            mode,
        } = useModal();

        provide("toggleReportModal", toggleReportModal);
        provide("report", report);
        provide("patient", props.patient);

        provide("mode", mode);

        return {
            formatDate,
            showModal,
            toggleModal,
            showReportModal,
            toggleReportModal,
        };
    },
};
</script>
