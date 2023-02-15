<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';


</script>

<template>
    <AuthenticatedLayout>
        <section>
            <div class="pl-30px pr-5 pt-5 pb-30px">
                <div class="heading flex justify-between items-center pb-9">
                    <div class="title font-semibold text-2xl leading-9 text-title-color">Approved Or Reject Profile</div>
                </div>
                <div class='relative'>
                    <div class="overflow-x-auto scrollbar scrollbar-track-gray scrollbar-thumb-[#B0B0B0] scrollbar-h-[5px] scrollbar-thumb-rounded-md scrollbar-track-rounded-md">
                        <table class='w-[100%] whitespace-nowrap mr-[223px] mb-5'>
                            <thead>
                                <tr class='border-b border-border-color'>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px'>No</th>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px pl-10'>User Name</th>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px pl-10'>Email</th>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px pl-10'>Promote Source</th>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px pl-10'>Source a 1*</th>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px pl-10'>Source a 2*</th>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px pl-10'>Payment Method</th>
                                    <th class='text-left leading-22px text-title-color font-medium pb-25px pl-10'>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                    <td class='py-25px font-medium text-sm'><a href="/">01</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">Hussain Ahmed</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">ahmedhussain@gmail.com</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">Youtube</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">https://www.youtube...</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">https://www.youtube...</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">Wise</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">Describe about you...</a></td>
                                </tr>
                                <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                    <td class='py-25px font-medium text-sm'><a href="/">01</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">Hussain Ahmed</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">ahmedhussain@gmail.com</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">Youtube</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">https://www.youtube...</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">https://www.youtube...</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">Wise</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">Describe about you...</a></td>
                                </tr>
                                <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                    <td class='py-25px font-medium text-sm'><a href="/">01</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">Hussain Ahmed</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">ahmedhussain@gmail.com</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">Youtube</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">https://www.youtube...</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">https://www.youtube...</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">Wise</a></td>
                                    <td class='py-25px font-medium text-sm pl-10'><a href="/">Describe about you...</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class='absolute top-0 right-0 bg-white'>
                            <tr class='border-b border-border-color'>
                                <th class=' text-left leading-22px text-title-color font-medium pb-25px w-[224px]'>Action</th>
                            </tr>
                            <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                <td class='py-13px font-medium text-sm flex gap-[14px]'>
                                    <a class='bg-gray hover:bg-primary text-sm font-semibold rounded-[8px] px-15px py-13px hover:text-white text-text-color'>Approved</a>
                                    <a class='bg-gray hover:bg-red text-sm font-semibold rounded-[8px] px-[27px] py-13px hover:text-white text-text-color'>Reject</a>
                                </td>
                            </tr>
                            <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                <td class='py-13px font-medium text-sm flex gap-[14px]'>
                                    <a class='bg-gray hover:bg-primary text-sm font-semibold rounded-[8px] px-15px py-13px hover:text-white text-text-color'>Approved</a>
                                    <a class='bg-gray hover:bg-red text-sm font-semibold rounded-[8px] px-[27px] py-13px hover:text-white text-text-color'>Reject</a>
                                </td>
                            </tr>
                            <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                <td class='py-13px font-medium text-sm flex gap-[14px]'>
                                    <a class='bg-gray hover:bg-primary text-sm font-semibold rounded-[8px] px-15px py-13px hover:text-white text-text-color'>Approved</a>
                                    <a class='bg-gray hover:bg-red text-sm font-semibold rounded-[8px] px-[27px] py-13px hover:text-white text-text-color'>Reject</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <Pagination></Pagination>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
