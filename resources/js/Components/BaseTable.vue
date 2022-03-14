<template>
    <div :class="{ 'table-container': !containerHeight }" :style="styles">
        <table :class="{ empty: empty }" class="table-custom">
            <thead>
                <slot name="head" />
            </thead>

            <tbody>
                <slot name="body" />
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        empty: Boolean,
        containerHeight: String,
        scrollable: Boolean,
    },

    computed: {
        styles() {
            if (this.containerHeight && !this.scrollable) {
                return {
                    minHeight: this.containerHeight,
                };
            }

            if (this.containerHeight && this.scrollable) {
                return {
                    maxHeight: this.containerHeight,
                    overflowY: "auto",
                };
            }

            return {};
        },
    },
};
</script>
