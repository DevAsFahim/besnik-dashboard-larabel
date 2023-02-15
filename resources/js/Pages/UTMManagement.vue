<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Pagination from './Pagination.vue';
import { hideModal, openModal } from './modal/modal';
import Modal from './modal/index.vue';


function showManagementAddNewModal() {
    openModal('besnik-management-add-new');
}

</script>


<template>

    <AuthenticatedLayout>
        <section>
            <div class="UTM pr-5 pl-[30px] pt-5 pb-[30px]">
                <div class="heading flex justify-between items-center pb-9">
                    <div class="title font-semibold text-2xl leading-9 text-title-color">UTM Management</div>
                    <button area_id="add-utm-modal" type="button" @click="showManagementAddNewModal"
                        class='modal-open flex justify-center bg-primary rounded-[5px] px-15px py-[14px] text-white'>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.5 1V16M1 8.5L16 8.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <span class='leading-5 ml-10px text-sm'>Add
                            New</span>
                    </button>
                </div>
                <Modal id="besnik-management-add-new">
                    <template v-slot:title>
                        Add New UTM
                    </template>
                    <template v-slot:body>
                        
                        <form class="px-30px pt-25px border-t border-border-color">
                            <div class='mb-25px '>
                                <label class='font-medium text-title-color inline-block pb-10px'
                                    htmlFor="UTMName">Name</label>
                                <input
                                    class='w-full border outline-none border-border-color py-[14px] px-15px text-text-color rounded-md text-sm leading-5'
                                    id='UTMName' type="text" placeholder='Name' />
                            </div>
                            <div class='mb-25px'>
                                <label class='font-medium text-title-color inline-block pb-10px'
                                    htmlFor="UTMDescription">Description</label>
                                <textarea
                                    class='w-full h-[110px] outline-none border border-border-color py-[14px] px-15px text-text-color rounded-md text-sm leading-5'
                                    id="UTMDescription" placeholder='Description'></textarea>
                            </div>
                            <div class='mb-25px'>
                                <label class='font-medium text-title-color inline-block pb-10px'
                                    htmlFor="UTMGroup">Group</label>
                                <input
                                    class='w-full border outline-none border-border-color py-[14px] px-15px text-text-color rounded-md text-sm leading-5'
                                    id='UTMGroup' type="text" placeholder='Group Name' />
                            </div>
                        </form>

                    </template>
                </Modal>
                <table class='w-full white-space-nowrap'>
                    <thead>
                        <tr class='border-b border-border-color'>
                            <th class='text-left leading-[22px] text-[1e1e1e] font-medium pb-[25px] pl-5'>No</th>
                            <th class='text-left leading-[22px] text-[1e1e1e] font-medium pb-[25px]'>Name</th>
                            <th class='text-left leading-[22px] text-[1e1e1e] font-medium pb-[25px]'>Description
                            </th>
                            <th class='text-left leading-[22px] text-[1e1e1e] font-medium pb-[25px] w-[226px]'>
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class='hover:shadow-[0px_10px_20px_5px_#d7d7d733] text-text-color rounded-[10px] hover:text-black shadow-[0px_10px_20px_5px_rgba(215, 215, 215, 0.2)]  cursor-pointer'>
                            <td class='py-15px pl-5 font-medium text-sm'>01</td>
                            <td class='py-15px font-medium text-sm'>uihut.com (Group)</td>
                            <td class='py-15px font-medium text-sm'>Description</td>
                            <td class='py-15px font-medium text-sm flex'>
                                <a :href="route('utmdetails')"
                                    class='bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-15px py-10px hover:text-white text-text-color'>Details</a>
                                <button
                                    class='group bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-15px py-10px ml-15px text-white'>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="group-hover:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.5455 3.36891C16.4817 2.43269 17.9996 2.43269 18.9358 3.36891L20.631 5.06408C21.5672 6.00029 21.5672 7.5182 20.631 8.45441L19.128 9.9574C19.01 9.89898 18.8859 9.8358 18.7572 9.76804C17.8908 9.31193 16.8627 8.67178 16.0955 7.9045C15.3282 7.13723 14.688 6.10914 14.2319 5.24278C14.1641 5.11404 14.101 4.98989 14.0425 4.87189L15.5455 3.36891ZM14.9955 9.00445C15.9035 9.91239 17.0581 10.627 17.9726 11.1128L12.0621 17.0233C11.6953 17.3901 11.2195 17.628 10.706 17.7014L7.14612 18.2099C6.35504 18.3229 5.67697 17.6449 5.78998 16.8538L6.29853 13.294C6.37189 12.7805 6.60982 12.3046 6.9766 11.9378L12.8871 6.02729C13.3729 6.94177 14.0875 8.09649 14.9955 9.00445ZM3.44428 19.7779C3.01473 19.7779 2.6665 20.1261 2.6665 20.5556C2.6665 20.9852 3.01473 21.3334 3.44428 21.3334H20.5554C20.9849 21.3334 21.3332 20.9852 21.3332 20.5556C21.3332 20.1261 20.9849 19.7779 20.5554 19.7779H3.44428Z"
                                            fill="#929292" />
                                    </svg>
                                </button>

                                <button
                                    class='group bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-15px py-10px ml-15px text-white'>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="group-hover:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.40627 2.8906C9.7772 2.3342 10.4017 2 11.0704 2H12.9296C13.5983 2 14.2228 2.3342 14.5937 2.8906L15.5 4.25H19.25C19.6642 4.25 20 4.58579 20 5C20 5.41421 19.6642 5.75 19.25 5.75H4.75C4.33579 5.75 4 5.41421 4 5C4 4.58579 4.33579 4.25 4.75 4.25H8.5L9.40627 2.8906ZM15 22H9C6.79086 22 5 20.2091 5 18V7H19V18C19 20.2091 17.2091 22 15 22ZM10 10.25C10.4142 10.25 10.75 10.5858 10.75 11V18C10.75 18.4142 10.4142 18.75 10 18.75C9.58579 18.75 9.25 18.4142 9.25 18L9.25 11C9.25 10.5858 9.58579 10.25 10 10.25ZM14 10.25C14.4142 10.25 14.75 10.5858 14.75 11V18C14.75 18.4142 14.4142 18.75 14 18.75C13.5858 18.75 13.25 18.4142 13.25 18V11C13.25 10.5858 13.5858 10.25 14 10.25Z"
                                            fill="#929292" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr
                            class='hover:shadow-[0px_10px_20px_5px_#d7d7d733] text-text-color rounded-[10px] hover:text-black shadow-[0px_10px_20px_5px_rgba(215, 215, 215, 0.2)]  cursor-pointer'>
                            <td class='py-15px pl-5 font-medium text-sm'>01</td>
                            <td class='py-15px font-medium text-sm'>uihut.com (Group)</td>
                            <td class='py-15px font-medium text-sm'>Description</td>
                            <td class='py-15px font-medium text-sm flex'>
                                <a :href="route('utmdetails')"
                                    class='bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-15px py-10px hover:text-white text-text-color'>Details</a>
                                <button
                                    class='group bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-15px py-10px ml-15px text-white'>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="group-hover:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.5455 3.36891C16.4817 2.43269 17.9996 2.43269 18.9358 3.36891L20.631 5.06408C21.5672 6.00029 21.5672 7.5182 20.631 8.45441L19.128 9.9574C19.01 9.89898 18.8859 9.8358 18.7572 9.76804C17.8908 9.31193 16.8627 8.67178 16.0955 7.9045C15.3282 7.13723 14.688 6.10914 14.2319 5.24278C14.1641 5.11404 14.101 4.98989 14.0425 4.87189L15.5455 3.36891ZM14.9955 9.00445C15.9035 9.91239 17.0581 10.627 17.9726 11.1128L12.0621 17.0233C11.6953 17.3901 11.2195 17.628 10.706 17.7014L7.14612 18.2099C6.35504 18.3229 5.67697 17.6449 5.78998 16.8538L6.29853 13.294C6.37189 12.7805 6.60982 12.3046 6.9766 11.9378L12.8871 6.02729C13.3729 6.94177 14.0875 8.09649 14.9955 9.00445ZM3.44428 19.7779C3.01473 19.7779 2.6665 20.1261 2.6665 20.5556C2.6665 20.9852 3.01473 21.3334 3.44428 21.3334H20.5554C20.9849 21.3334 21.3332 20.9852 21.3332 20.5556C21.3332 20.1261 20.9849 19.7779 20.5554 19.7779H3.44428Z"
                                            fill="#929292" />
                                    </svg>
                                </button>
                                <button
                                    class='group bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-15px py-10px ml-15px text-white'>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="group-hover:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.40627 2.8906C9.7772 2.3342 10.4017 2 11.0704 2H12.9296C13.5983 2 14.2228 2.3342 14.5937 2.8906L15.5 4.25H19.25C19.6642 4.25 20 4.58579 20 5C20 5.41421 19.6642 5.75 19.25 5.75H4.75C4.33579 5.75 4 5.41421 4 5C4 4.58579 4.33579 4.25 4.75 4.25H8.5L9.40627 2.8906ZM15 22H9C6.79086 22 5 20.2091 5 18V7H19V18C19 20.2091 17.2091 22 15 22ZM10 10.25C10.4142 10.25 10.75 10.5858 10.75 11V18C10.75 18.4142 10.4142 18.75 10 18.75C9.58579 18.75 9.25 18.4142 9.25 18L9.25 11C9.25 10.5858 9.58579 10.25 10 10.25ZM14 10.25C14.4142 10.25 14.75 10.5858 14.75 11V18C14.75 18.4142 14.4142 18.75 14 18.75C13.5858 18.75 13.25 18.4142 13.25 18V11C13.25 10.5858 13.5858 10.25 14 10.25Z"
                                            fill="#929292" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr
                            class='hover:shadow-[0px_10px_20px_5px_#d7d7d733] text-text-color rounded-[10px] hover:text-black shadow-[0px_10px_20px_5px_rgba(215, 215, 215, 0.2)]  cursor-pointer'>
                            <td class='py-15px pl-5 font-medium text-sm'>01</td>
                            <td class='py-15px font-medium text-sm'>uihut.com (Group)</td>
                            <td class='py-15px font-medium text-sm'>Description</td>
                            <td class='py-15px font-medium text-sm flex'>
                                <a :href="route('utmdetails')"
                                    class='bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-15px py-10px hover:text-white text-text-color'>Details</a>
                                <button
                                    class='group bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-15px py-10px ml-15px text-white'>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="group-hover:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.5455 3.36891C16.4817 2.43269 17.9996 2.43269 18.9358 3.36891L20.631 5.06408C21.5672 6.00029 21.5672 7.5182 20.631 8.45441L19.128 9.9574C19.01 9.89898 18.8859 9.8358 18.7572 9.76804C17.8908 9.31193 16.8627 8.67178 16.0955 7.9045C15.3282 7.13723 14.688 6.10914 14.2319 5.24278C14.1641 5.11404 14.101 4.98989 14.0425 4.87189L15.5455 3.36891ZM14.9955 9.00445C15.9035 9.91239 17.0581 10.627 17.9726 11.1128L12.0621 17.0233C11.6953 17.3901 11.2195 17.628 10.706 17.7014L7.14612 18.2099C6.35504 18.3229 5.67697 17.6449 5.78998 16.8538L6.29853 13.294C6.37189 12.7805 6.60982 12.3046 6.9766 11.9378L12.8871 6.02729C13.3729 6.94177 14.0875 8.09649 14.9955 9.00445ZM3.44428 19.7779C3.01473 19.7779 2.6665 20.1261 2.6665 20.5556C2.6665 20.9852 3.01473 21.3334 3.44428 21.3334H20.5554C20.9849 21.3334 21.3332 20.9852 21.3332 20.5556C21.3332 20.1261 20.9849 19.7779 20.5554 19.7779H3.44428Z"
                                            fill="#929292" />
                                    </svg>
                                </button>
                                <button
                                    class='group bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-15px py-10px ml-15px text-white'>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="group-hover:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.40627 2.8906C9.7772 2.3342 10.4017 2 11.0704 2H12.9296C13.5983 2 14.2228 2.3342 14.5937 2.8906L15.5 4.25H19.25C19.6642 4.25 20 4.58579 20 5C20 5.41421 19.6642 5.75 19.25 5.75H4.75C4.33579 5.75 4 5.41421 4 5C4 4.58579 4.33579 4.25 4.75 4.25H8.5L9.40627 2.8906ZM15 22H9C6.79086 22 5 20.2091 5 18V7H19V18C19 20.2091 17.2091 22 15 22ZM10 10.25C10.4142 10.25 10.75 10.5858 10.75 11V18C10.75 18.4142 10.4142 18.75 10 18.75C9.58579 18.75 9.25 18.4142 9.25 18L9.25 11C9.25 10.5858 9.58579 10.25 10 10.25ZM14 10.25C14.4142 10.25 14.75 10.5858 14.75 11V18C14.75 18.4142 14.4142 18.75 14 18.75C13.5858 18.75 13.25 18.4142 13.25 18V11C13.25 10.5858 13.5858 10.25 14 10.25Z"
                                            fill="#929292" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <Pagination></Pagination>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
