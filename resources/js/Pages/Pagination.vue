<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
</script>


<template>

        <nav class='page flex justify-between pt-5 items-center'>
            <p class='text-title-color text-sm'>Showing 1 to 10 Items</p>
            <ul class='flex justify-end items-center gap-3'>
                <li>
                    <a class='px-[14px] py-2 cursor-pointer'>
                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 1L1 6L6 11" stroke="#929292" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                    </a>
                </li>
                <li>
                    <a class='text-sm text-border-color bg-primary rounded-[5px] px-[14px] py-2 cursor-pointer'>1</a>
                </li>
                <li>
                    <a
                        class='text-sm hover:text-border-color hover:bg-primary rounded-[5px] text-text-color px-[14px] py-2 cursor-pointer'>
                    2</a>
                </li>
                <li>
                    <a
                        class='text-sm hover:text-border-color hover:bg-primary rounded-[5px] text-text-color px-[14px] py-2 cursor-pointer'>
                    3</a>
                </li>
                <li>
                    <a
                        class='text-sm hover:text-border-color hover:bg-primary rounded-[5px] text-text-color px-[14px] py-2 cursor-pointer'>
                    4</a>
                </li>
                <li>
                    <a class='px-[14px] py-2 cursor-pointer'>
                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 11L6 6L1 1" stroke="#929292" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                    </a>
                </li>
            </ul>
        </nav>
</template>
