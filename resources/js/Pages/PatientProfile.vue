<template>
    <dashboard-layout header="Patient Profile">
        <card-label label="General Information" />
        <base-card class="h-24 grid content-center">
            <div class="flex justify-around items-center">
                <info-field name="Title" info="Ms" />
                <info-field name="Name" info="Kate Perry" />
                <info-field name="Gender" info="Female" />
                <info-field name="D.O.B" info="May 15,1998" />
                <info-field name="P.O.B" info="UHWI" />
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
                                info="31 Billy Avenue , Kingston 20 , St.Andrew"
                            />
                            <info-field name="Email" info="Kate@gmail.com" />
                            <info-field name="Mobile" info="(876)-500-009" />
                            <div class="flex space-x-4">
                                <info-field name="Home" info="(876)-500-009" />
                                <info-field name="Work" info="(876)-500-009" />
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
                            <info-field name="John Doe" info="(876)-500-009" />
                            <info-field
                                name="Address"
                                info="31 Billy Avenue , Kingston 20 , St.Andrew"
                            />
                            <div class="flex space-x-4">
                                <info-field
                                    name="Email"
                                    info="Kate@gmail.com"
                                />
                                <info-field
                                    name="Mobile"
                                    info="(876)-500-009"
                                />
                            </div>
                            <div class="flex space-x-4">
                                <info-field name="Home" info="(876)-500-009" />
                                <info-field name="Work" info="(876)-500-009" />
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
                />
            </div>
        </div>
        <div class="grid gap-y-12 grid-cols-2 mt-8">
            <med-card
                v-for="n in 7"
                :key="n"
                service="Echo Cardiogram"
                department="OB/GYN"
                :attachment="true"
                description="Aorta: Ascending aorta, aortic arch and descending thoracic aorta are of normal caliber.
                             Ao Valve z score= 0.09 ST junction z score 1.28 ). Aortic sinus 2.4 cm z score= -0.13 )
                             Normalproximal coronary arteries. There is an aneurysm of the transverse aorta 
                              measuring up to(enter manually) mm."
                date="January 02,2022"
                iconColor="OB/GYN"
            />
            <base-card
                class="h-64 border-dotted border-2 border-gray-500 grid justify-items-center items-center"
                ><i class="fa-solid fa-circle-plus text-8xl text-purple-400"></i
            ></base-card>
        </div>
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
import MedCard from "@/Components/MedCard";

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
        MedCard,
        DepartmentTag,
    },
};
</script>
