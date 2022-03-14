<template>
    <div class="text-red-400 mt-2 text-sm font-light" v-text="message"></div>
</template>

<script>
export default {
    name: "InputError",

    props: {
        message: String,
    },
};
</script>
