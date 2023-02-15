<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Pagination from './Pagination.vue';
</script>

<template>
    <AuthenticatedLayout>
        <section>
            <div class="pr-5 pl-30px pt-5 pb-30px">
                <div class="heading flex justify-between items-center pb-9">
                    <div class="title font-semibold text-2xl leading-9 text-title-color">Upload Queue</div>
                </div>
                <div class="table-container">

                    <p class='text-base leading-22px mb-[21px]'>Total: <span>62,500</span></p>

                    <div class='relative'>
                        <div
                            class="overflow-x-auto scrollbar scrollbar-track-gray scrollbar-thumb-[#B0B0B0] scrollbar-h-[5px] scrollbar-thumb-rounded-md scrollbar-track-rounded-md">
                            <table class='w-[100%] whitespace-nowrap mr-[127px] mb-5'>
                                <thead>
                                    <tr class='border-b border-border-color'>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px'>No</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-10'>
                                            List</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-10'>
                                            Tags</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-10'>
                                            Created At</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-10'>
                                            Uploaded</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-10'>
                                            New Added</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-10'>
                                            Already Exist</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-10'>
                                            Failed</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-10'>
                                            Error</th>
                                        <th
                                            class='text-left leading-22px text-title-color font-medium pb-15px pl-10 pr-3'>
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                        <td class='py-15px font-medium text-sm'>01</td>
                                        <td class='py-15px font-medium text-sm pl-10'>UIUX Design Agency</td>
                                        <td class='py-15px font-medium text-sm pl-10'>uiux design agency</td>
                                        <td class='py-15px font-medium text-sm pl-10'>
                                            <p>2023-01-.-</p>
                                            <p>09T10.07.22.000000Z</p>
                                        </td>
                                        <td class='py-15px font-medium text-sm pl-10'>5,0824</td>
                                        <td class='py-15px font-medium text-sm pl-10'>14839</td>
                                        <td class='py-15px font-medium text-sm pl-10'>56248</td>
                                        <td class='py-15px font-medium text-sm pl-10'>56248</td>
                                        <td class='py-15px pl-10'>
                                            <button
                                                class='font-medium text-sm py-10px px-15px rounded-[5px] text-text-color hover:text-white bg-gray hover:bg-primary'>Show</button>
                                        </td>
                                        <td class='py-15px font-medium text-sm pl-10 pr-3'>Completed</td>
                                    </tr>
                                    <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                        <td class='py-15px font-medium text-sm'>01</td>
                                        <td class='py-15px font-medium text-sm pl-10'>UIUX Design Agency</td>
                                        <td class='py-15px font-medium text-sm pl-10'>uiux design agency</td>
                                        <td class='py-15px font-medium text-sm pl-10'>
                                            <p>2023-01-.-</p>
                                            <p>09T10.07.22.000000Z</p>
                                        </td>
                                        <td class='py-15px font-medium text-sm pl-10'>5,0824</td>
                                        <td class='py-15px font-medium text-sm pl-10'>14839</td>
                                        <td class='py-15px font-medium text-sm pl-10'>56248</td>
                                        <td class='py-15px font-medium text-sm pl-10'>56248</td>
                                        <td class='py-15px pl-10'>
                                            <button
                                                class='font-medium text-sm py-10px px-15px rounded-[5px] text-text-color hover:text-white bg-gray hover:bg-primary'>Show</button>
                                        </td>
                                        <td class='py-15px font-medium text-sm pl-10 pr-3'>Completed</td>
                                    </tr>
                                    <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                        <td class='py-15px font-medium text-sm'>01</td>
                                        <td class='py-15px font-medium text-sm pl-10'>UIUX Design Agency</td>
                                        <td class='py-15px font-medium text-sm pl-10'>uiux design agency</td>
                                        <td class='py-15px font-medium text-sm pl-10'>
                                            <p>2023-01-.-</p>
                                            <p>09T10.07.22.000000Z</p>
                                        </td>
                                        <td class='py-15px font-medium text-sm pl-10'>5,0824</td>
                                        <td class='py-15px font-medium text-sm pl-10'>14839</td>
                                        <td class='py-15px font-medium text-sm pl-10'>56248</td>
                                        <td class='py-15px font-medium text-sm pl-10'>56248</td>
                                        <td class='py-15px pl-10'>
                                            <button
                                                class='font-medium text-sm py-10px px-15px rounded-[5px] text-text-color hover:text-white bg-gray hover:bg-primary'>Show</button>
                                        </td>
                                        <td class='py-15px font-medium text-sm pl-10 pr-3'>Completed</td>
                                    </tr>
                                </tbody>

                                <table class='absolute top-0 right-0 bg-white'>
                                    <tr class='border-b border-border-color'>
                                        <th
                                            class=' text-left leading-22px text-title-color font-medium pb-15px w-[128px]'>
                                            Action</th>
                                    </tr>
                                    <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                        <td class='py-15px font-medium text-sm flex'>
                                            <button
                                                class='group bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-12px py-[8px]  text-white group'>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path class="group-hover:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.5455 3.36891C16.4817 2.43269 17.9996 2.43269 18.9358 3.36891L20.631 5.06408C21.5672 6.00029 21.5672 7.5182 20.631 8.45441L19.128 9.9574C19.01 9.89898 18.8859 9.8358 18.7572 9.76804C17.8908 9.31193 16.8627 8.67178 16.0955 7.9045C15.3282 7.13723 14.688 6.10914 14.2319 5.24278C14.1641 5.11404 14.101 4.98989 14.0425 4.87189L15.5455 3.36891ZM14.9955 9.00445C15.9035 9.91239 17.0581 10.627 17.9726 11.1128L12.0621 17.0233C11.6953 17.3901 11.2195 17.628 10.706 17.7014L7.14612 18.2099C6.35504 18.3229 5.67697 17.6449 5.78998 16.8538L6.29853 13.294C6.37189 12.7805 6.60982 12.3046 6.9766 11.9378L12.8871 6.02729C13.3729 6.94177 14.0875 8.09649 14.9955 9.00445ZM3.44428 19.7779C3.01473 19.7779 2.6665 20.1261 2.6665 20.5556C2.6665 20.9852 3.01473 21.3334 3.44428 21.3334H20.5554C20.9849 21.3334 21.3332 20.9852 21.3332 20.5556C21.3332 20.1261 20.9849 19.7779 20.5554 19.7779H3.44428Z"
                                                        fill="#929292" />
                                                </svg>
                                            </button>
                                            <button
                                                class='group bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-12px py-[8px] ml-15px text-white group'>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path class="group-hover:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.40627 2.8906C9.7772 2.3342 10.4017 2 11.0704 2H12.9296C13.5983 2 14.2228 2.3342 14.5937 2.8906L15.5 4.25H19.25C19.6642 4.25 20 4.58579 20 5C20 5.41421 19.6642 5.75 19.25 5.75H4.75C4.33579 5.75 4 5.41421 4 5C4 4.58579 4.33579 4.25 4.75 4.25H8.5L9.40627 2.8906ZM15 22H9C6.79086 22 5 20.2091 5 18V7H19V18C19 20.2091 17.2091 22 15 22ZM10 10.25C10.4142 10.25 10.75 10.5858 10.75 11V18C10.75 18.4142 10.4142 18.75 10 18.75C9.58579 18.75 9.25 18.4142 9.25 18L9.25 11C9.25 10.5858 9.58579 10.25 10 10.25ZM14 10.25C14.4142 10.25 14.75 10.5858 14.75 11V18C14.75 18.4142 14.4142 18.75 14 18.75C13.5858 18.75 13.25 18.4142 13.25 18V11C13.25 10.5858 13.5858 10.25 14 10.25Z"
                                                        fill="#929292" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                        <td class='py-15px font-medium text-sm flex'>
                                            <button
                                                class='group bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-12px py-[8px]  text-white group'>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path class="group-hover:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.5455 3.36891C16.4817 2.43269 17.9996 2.43269 18.9358 3.36891L20.631 5.06408C21.5672 6.00029 21.5672 7.5182 20.631 8.45441L19.128 9.9574C19.01 9.89898 18.8859 9.8358 18.7572 9.76804C17.8908 9.31193 16.8627 8.67178 16.0955 7.9045C15.3282 7.13723 14.688 6.10914 14.2319 5.24278C14.1641 5.11404 14.101 4.98989 14.0425 4.87189L15.5455 3.36891ZM14.9955 9.00445C15.9035 9.91239 17.0581 10.627 17.9726 11.1128L12.0621 17.0233C11.6953 17.3901 11.2195 17.628 10.706 17.7014L7.14612 18.2099C6.35504 18.3229 5.67697 17.6449 5.78998 16.8538L6.29853 13.294C6.37189 12.7805 6.60982 12.3046 6.9766 11.9378L12.8871 6.02729C13.3729 6.94177 14.0875 8.09649 14.9955 9.00445ZM3.44428 19.7779C3.01473 19.7779 2.6665 20.1261 2.6665 20.5556C2.6665 20.9852 3.01473 21.3334 3.44428 21.3334H20.5554C20.9849 21.3334 21.3332 20.9852 21.3332 20.5556C21.3332 20.1261 20.9849 19.7779 20.5554 19.7779H3.44428Z"
                                                        fill="#929292" />
                                                </svg>
                                            </button>
                                            <button
                                                class='group bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-12px py-[8px] ml-15px text-white group'>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path class="group-hover:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.40627 2.8906C9.7772 2.3342 10.4017 2 11.0704 2H12.9296C13.5983 2 14.2228 2.3342 14.5937 2.8906L15.5 4.25H19.25C19.6642 4.25 20 4.58579 20 5C20 5.41421 19.6642 5.75 19.25 5.75H4.75C4.33579 5.75 4 5.41421 4 5C4 4.58579 4.33579 4.25 4.75 4.25H8.5L9.40627 2.8906ZM15 22H9C6.79086 22 5 20.2091 5 18V7H19V18C19 20.2091 17.2091 22 15 22ZM10 10.25C10.4142 10.25 10.75 10.5858 10.75 11V18C10.75 18.4142 10.4142 18.75 10 18.75C9.58579 18.75 9.25 18.4142 9.25 18L9.25 11C9.25 10.5858 9.58579 10.25 10 10.25ZM14 10.25C14.4142 10.25 14.75 10.5858 14.75 11V18C14.75 18.4142 14.4142 18.75 14 18.75C13.5858 18.75 13.25 18.4142 13.25 18V11C13.25 10.5858 13.5858 10.25 14 10.25Z"
                                                        fill="#929292" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                        <td class='py-15px font-medium text-sm flex'>
                                            <button
                                                class='group bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-12px py-[8px]  text-white group'>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path class="group-hover:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.5455 3.36891C16.4817 2.43269 17.9996 2.43269 18.9358 3.36891L20.631 5.06408C21.5672 6.00029 21.5672 7.5182 20.631 8.45441L19.128 9.9574C19.01 9.89898 18.8859 9.8358 18.7572 9.76804C17.8908 9.31193 16.8627 8.67178 16.0955 7.9045C15.3282 7.13723 14.688 6.10914 14.2319 5.24278C14.1641 5.11404 14.101 4.98989 14.0425 4.87189L15.5455 3.36891ZM14.9955 9.00445C15.9035 9.91239 17.0581 10.627 17.9726 11.1128L12.0621 17.0233C11.6953 17.3901 11.2195 17.628 10.706 17.7014L7.14612 18.2099C6.35504 18.3229 5.67697 17.6449 5.78998 16.8538L6.29853 13.294C6.37189 12.7805 6.60982 12.3046 6.9766 11.9378L12.8871 6.02729C13.3729 6.94177 14.0875 8.09649 14.9955 9.00445ZM3.44428 19.7779C3.01473 19.7779 2.6665 20.1261 2.6665 20.5556C2.6665 20.9852 3.01473 21.3334 3.44428 21.3334H20.5554C20.9849 21.3334 21.3332 20.9852 21.3332 20.5556C21.3332 20.1261 20.9849 19.7779 20.5554 19.7779H3.44428Z"
                                                        fill="#929292" />
                                                </svg>
                                            </button>
                                            <button
                                                class='group bg-gray hover:bg-primary text-sm font-medium rounded-[5px] px-12px py-[8px] ml-15px text-white group'>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path class="group-hover:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.40627 2.8906C9.7772 2.3342 10.4017 2 11.0704 2H12.9296C13.5983 2 14.2228 2.3342 14.5937 2.8906L15.5 4.25H19.25C19.6642 4.25 20 4.58579 20 5C20 5.41421 19.6642 5.75 19.25 5.75H4.75C4.33579 5.75 4 5.41421 4 5C4 4.58579 4.33579 4.25 4.75 4.25H8.5L9.40627 2.8906ZM15 22H9C6.79086 22 5 20.2091 5 18V7H19V18C19 20.2091 17.2091 22 15 22ZM10 10.25C10.4142 10.25 10.75 10.5858 10.75 11V18C10.75 18.4142 10.4142 18.75 10 18.75C9.58579 18.75 9.25 18.4142 9.25 18L9.25 11C9.25 10.5858 9.58579 10.25 10 10.25ZM14 10.25C14.4142 10.25 14.75 10.5858 14.75 11V18C14.75 18.4142 14.4142 18.75 14 18.75C13.5858 18.75 13.25 18.4142 13.25 18V11C13.25 10.5858 13.5858 10.25 14 10.25Z"
                                                        fill="#929292" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </table>
                        </div>
                    </div>

                </div>

                <Pagination></Pagination>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
