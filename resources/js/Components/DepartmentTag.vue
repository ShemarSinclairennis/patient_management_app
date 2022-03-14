<template>
    <div
        :class="{
            'text-green-500': iconColor === 'Pediatric',
            'text-green-600': iconColor === 'Opthamology',
            'text-blue-400': iconColor === 'Orthopaedics',
            'text-purple-400': iconColor === 'Otolaryngology',
            'text-pink': iconColor === 'OB/GYN',
            'text-orange-400': iconColor === 'Gastroenterology',
            'text-red-400': iconColor === 'Cardiothoracic',
            'text-teal': iconColor === 'Neurology',
            'text-yellow': iconColor === 'Urology',
        }"
        class="flex items-center space-x-4"
    >
        <div v-if="icon">
            <i :class="icon"></i>
        </div>
        <div class="font-light text-gray-400">
            {{ department }}
        </div>
    </div>
</template>

<script>
export default {
    props: {
        department: String,
        iconColor: String,
        icon: String,
    },
};
</script>
