<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <AuthenticatedLayout>
        <section class='flex-1'>
            <div class="UTM px-5 pt-5 pb-[30px]">
                <div class="heading flex justify-between items-center pb-[30px]">
                    <div class="title font-semibold text-2xl leading-9 text-black">UTM Report of Black Friday -  Founder & CEO</div>
                </div>

                <div class="event_container flex gap-5">
                    <div class="event_content min-w-[89px] p-[15px] rounded-lg bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='font-medium group-hover:text-white  leading-[22px]'>Visit</h2>
                        <h1 class='font-semibold group-hover:text-white text-black text-2xl leading-9'>159</h1>
                    </div>
                    <div class="event_content min-w-[89px] p-[15px] rounded-lg bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='font-medium text-black group-hover:text-white leading-[22px]'>Pricing page Visit</h2>
                        <h1 class='font-semibold text-black group-hover:text-white text-2xl leading-9'>500</h1>
                    </div>
                    <div class="event_content min-w-[89px] p-[15px] rounded-lg bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='font-medium text-black group-hover:text-white leading-[22px]'>Login page Visit</h2>
                        <h1 class='font-semibold text-black group-hover:text-white text-2xl leading-9'>950</h1>
                    </div>
                    <div class="event_content min-w-[89px] p-[15px] rounded-lg bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='font-medium text-black group-hover:text-white leading-[22px]'>Login</h2>
                        <h1 class='font-semibold text-black group-hover:text-white text-2xl leading-9'>500</h1>
                    </div>
                    <div class="event_content min-w-[89px] p-[15px] rounded-lg bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='font-medium text-black group-hover:text-white leading-[22px]'>Registered</h2>
                        <h1 class='font-semibold text-black group-hover:text-white text-2xl leading-9'>350</h1>
                    </div>
                    <div class="event_content min-w-[89px] p-[15px] rounded-lg bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='font-medium text-black group-hover:text-white leading-[22px]'>Purchased</h2>
                        <h1 class='font-semibold text-black group-hover:text-white text-2xl leading-9'>150</h1>
                    </div>
                    <div class="event_content min-w-[89px] p-[15px] rounded-lg bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='font-medium text-black group-hover:text-white leading-[22px]'>Add to cart</h2>
                        <h1 class='font-semibold text-black group-hover:text-white text-2xl leading-9'>200</h1>
                    </div>
                </div>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
