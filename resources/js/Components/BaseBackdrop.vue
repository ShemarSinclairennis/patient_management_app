<template>
    <div
        :class="{ 'bg-opacity-0': transparent, 'bg-opacity-50': !transparent }"
        class="bg-purple-400 fixed z-30 inset-0"
    >
        <slot />
    </div>
</template>

<script>
export default {
    props: {
        transparent: Boolean,
    },
};
</script>
