<template>
    <li class="hover:bg-black-200">
        <Link
            class="px-3 py-2 block w-full text-left"
            :href="href"
            :method="method"
            v-if="href"
            as="button"
        >
            <i class="mr-2" :class="icon"></i>
            <span v-text="label"></span>
        </Link>

        <div v-else class="px-3 py-2">
            <i class="mr-2" :class="icon"></i>
            <span v-text="label"></span>
        </div>
    </li>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    props: {
        label: String,
        icon: String,
        href: String,
        method: {
            type: String,
            default: "get",
        },
    },

    components: {
        Link,
    },
};
</script>
