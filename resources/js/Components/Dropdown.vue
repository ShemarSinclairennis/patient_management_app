<template>
    <base-backdrop
        v-if="showDropdown"
        transparent
        @click.stop="toggleDropdown"
    />
    <div class="absolute top-2.5 right-3 md:relative md:top-0 md:right-0">
        <button
            class="py-2 pl-2 relative text-purple-400"
            v-bind="$attrs"
            @click.stop="toggleDropdown"
        >
            <i class="fas fa-ellipsis-h text-lg"></i>
        </button>

        <transition name="slide-down">
            <ul
                v-if="showDropdown"
                class="py-3 bg-purple-400 text-white absolute top-full right-0 z-40 w-40 rounded-md shadow-lg"
                @click.stop="toggleDropdown"
            >
                <slot />
            </ul>
        </transition>
    </div>
</template>

<script>
import BaseBackdrop from "@/Components/BaseBackdrop";

export default {
    components: { BaseBackdrop },

    data() {
        return {
            showDropdown: false,
        };
    },

    methods: {
        toggleDropdown() {
            this.showDropdown = !this.showDropdown;
        },
    },
};
</script>
