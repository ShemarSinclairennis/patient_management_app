<template>
    <button
        :class="{
            'bg-green-400': color === 'green',
            'bg-blue-400': color === 'blue',
            'bg-purple-400': color === 'purple',
            'bg-orange-400': color === 'orange',
            'bg-red-400': color === 'red',
        }"
        class="hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-full"
        :type="type"
    >
        {{ label }}
        <i :class="icon"></i>
    </button>
</template>
<script>
export default {
    props: {
        type: String,
        label: String,
        icon: String,
        color: String,
    },
};
</script>
