<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';


</script>

<template>
    <AuthenticatedLayout>
        <section class='flex-1'>
            <div class="">
                <div class="py-30px max-w-[780px] mx-auto">

                    <div class="pb-30px">
                        <h2 class="text-2xl leading-9 text-title-color font-semibold">Profile Information</h2>
                    </div>

                    <div>
                        <form>
                            <div class="flex gap-5">
                                <div class='mb-25px flex-1'>
                                    <label class='font-medium text-text-color leading-22px inline-block pb-10px' htmlFor="user-full-name">Full Name</label>
                                    <input
                                        class='w-full border outline-none focus:border-primary border-border-color py-13px px-15px text-title-color rounded-10px text-base leading-22px'
                                        id='user-full-name' type="text" placeholder='Name' >
                                </div>
                                <div class='mb-25px flex-1'>
                                    <label class='font-medium text-text-color leading-22px inline-block pb-10px' htmlFor="sequence-name">E-mail</label>
                                    <input
                                        class='w-full border focus:border-primary outline-none border-border-color py-13px px-15px text-title-color rounded-10px text-base leading-22px'
                                        id='sequence-name' type="email" placeholder='email' >
                                </div>
                            </div>
                            <div class='mb-25px'>
                                <label class='font-medium text-text-color leading-22px inline-block pb-10px' htmlFor="promote-sources">Promote Sources</label>
                                <input
                                    class='w-full border outline-none border-border-color py-13px px-15px text-text-color rounded-10px text-base leading-22px'
                                    id='promote-sources' type="text" placeholder='Promote sources' >
                            </div>

                            <div class="flex gap-5">
                                <div class='mb-25px flex-1'>
                                    <label class='font-medium text-text-color leading-22px inline-block pb-10px' htmlFor="source-link-1">Source Link 1</label>
                                    <input
                                        class='w-full border outline-none focus:border-primary border-border-color py-13px px-15px text-title-color rounded-10px text-base leading-22px'
                                        id='source-link-1' type="text" placeholder='Ex: youtube.com/flowgiri' >
                                </div>
                                <div class='mb-25px flex-1'>
                                    <label class='font-medium text-text-color leading-22px inline-block pb-10px' htmlFor="source-link-2">Source Link 2</label>
                                    <input
                                        class='w-full border focus:border-primary outline-none border-border-color py-13px px-15px text-title-color rounded-10px text-base leading-22px'
                                        id='source-link-2' type="text" placeholder='Your others marketing link' >
                                </div>
                            </div>
                            <div class='mb-25px'>
                                <label class='font-medium text-text-color leading-22px inline-block pb-10px' htmlFor="payment-method">Payment Method</label>
                                <input
                                    class='w-full border outline-none border-border-color py-13px px-15px text-text-color rounded-10px text-base leading-22px'
                                    id='payment-method' type="text" placeholder='Wise' >
                            </div>
                            <div class='mb-25px'>
                                <label class='font-medium text-text-color leading-22px inline-block pb-10px' htmlFor="payment-method-message">Messages</label>
                                <textarea
                                    class='w-full border outline-none h-[97px] border-border-color py-13px px-15px text-text-color rounded-10px text-base leading-22px'
                                    id='payment-method-message' placeholder='Describe about you...' ></textarea>
                            </div>

                            <div class='text-right flex justify-end items-center gap-15px'>
                                <a href="/" class='bg-gray hover:bg-red text-base leading-22px font-medium rounded-lg px-[28px] py-12px hover:text-white text-text-color'>Reject</a>
                                <a href="/" class='bg-gray hover:bg-primary text-base leading-22px font-medium rounded-lg px-15px py-12px hover:text-white text-text-color'>Approved</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
