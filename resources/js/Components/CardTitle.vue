<template>
    <div class="bg-purple-400 w-full h-12">
        <div class="m-4 pt-3 font-medium text-white">{{ title }}</div>
    </div>
</template>
<script>
export default {
    props: {
        title: String,
    },
};
</script>
