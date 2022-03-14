<template>
    <div
        class="min-w-[170px] inline-flex justify-center items-center rounded-md px-4 py-2 text-white"
        :class="{
            'bg-green-400': color === 'green',
            'bg-blue-400': color === 'blue',
            'bg-gray-50': color === 'gray',
        }"
    >
        <i class="mr-2" :class="icon" v-if="icon"></i>
        <span v-text="label"></span>
    </div>
</template>

<script>
export default {
    props: {
        color: String,
        icon: String,
        label: String,
    },
};
</script>
