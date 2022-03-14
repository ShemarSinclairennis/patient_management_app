<template>
    <div class="flex">
        <p class="font-medium text-gray-400">{{ name }}:&nbsp</p>
        <p class="text-gray-400">{{ info }}</p>
    </div>
</template>
<script>
export default {
    props: {
        info: String,
        name: String,
    },
};
</script>
