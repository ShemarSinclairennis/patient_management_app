<template>
    <nav
        class="shadow-xl flex flex-col justify-between bg-white sticky z-20 bottom-0 left-0 h-16 w-full xl:px-1 xl:w-64 md:h-screen md:w-32 md:py-6 md:px-4 md:top-0"
    >
        <div class="flex flex-col">
            <div class="flex justify-center mb-4">
                <i class="fas fa-circle-h fa-3x text-purple-400"></i>
            </div>

            <ul
                class="ltn-sidebar__links flex items-center w-full md:block md:mt-8"
            >
                <sidebar-link
                    :active="route().current('tickets.index')"
                    :href="route('tickets.index')"
                    icon="fa-solid fa-ticket"
                    >Tickets</sidebar-link
                >
                <sidebar-link
                    :active="route().current('patients.index')"
                    :href="route('patients.index')"
                    icon="fa-solid fa-hospital-user"
                    >Patients</sidebar-link
                >
                <sidebar-link
                    :active="route().current('requests')"
                    :href="route('requests')"
                    icon="fa-solid fa-folder-tree"
                    >Requests</sidebar-link
                >
            </ul>
        </div>

        <p class="hidden text-sm text-gray-500 text-center xl:block">
             <div class="flex justify-center mb-4">
                <i class="fas fa-circle-h fa-2x text-purple-400"></i>
            </div>
          
            <a
                class="underline"
                href="https://github.com/ShemarSinclairennis/patient_management_app"
                target="_blank"
                >Alpha 1.0.1</a
            >
        </p>
    </nav>
</template>

<script>
import SidebarLink from "@/Components/SidebarLink";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
        SidebarLink,
    },

    data() {
        return {
            isAdminUser: this.$page.props.auth.user.user_type === "admin",
            isRegularUser: this.$page.props.auth.user.user_type === "regular",
        };
    },
};
</script>
