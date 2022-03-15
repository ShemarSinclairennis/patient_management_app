<template>
    <base-modal>
        <template #heading
            ><h2 class="text-gray-500 font-medium">Status Update</h2></template
        >
        <base-input
            v-model="form.status"
            class="w-full"
            label="Status"
            type="select"
        >
            <option v-for="option in options" :key="option" :value="option">
                {{ option }}
            </option>
        </base-input>
        <base-button
            color="purple"
            label="Submit"
            type="submit"
            @click="submit"
        />
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
        BaseInput,
    },

    setup() {
        const show = ref(false);
        const options = ["Waiting", "In Progress", "Completed"];

        const toggleModal = inject("toggleStatusModal");
        const ticket = inject("ticket");
        const mode = inject("mode");

        const form = useForm({
            status: ticket?.status,
        });

        // onMounted(() => {
        //     if (mode.value.toLowerCase() === "edit") step.value = 2;
        // });

        function submit() {
            const options = {
                preserveState: true,
                preserveScroll: true,
                onSuccess: () => toggleModal(),
            };

            form.put(route("tickets.update", ticket.id), options);
        }

        return {
            mode,

            options,
            toggleModal,
            form,

            show,

            submit,
        };
    },
};
</script>
