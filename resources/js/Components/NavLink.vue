<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() =>
    props.active
        ? 'group flex items-center font-medium px-18px py-15px rounded-[10px] bg-primary text-white'
        : 'group flex items-center font-medium px-18px py-15px text-2nd-text-color rounded-[10px] hover:bg-primary hover:text-white'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
