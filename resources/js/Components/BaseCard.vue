<template>
    <div class="shadow-lg mr-8">
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
