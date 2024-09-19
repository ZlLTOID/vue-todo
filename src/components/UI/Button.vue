<script setup>
    defineProps({
        class: {
            type: String,
            default: 'btn btn-success'
        },
        href: {
            type: String,
            default: '#addEmployeeModal'
        },
        text: {
            type: String,
            default: 'Add New Employee'
        },
        icon: {
            type: String,
            default: '&#xE147;'
        },
    });
</script>

<template>
    <a :href="href" :class="class" data-toggle="modal"><i class="material-icons" v-html="icon"></i><span>{{ text }}</span></a>
</template>