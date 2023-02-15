<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import postImg from '../../assets/image/image-4.png'
import man from '../../assets/image/cheerful-curly-man.png'
import Pagination from './Pagination.vue';

</script>

<template>
    <AuthenticatedLayout>
        <section>
            <div class="px-30px pt-30px pb-30px">
                <div class="heading flex justify-between items-center pb-30px">
                    <div class="title font-semibold text-2xl leading-9 text-title-color">User Affiliate Dashboard
                    </div>
                </div>

                <div class="flex gap-5 flex-wrap">
                    <div class="min-w-[170px] p-15px rounded-15px bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='group-hover:text-white text-text-color text-base '>Total Sale</h2>
                        <h1 class='font-semibold group-hover:text-white text-title-color text-2xl leading-9'>500
                        </h1>
                    </div>
                    <div class="min-w-[170px] p-15px rounded-15px bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='group-hover:text-white text-text-color text-base '>Available Balance</h2>
                        <h1 class='font-semibold group-hover:text-white text-title-color text-2xl leading-9'>$12,000
                        </h1>
                    </div>
                    <div class="min-w-[170px] p-15px rounded-15px bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='group-hover:text-white text-text-color text-base '>This Month Earn</h2>
                        <h1 class='font-semibold group-hover:text-white text-title-color text-2xl leading-9'>$580
                        </h1>
                    </div>
                    <div class="min-w-[170px] p-15px rounded-15px bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='group-hover:text-white text-text-color text-base '>Total Earned</h2>
                        <h1 class='font-semibold group-hover:text-white text-title-color text-2xl leading-9'>
                            $150,000</h1>
                    </div>
                    <div class="min-w-[170px] p-15px rounded-15px bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='group-hover:text-white text-text-color text-base '>Total Paid</h2>
                        <h1 class='font-semibold group-hover:text-white text-title-color text-2xl leading-9'>$50,000
                        </h1>
                    </div>
                    <div class="min-w-[170px] p-15px rounded-15px bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='group-hover:text-white text-text-color text-base '>Purchase Visitor</h2>
                        <h1 class='font-semibold group-hover:text-white text-title-color text-2xl leading-9'>1,200
                        </h1>
                    </div>
                    <div class="min-w-[170px] p-15px rounded-15px bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='group-hover:text-white text-text-color text-base '>Total Visitor</h2>
                        <h1 class='font-semibold group-hover:text-white text-title-color text-2xl leading-9'>150,000
                        </h1>
                    </div>
                    <div class="min-w-[170px] p-15px rounded-15px bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='group-hover:text-white text-text-color text-base '>Total Login</h2>
                        <h1 class='font-semibold group-hover:text-white text-title-color text-2xl leading-9'>500
                        </h1>
                    </div>
                    <div class="min-w-[170px] p-15px rounded-15px bg-gray hover:bg-primary cursor-pointer group">
                        <h2 class='group-hover:text-white text-text-color text-base '>Total Sign Up</h2>
                        <h1 class='font-semibold group-hover:text-white text-title-color text-2xl leading-9'>500
                        </h1>
                    </div>
                </div>
            </div>
        </section>
    </AuthenticatedLayout>
</template>

