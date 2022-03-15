<template>
    <base-modal>
        <template #heading
            ><h2 class="text-gray-500 font-medium">Report Card</h2></template
        >

        <div>
            <div class="grid grid-cols-2 gap-x-4">
                <base-input
                    v-model="form.service"
                    class="w-full"
                    label="Service"
                    type="text"
                />

                <base-input
                    v-model="form.department"
                    class="w-full"
                    label="Department"
                    type="select"
                >
                    <option disabled hidden selected value="">
                        -- Select Department --
                    </option>
                    <option>Cardiothoracics</option>
                    <option>Orthopaedics</option>
                    <option>OB/GYN</option>
                    <option>Otolaryngology</option>
                    <option>Gastroenterology</option>
                    <option>Neurology</option>
                    <option>Pediatric</option>
                    <option>Opthamology</option>
                    <option>Urology</option>
                </base-input>
            </div>
            <base-input
                v-model="form.description"
                class="w-full"
                label="Description"
                type="text"
            />

            <div class="flex justify-end">
                <base-button
                    class="flex-shrink-0"
                    color="purple"
                    label="Submit"
                    type="submit"
                    @click="submit"
                />
            </div>
        </div>
    </base-modal>
</template>

<script>
import BaseModal from "@/Components/Modal/Common/BaseModal";
import BaseInput from "@/Components/BaseInput";
import CardLabel from "@/Components/CardLabel";
import BaseButton from "@/Components/BaseButton";
import { useForm } from "@inertiajs/inertia-vue3";
import { inject, onMounted, ref } from "vue";

export default {
    components: {
        CardLabel,
        BaseModal,
        BaseInput,
        BaseButton,
    },

    setup() {
        const show = ref(false);
        const toggleModal = inject("toggleReportModal");
        const report = inject("report");
        const patient = inject("patient");
        const mode = inject("mode");
        const user = inject("user");
        const form = useForm({
            service: report?.service,
            description: report?.description,
            department: report?.department,
            patient_id: patient.id,
        });

        // onMounted(() => {
        //     if (mode.value.toLowerCase() === "edit") step.value = 2;
        // });

        function submit() {
            console.log("store");
            const options = {
                preserveState: true,
                preserveScroll: true,
                onSuccess: () => toggleModal(),
            };

            form.post(route("reports.store", patient), options);
        }

        return {
            mode,
            report,
            toggleModal,
            form,
            show,
            user,
            submit,
        };
    },
};
</script>
