<template>
    <div
        :class="{
            'bg-green-400': color === 'green',
            'bg-blue-400': color === 'blue',
            'bg-purple-400': color === 'purple',
            'bg-orange-400': color === 'orange',
            'bg-red-400': color === 'red',
        }"
        class="w-full h-12"
    >
        <div class="m-4 pt-3 font-medium text-white">{{ title }}</div>
    </div>
</template>
<script>
export default {
    props: {
        title: String,
        color: String,
    },
};
</script>
