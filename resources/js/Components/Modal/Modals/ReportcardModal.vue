<template>
    <base-modal>
        <template #heading
            ><h2 class="text-gray-500 font-medium">
                Create Report Card
            </h2></template
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
                type="textarea"
            />

            <div class="flex justify-end">
                <base-button
                    class="flex-shrink-0"
                    color="purple"
                    label="Submit"
                    type="submit"
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
        const report = inject("report");
        const toggleModal = inject("toggleReportcardModal");

        const mode = inject("mode");

        const user = inject("user");
        const form = useForm({
            patient_id: report?.patient.id,
            service: report?.service,
            department: report?.department,
            description: report?.description,
        });

        function submit() {
            console.log("stor");
            form.post(route("reports.store"), {
                preserveState: true,
                preserveScroll: true,
                onSuccess: () => toggleModal(),
            });
        }

        return {
            report,
            form,
            submit,
            show,
            user,
        };
    },
};
</script>
