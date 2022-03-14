<template>
    <base-modalex>
        <template #heading
            ><h2 class="text-gray-500 font-medium">Add Patient</h2></template
        >

        <div v-if="step === 1">
            <card-label label="General Information" />
            <div class="grid grid-cols-3 gap-x-4">
                <base-input class="w-full" label="Gender" type="text" />

                <base-input class="w-full" label="First Name" type="text" />
                <base-input class="w-full" label="Last Name" type="text" />

                <base-input class="w-full" label="Street Address" type="text" />

                <base-input class="w-full" label="City" type="text" />

                <base-input class="w-full" label="Parish" type="text" />

                <base-input
                    class="w-full"
                    label="Phone Number (Home)"
                    type="text"
                />

                <base-input
                    class="w-full"
                    label="Phone Number (Mobile)"
                    type="text"
                />

                <base-input
                    class="w-full"
                    label="Phone Number (Work)"
                    type="text"
                />

                <base-input class="w-full" label="Date of Birth" type="date" />

                <base-input
                    class="w-full"
                    label="Birth Place (Hospital)"
                    type="text"
                />

                <base-input
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
                <base-input class="w-full" label="Title" type="text" />

                <base-input class="w-full" label="First Name" type="text" />
                <base-input class="w-full" label="Last Name" type="text" />

                <base-input class="w-full" label="Street Number" type="text" />

                <base-input class="w-full" label="City" type="text" />

                <base-input class="w-full" label="Parish" type="text" />

                <base-input
                    class="w-full"
                    label="Phone Number (Home)"
                    type="text"
                />

                <base-input
                    class="w-full"
                    label="Phone Number (Work)"
                    type="text"
                />

                <base-input
                    class="w-full"
                    label="Birth Place (Hospital)"
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
        const form = useForm({});
        const step = ref(1);

        const mode = inject("mode");

        const user = inject("user");

        // onMounted(() => {
        //     if (mode.value.toLowerCase() === "edit") step.value = 2;
        // });

        // function submit() {
        //     form.post(route("manifests.store"), {
        //         preserveState: true,
        //         preserveScroll: true,
        //         onSuccess: () => toggleModal(),
        //     });
        // }

        function next() {
            console.log("next");
            if (step.value === 1) {
                step.value = 2;
            }
        }

        return {
            form,
            step,
            show,
            user,
            next,
        };
    },
};
</script>
