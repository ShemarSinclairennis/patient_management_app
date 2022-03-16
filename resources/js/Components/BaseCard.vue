<template>
    <div class="shadow-lg mr-8 bg-white">
        <slot />
    </div>
</template>
<script>
export default {
    props: {
        title: String,
    },
};
</script>
