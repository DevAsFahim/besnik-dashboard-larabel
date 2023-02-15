<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Pagination from './Pagination.vue';
import { hideModal, openModal } from './modal/modal';
import Modal from './modal/index.vue';


function showContactUploadModal() {
    openModal('besnik-contact-upload');
}
</script>

<template>

    <AuthenticatedLayout>
        <section>
            <div class="pr-5 pl-30px pt-5 pb-30px">
                <div class='heading pb-30px'>
                    <div class=" flex justify-between items-center pb-5">
                        <div class="title font-semibold text-2xl leading-9 text-title-color">Contacts</div>
                        <button @click="showContactUploadModal"
                            class='modal-open bg-primary rounded-[5px] px-22px py-[14px] text-white'><span
                                class='leading-5 text-sm'>Upload</span></button>
                    </div>

                    <Modal id="besnik-contact-upload">
                        <template v-slot:title>
                            Upload Contact
                        </template>
                        <template v-slot:body>

                            <div class='mb-25px'>
                                <label class='font-medium text-title-color inline-block pb-10px' htmlFor="contactName">Name</label>
                                <input
                                    class='w-full border outline-none border-border-color py-[14px] px-15px text-text-color rounded-md text-sm leading-5'
                                    id='contactName' type="text" placeholder='Name' />
                            </div>
                            <div class='mb-25px'>
                                <label class='font-medium text-title-color inline-block pb-10px'
                                    htmlFor="contact-select-list">Lead List</label>
                                <select
                                    class='w-full outline-none border border-border-color py-[14px] px-15px text-text-color rounded-md text-sm leading-5'
                                    id="contact-select-list" placeholder='Description'>
                                    <option value="1">Select list</option>
                                </select>
                            </div>
                            <div class='mb-25px'>
                                <label class='font-medium text-title-color inline-block pb-10px'
                                    htmlFor="contact-select-tag">Tags</label>
                                <select
                                    class='w-full outline-none border border-border-color py-[14px] px-15px text-text-color rounded-md text-sm leading-5'
                                    id="contact-select-tag" placeholder='Description'>
                                    <option value="1">Select Tag</option>
                                </select>
                            </div>
                            <div class='mb-25px'>
                                <label class='font-medium text-title-color inline-block pb-10px' htmlFor="UTMGroup">Upload File</label>
                                <input class='file:p-[7px] file:border-0 file: file:rounded-[4px] file:bg-gray file:text-text-color  p-2 outline-none border border-border-color text-text-color rounded-md text-base leading-22px font-medium file:text-base file:leading-22px file:font-medium block w-full cursor-pointer'
                                    id='UTMGroup' type="file" />
                            </div>
                            <div class='mb-25px flex justify-between items-center'>
                                <div class="form-check flex items-center">
                                    <input class="bg-white rounded-[4px] border-border-color text-primary h-5 w-5 focus:ring-offset-0 focus:ring-0 mr-10px" type="checkbox" id='flexCheckDefault' />
                                    <label class="text-base leading-22px font-medium text-title-color" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <a href="/" class='text-base leading-22px font-medium text-primary'>CSV,</a>
                                    <a href="/" class='text-base leading-22px font-medium text-primary'>XLSX,</a>
                                </div>
                            </div>

                        </template>
                    </Modal>

                    <form class=''>
                        <div class='pt-5 px-5 pb-15px rounded-10px bg-gray'>
                            <div
                                class='w-full border border-border-color py-13px px-15px text-text-color rounded-md text-sm bg-white flex justify-between mb-[5px]'>
                                <span class='text-sm text-text-color cursor-default'>No filter conditions
                                    applied.</span>
                                <a href="/" class='text-sm text-text-color'>Expand Filter</a>
                            </div>
                            <div class='flex gap-4 items-end justify-between'>
                                <div class='w-full'>
                                    <label class='font-medium text-title-color text-sm inline-block pb-10px'
                                        htmlFor="email">Email</label>
                                    <input
                                        class='w-full border border-border-color outline-none focus:border-primary py-13px px-15px text-text-color rounded-md text-sm '
                                        id='email' type="text" />
                                </div>
                                <div class='w-full'>
                                    <label class='font-medium text-sm text-title-color inline-block pb-10px'
                                        htmlFor="List">List</label>
                                    <select
                                        class='w-full border border-border-color outline-none focus:border-primary py-13px px-15px text-text-color rounded-md text-sm '
                                        id="List">
                                        <option value="1">Select lists</option>
                                    </select>
                                </div>
                                <div class='w-full'>
                                    <label class='font-medium text-sm text-title-color inline-block pb-10px'
                                        htmlFor="Tags">Tags</label>
                                    <select
                                        class='w-full border border-border-color outline-none focus:border-primary py-13px px-15px text-text-color rounded-md text-sm '
                                        id="Tags">
                                        <option value="1">Select lists</option>
                                    </select>
                                </div>
                                <div class='w-full'>
                                    <label class='font-medium text-sm text-title-color inline-block pb-10px'
                                        htmlFor="Tags">Industry</label>
                                    <select
                                        class='w-full border border-border-color outline-none focus:border-primary py-13px px-15px text-text-color rounded-md text-sm '
                                        id="Tags">
                                        <option value="1">Select lists</option>
                                    </select>
                                </div>
                            </div>
                            <div class="see-more mt-5">
                                <a href="/" class='flex gap-[6px] items-center'>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V11M1 6L11 6" stroke="#929292" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class='text-sm font-medium text-text-color'>Add Filters</span>
                                </a>
                            </div>
                        </div>
                        <div class='flex justify-between items-start mt-15px'>
                            <div class="see-more ml-5 ">
                                <a href="/" class='flex gap-[6px] items-center'>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V11M1 6L11 6" stroke="#929292" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class='text-sm font-medium text-text-color'>Or</span>
                                </a>
                            </div>
                            <div class='pt-[5px] flex gap-15px'>
                                <button
                                    class='border-border-color bg-gray p-15px text-text-color rounded-md text-xs text-medium'>
                                    <span>Collapse</span></button>
                                <button
                                    class='bg-primary p-15px text-white rounded-md text-xs text-medium flex gap-[7px]'>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.25 5.25H4.5M4.5 5.25C4.5 6.49264 5.50736 7.5 6.75 7.5C7.99264 7.5 9 6.49264 9 5.25C9 4.00736 7.99264 3 6.75 3C5.50736 3 4.5 4.00736 4.5 5.25ZM2.25 12.75H6.75M13.5 12.75H15.75M13.5 12.75C13.5 13.9926 12.4926 15 11.25 15C10.0074 15 9 13.9926 9 12.75C9 11.5074 10.0074 10.5 11.25 10.5C12.4926 10.5 13.5 11.5074 13.5 12.75ZM11.25 5.25H15.75"
                                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    <span>Filter</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-container">

                    <p class='text-base leading-22px mb-[21px]'>Total: <span>62,500</span></p>

                    <div class="relative">
                        <div
                            class='overflow-x-auto scrollbar scrollbar-track-gray scrollbar-thumb-[#B0B0B0] scrollbar-h-[5px] scrollbar-thumb-rounded-md scrollbar-track-rounded-md'>
                            <table class='w-[100%] whitespace-nowrap mr-[51px] mb-5'>
                                <thead>
                                    <tr class='border-b border-border-color'>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px'>No</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-3'>
                                            First Name</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-3'>
                                            Last Name</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-3'>
                                            Name</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-3'>
                                            Email</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-3'>
                                            List Name</th>
                                        <th class='text-left leading-22px text-title-color font-medium pb-15px pl-3'>
                                            Tags</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                        <td class='py-25px font-medium text-sm'>01</td>
                                        <td class='py-25px font-medium text-sm'>John</td>
                                        <td class='py-25px font-medium text-sm'>Smith</td>
                                        <td class='py-25px font-medium text-sm'>John Smith</td>
                                        <td class='py-25px font-medium text-sm flex gap-[7px] items-center'>
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#85CC20" />
                                            </svg>
                                            <span>johnsmith@gmail.com</span>
                                        </td>
                                        <td class='py-25px font-medium text-sm'>Verify Email</td>
                                        <td class='py-25px font-medium text-sm'><a href="/"
                                                class='bg-gray py-[6px] px-10px rounded-full'>Bounce</a></td>
                                    </tr>
                                    <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                        <td class='py-25px font-medium text-sm'>01</td>
                                        <td class='py-25px font-medium text-sm'>John</td>
                                        <td class='py-25px font-medium text-sm'>Smith</td>
                                        <td class='py-25px font-medium text-sm'>John Smith</td>
                                        <td class='py-25px font-medium text-sm flex gap-[7px] items-center'>
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#F6D068"/>
                                                </svg>

                                            <span>johnsmith@gmail.com</span>
                                        </td>
                                        <td class='py-25px font-medium text-sm'>Verify Email</td>
                                        <td class='py-25px font-medium text-sm'><a href="/"
                                                class='bg-gray py-[6px] px-10px rounded-full'>Bounce</a></td>
                                    </tr>
                                    <tr class='border-b text-text-color hover:text-title-color border-border-color'>
                                        <td class='py-25px font-medium text-sm'>01</td>
                                        <td class='py-25px font-medium text-sm'>John</td>
                                        <td class='py-25px font-medium text-sm'>Smith</td>
                                        <td class='py-25px font-medium text-sm'>John Smith</td>
                                        <td class='py-25px font-medium text-sm flex gap-[7px] items-center'>
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#F65353"/>
                                                </svg>
                                            <span>johnsmith@gmail.com</span>
                                        </td>
                                        <td class='py-25px font-medium text-sm'>Verify Email</td>
                                        <td class='py-25px font-medium text-sm'><a href="/"
                                                class='bg-gray py-[6px] px-10px rounded-full'>Bounce</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='absolute top-0 right-0 bg-white'>
                                <tr class='border-b border-border-color'>
                                    <th class=' text-left leading-22px text-title-color font-medium pb-15px w-[52px]'>
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
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <Pagination></Pagination>
            </div>
        </section>

    </AuthenticatedLayout>
</template>
