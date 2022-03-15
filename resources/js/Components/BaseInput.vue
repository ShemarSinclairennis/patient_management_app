<template>
    <div :class="{ 'mb-5': label, [containerClass]: true }">
        <label
            v-if="label"
            :for="id"
            class="input-label"
            v-text="label"
        ></label>

        <select
            v-if="type === 'select'"
            :id="id"
            :class="{ 'input-invalid': error }"
            :value="modelValue"
            class="input-field"
            v-bind="$attrs"
            @change="$emit('update:modelValue', $event.target.value)"
        >
            <slot />
        </select>
        <textarea
            :id="id"
            class="border p-2 appearance-none block w-full bg-white text-gray-700 border-gray-600 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            v-else-if="type === 'textarea'"
            @input="$emit('update:modelValue', $event.target.value)"
        ></textarea>

        <div v-else :class="{ 'input-invalid': error }" class="input-container">
            <i v-if="trailing" :class="trailing" class="trailing" />
            <input
                :id="id"
                ref="input"
                :type="type"
                :value="modelValue"
                v-bind="$attrs"
                @input="$emit('update:modelValue', $event.target.value)"
            />
            <i
                v-if="leading && type !== 'password'"
                :class="leading"
                class="leading"
            />
            <button type="button" @click="toggleVisibility">
                <i
                    v-if="type === 'password'"
                    ref="inputIcon"
                    class="fas fa-eye cursor-pointer"
                ></i>
            </button>
        </div>

        <input-error v-if="error" :message="error" />

        <p
            v-if="formattingHelper"
            class="text-gray text-sm mt-2"
            v-text="formattingHelper"
        />
    </div>
</template>

<script>
import InputError from "@/Components/InputError";

export default {
    props: {
        leading: String,
        trailing: String,
        modelValue: [String, Number],
        label: String,
        id: String,
        type: {
            type: String,
            default: "text",
        },
        error: String,
        formattingHelper: String,
        containerClass: String,
    },
    components: {
        InputError,
    },
    methods: {
        toggleVisibility() {
            const passwordInputIsVisible =
                this.$refs.inputIcon.classList.contains("fa-eye");
            if (passwordInputIsVisible) {
                this.$refs.inputIcon.classList.remove("fa-eye");
                this.$refs.inputIcon.classList.add("fa-eye-slash");
                this.$refs.input.type = "text";
            }
            if (!passwordInputIsVisible) {
                this.$refs.inputIcon.classList.remove("fa-eye-slash");
                this.$refs.inputIcon.classList.add("fa-eye");
                this.$refs.input.type = "password";
            }
            this.$refs.input.focus();
        },
    },
};
</script>
