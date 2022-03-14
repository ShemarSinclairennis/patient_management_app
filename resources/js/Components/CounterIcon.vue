<template>
    <div
        :class="{
            'text-green-400': iconColor === 'green',
            'text-blue-400': iconColor === 'blue',
            'text-purple-400': iconColor === 'purple',
            'text-orange-400': iconColor === 'orange',
            'text-red-400': iconColor === 'red',
        }"
        class="flex items-center space-x-4"
    >
        <div class="text-xl">
            {{ service }}
        </div>
        <div class="text-3xl">
            {{ count }}
        </div>
        <div v-if="icon">
            <i :class="icon" class="fa-3x"></i>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        service: String,
        count: String,
        iconColor: String,
        icon: String,
    },
};
</script>
