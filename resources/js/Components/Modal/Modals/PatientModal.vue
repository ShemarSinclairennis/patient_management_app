<template>
    <base-modalex>
        <template #heading
            ><h2 class="text-gray-500 font-medium">Add Patient</h2></template
        >

        <div v-if="step === 1">
            <card-label label="General Information" />
            <div class="grid grid-cols-3 gap-x-4">
                <base-input
                    v-model="form.gender"
                    class="w-full"
                    label="Gender"
                    type="select"
                >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </base-input>

                <base-input
                    v-model="form.first_name"
                    class="w-full"
                    label="First Name"
                    type="text"
                />
                <base-input
                    v-model="form.last_name"
                    class="w-full"
                    label="Last Name"
                    type="text"
                />

                <base-input
                    v-model="form.street_address"
                    class="w-full"
                    label="Street Address"
                    type="text"
                />

                <base-input
                    v-model="form.city"
                    class="w-full"
                    label="City"
                    type="text"
                />

                <base-input
                    v-model="form.parish"
                    class="w-full"
                    label="Parish"
                    type="select"
                >
                    <option
                        v-for="parish in parishes"
                        :key="parish"
                        :value="parish"
                    >
                        {{ parish }}
                    </option>
                </base-input>

                <base-input
                    v-model="form.phone_number"
                    class="w-full"
                    label="Phone Number (Home)"
                    type="text"
                />

                <base-input
                    v-model="form.mobile_number"
                    class="w-full"
                    label="Phone Number (Mobile)"
                    type="text"
                />

                <base-input
                    v-model="form.work_number"
                    class="w-full"
                    label="Phone Number (Work)"
                    type="text"
                />

                <base-input
                    v-model="form.dob"
                    class="w-full"
                    label="Date of Birth"
                    type="date"
                />

                <base-input
                    v-model="form.pob"
                    class="w-full"
                    label="Birth Place (Hospital)"
                    type="text"
                />

                <base-input
                    v-model="form.parish"
                    class="w-full"
                    label="Birth Place (Parish)"
                    type="text"
                />
            </div>

            <div class="flex justify-end">
                <base-button
                    class="flex-shrink-0"
                    color="purple"
                    label="Next"
                    type="button"
                    @click="next"
                />
            </div>
        </div>

        <div v-if="step === 2">
            <card-label label="Emergency Contact" />
            <div class="grid grid-cols-3 gap-x-4">
                <base-input
                    v-model="form.emergency_title"
                    class="w-full"
                    label="Title"
                    type="select"
                    ><option value="Mr">Mr</option>
                    <option value="Ms">Ms</option>
                    <option value="Mrs">Mrs</option>
                </base-input>

                <base-input
                    v-model="form.emergency_first_name"
                    class="w-full"
                    label="First Name"
                    type="text"
                />
                <base-input
                    v-model="form.emergency_last_name"
                    class="w-full"
                    label="Last Name"
                    type="text"
                />

                <base-input
                    v-model="form.emergency_street_address"
                    class="w-full"
                    label="Street Address"
                    type="text"
                />

                <base-input
                    v-model="form.emergency_city"
                    class="w-full"
                    label="City"
                    type="text"
                />

                <base-input
                    v-model="form.emergency_parish"
                    class="w-full"
                    label="Parish"
                    type="select"
                >
                    <option
                        v-for="parish in parishes"
                        :key="parish"
                        :value="parish"
                    >
                        {{ parish }}
                    </option></base-input
                >

                <base-input
                    v-model="form.emergency_home_number"
                    class="w-full"
                    label="Phone Number (Home)"
                    type="text"
                />

                <base-input
                    v-model="form.emergency_mobile_number"
                    class="w-full"
                    label="Phone Number (Mobile"
                    type="text"
                />

                <base-input
                    v-model="form.emergency_work_number"
                    class="w-full"
                    label="Phone Number (Work)"
                    type="text"
                />
            </div>

            <section class="flex items-center justify-between">
                <base-button
                    class="mr-2"
                    color="purple"
                    icon="fas fa-chevron-left"
                    square
                    type="button"
                    @click="step = 1"
                />

                <base-button
                    color="purple"
                    label="Submit"
                    type="submit"
                    @click="submit"
                />
            </section>
        </div>
    </base-modalex>
</template>

<script>
import BaseModalex from "@/Components/Modal/Common/BaseModalex";
import BaseInput from "@/Components/BaseInput";
import CardLabel from "@/Components/CardLabel";
import BaseButton from "@/Components/BaseButton";
import { useForm } from "@inertiajs/inertia-vue3";
import { inject, onMounted, ref } from "vue";

export default {
    components: {
        CardLabel,
        BaseModalex,
        BaseInput,
        BaseButton,
    },

    setup() {
        const show = ref(false);
        const parishes = [
            "St.Andrew",
            "Kingston",
            "St.Mary",
            "St.Ann",
            "St.Thomas",
            "St.Elizabeth",
            "Portland",
            "St.Catherine",
            "Manchester",
            "Clarendon",
            "Hanover",
            "Westmoreland",
            "St.James",
            "Trelawny",
        ];
        const step = ref(1);
        const toggleModal = inject("togglePatientModal");
        const patient = inject("patient");
        const mode = inject("mode");
        const user = inject("user");
        const form = useForm({
            gender: patient?.gender,
            first_name: patient?.first_name,
            last_name: patient?.last_name,
            street_address: patient?.street_address,
            city: patient?.city,
            parish: patient?.parish,
            home_number: patient?.home_number,
            mobile_number: patient?.mobile_number,
            work_number: patient?.work_number,
            dob: patient?.dob,
            pob: patient?.pob,
            birth_parish: patient?.birth_parish,
            emergency_title: patient?.emergency_title,
            emergency_first_name: patient?.emergency_first_name,
            emergency_last_name: patient?.emergency_last_name,
            emergency_street_address: patient?.emergency_street_address,
            emergency_city: patient?.emergency_city,
            emergency_parish: patient?.emergency_parish,
            emergency_home_number: patient?.emergency_home_number,
            emergency_mobile_number: patient?.emergency_mobile_number,
            emergency_work_number: patient?.emergency_work_number,
        });

        // onMounted(() => {
        //     if (mode.value.toLowerCase() === "edit") step.value = 2;
        // });

        function submit() {
            form.post(route("patients.store"), {
                preserveState: true,
                preserveScroll: true,
                onSuccess: () => toggleModal(),
            });
        }

        function next() {
            console.log("next");
            if (step.value === 1) {
                step.value = 2;
            }
        }

        return {
            parishes,
            toggleModal,
            form,
            step,
            show,
            user,
            next,
            submit,
        };
    },
};
</script>
