<template>
    <base-card class="h-64">
        <div class="flex justify-between m-4">
            <p class="text-xl text-gray-400">{{ service }}</p>
            <div class="flex space-x-4">
                <div>
                    <i v-if="attachment" class="fa-solid fa-paperclip"></i>
                </div>

                <department-tag
                    :icon-color="department"
                    icon="fa-solid fa-circle"
                />
            </div>
        </div>
        <div class="flex justify-between m-4">
            <p class="text-sm text-black mt-6">
                {{ description }}
            </p>
        </div>
        <div class="flex justify-between m-4 mt-14">
            <p class="text-xs text-gray-400">{{ date }}</p>
            <div class="flex space-x-4">
                <div>
                    <i class="fa-solid fa-eye text-blue-400"></i>
                </div>
            </div>
        </div>
    </base-card>
</template>

<script>
import BaseCard from "@/Components/BaseCard";
import DepartmentTag from "@/Components/DepartmentTag";
export default {
    components: {
        BaseCard,
        DepartmentTag,
    },
    props: {
        department: String,
        attachment: Boolean,
        description: String,
        date: String,
        service: String,
        iconColor: String,
    },
};
</script>
