<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
</script>


<template>
    <AuthenticatedLayout>

        <section>
            <Profile></Profile>

            <div class="pl-30px pr-5 pt-30px pb-30px">
                <div class="heading flex justify-between items-center pb-30px">
                    <div class="title font-semibold text-2xl leading-9 text-title-color">Payment Request</div>
                </div>
                <div class='relative'>
                    <div
                        class="overflow-x-auto scrollbar scrollbar-track-gray scrollbar-thumb-[#B0B0B0] scrollbar-h-[5px] scrollbar-thumb-rounded-md scrollbar-track-rounded-md">
                        <table class='w-[100%] whitespace-nowrap mb-5'>
                            <thead>
                                <tr class='border-b border-border-color'>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px'>No</th>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px pl-10'>
                                        User Name</th>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px pl-10'>
                                        Email</th>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px pl-10'>
                                        Request Date</th>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px pl-10'>
                                        Request Date</th>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px pl-10'>
                                        Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                    <td class='py-25px font-medium text-sm'>
                                        <a href="/">01</a>
                                    </td>
                                    <td class='py-25px font-medium text-sm pl-10'>
                                        <a href="/">Hussain Ahmed</a>
                                    </td>
                                    <td class='py-25px font-medium text-sm pl-10'>
                                        <a href="/">hussainahmed@gmail.com</a>
                                    </td>
                                    <td class='py-25px font-medium text-sm pl-10'>
                                        <a href="/">01-05-2023</a>
                                    </td>
                                    <td class='py-15px flex justify-between min-w-[151px] gap-1 pl-10 items-center'>
                                        <span class='font-medium text-22px leading-8'>$500</span>
                                        <button
                                            class='text-base leading-22px py-2 px-15px bg-gray rounded-[5px] hover:bg-primary hover:text-white'>Pay</button>
                                    </td>
                                    <td class='paid py-25px font-medium text-sm pl-10 text-green'>
                                        <a href="/">paid</a>
                                    </td>
                                </tr>
                                <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                    <td class='py-25px font-medium text-sm'>
                                        <a href="/">01</a>
                                    </td>
                                    <td class='py-25px font-medium text-sm pl-10'>
                                        <a href="/">Hussain Ahmed</a>
                                    </td>
                                    <td class='py-25px font-medium text-sm pl-10'>
                                        <a href="/">hussainahmed@gmail.com</a>
                                    </td>
                                    <td class='py-25px font-medium text-sm pl-10'>
                                        <a href="/">01-05-2023</a>
                                    </td>
                                    <td class='py-15px flex justify-between min-w-[151px] gap-1 pl-10 items-center'>
                                        <span class='font-medium text-22px leading-8'>$500</span>
                                        <button
                                            class='text-base leading-22px py-2 px-15px bg-gray rounded-[5px] hover:bg-primary hover:text-white'>Pay</button>
                                    </td>
                                    <td class='pending py-25px font-medium text-sm pl-10 text-orange'>
                                        <a href="/">Pending</a>
                                    </td>
                                </tr>
                                <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                    <td class='py-25px font-medium text-sm'>
                                        <a href="/">01</a>
                                    </td>
                                    <td class='py-25px font-medium text-sm pl-10'>
                                        <a href="/">Hussain Ahmed</a>
                                    </td>
                                    <td class='py-25px font-medium text-sm pl-10'>
                                        <a href="/">hussainahmed@gmail.com</a>
                                    </td>
                                    <td class='py-25px font-medium text-sm pl-10'>
                                        <a href="/">01-05-2023</a>
                                    </td>
                                    <td class='py-15px flex justify-between min-w-[151px] gap-1 pl-10 items-center'>
                                        <span class='font-medium text-22px leading-8'>$2,500</span>
                                        <button
                                            class='text-base leading-22px py-2 px-15px bg-gray rounded-[5px] hover:bg-primary hover:text-white'>Pay</button>
                                    </td>
                                    <td class='pending py-25px font-medium text-sm pl-10 text-orange'>
                                        <a href="/">Pending</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <Pagination></Pagination>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
