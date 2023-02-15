<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { hideModal, openModal } from './modal/modal';
import Modal from './modal/index.vue';




function showEmailValidationResultModal() {
    openModal('besnik-email-validation-result');
}


</script>

<template>
    <AuthenticatedLayout>
        <section>
            <div class='text-center pt-[100px] pb-[167px] px-5'>
                <div class="individual-email">
                    <h1 class='font-semibold text-2xl leading-9 mb-5 text-title-color'>Individual Email Verification
                    </h1>
                    <p class='w-[553px] m-auto mb-30px text-sm text-text-color'>Verify single emails using our
                        multilayer verification process that includes syntax check, MX record check, and SMTP
                        authentication.</p>
                    <form class='flex gap-15px justify-center mb-[100px]'>
                        <input
                            class='w-[333px] border border-border-color py-[14px] focus:border-primary focus:text-title-color outline-none px-15px text-text-color rounded-[5px] text-sm leading-5'
                            id='email' type="text" placeholder='example@gmail.com' />
                        <button
                            class='border bg-primary text-white border-border-color font-medium py-[14px] px-[37px] rounded-[5px] text-sm leading-5'
                            type='submit'>Verify email</button>
                    </form>
                </div>
                <div class="bulk-email mb-10">
                    <h1 class='font-semibold text-2xl leading-9 mb-5 text-title-color'>Bulk Email Verification</h1>
                    <p class='w-[553px] m-auto mb-[40px] text-sm text-text-color'>Upload a list in CSV, XLS, XLSX, or
                        TXT format</p>
                    <form>
                        <label htmlFor='bulk-email-verify'
                            class='border mr-15px border-border-color font-medium py-[14px] px-[37px] text-text-color rounded-[5px] text-sm leading-5'>
                            Choose file
                            <input type="file" id='bulk-email-verify' class='hidden' multiple />
                        </label>
                        <button
                            class='border bg-primary  border-border-color font-medium py-[14px] px-[37px] text-white rounded-[5px] text-sm leading-5'
                            type='submit'>Verify email</button>
                    </form>
                </div>

                <div class="single-email-collection mb-5">
                    <ul
                        class='flex justify-between items-center px-[20px] py-15px border border-border-color rounded-[5px]'>
                        <li>
                            <p class='text-sm text-title-color'>mahfuzulislamnabil83</p>
                        </li>
                        <li>
                            <p class='flex gap-[7px] text-sm text-title-color'>
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="5" cy="5" r="5" fill="#85CC20" />
                                </svg>
                                <span>mahfuzulislamnabil83@gmail.com</span>
                            </p>
                        </li>
                        <li>
                            <button class='border border-border-color py-[9px] px-12px rounded-[3px]'>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.33342 7.52484V9.97484C9.33342 12.0165 8.51675 12.8332 6.47508 12.8332H4.02508C1.98341 12.8332 1.16675 12.0165 1.16675 9.97484V7.52484C1.16675 5.48317 1.98341 4.6665 4.02508 4.6665H6.47508C8.51675 4.6665 9.33342 5.48317 9.33342 7.52484Z"
                                        stroke="#1E1E1E" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M12.8334 4.02484V6.47484C12.8334 8.5165 12.0167 9.33317 9.97508 9.33317H9.33342V7.52484C9.33342 5.48317 8.51675 4.6665 6.47508 4.6665H4.66675V4.02484C4.66675 1.98317 5.48341 1.1665 7.52508 1.1665H9.97508C12.0167 1.1665 12.8334 1.98317 12.8334 4.02484Z"
                                        stroke="#1E1E1E" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </li>
                        <li>
                            <div class="relative">
                                <button
                                    class='flex gap-[5px] py-[5px] px-10px items-center border border-border-color rounded-[3px]'>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V11M1 6L11 6" stroke="#1E1E1E" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span class='text-xs text-title-color leading-5'>Add to list</span>
                                </button>
                                <div
                                    class='absolute top-full z-50 border shadow-[0px_10px_20px_1px_rgba(120,114,114,0.15)] border-border-color rounded-[5px] p-[8px] left-0 bg-white mt-[5px]'>
                                    <form class='border border-border-color rounded-[5px] flex overflow-hidden '>
                                        <input type="text" placeholder='Create new list'
                                            class='text-sm inline-block text-text-color p-10px border-r border-border-color outline-none' />
                                        <button
                                            class='text-sm text-text-color p-10px inline-block hover:bg-primary hover:text-white'>Create</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li>
                            <ul class='flex gap-5'>
                                <li area_id='download-verification-result' class='modal-open cursor-pointer'>
                                    <button @click="showEmailValidationResultModal" type="button">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.05635 15.497C6.59576 16.7082 7.74355 17.5711 9.09906 17.7845C10.0625 17.9276 11.036 17.9996 12.0109 18C12.9845 17.9994 13.9567 17.9274 14.9188 17.7845C16.2802 17.5608 17.4287 16.6871 17.9655 15.467C18.042 15.2284 17.9896 14.9688 17.8256 14.7749C17.6616 14.5809 17.4077 14.478 17.1484 14.5003C16.889 14.5227 16.6584 14.6673 16.5331 14.8861C16.2137 15.6304 15.5189 16.1657 14.6921 16.3045C13.805 16.4365 12.9086 16.5022 12.0109 16.5011C11.1232 16.5035 10.2367 16.4408 9.35901 16.3137C8.53007 16.1846 7.82749 15.6581 7.49666 14.918C7.42728 14.7657 7.30718 14.6398 7.15505 14.56C7.00292 14.4803 6.82749 14.4514 6.65627 14.4777C6.42194 14.5143 6.21761 14.6509 6.10092 14.8491C5.98422 15.0474 5.96788 15.2858 6.05635 15.497Z"
                                                fill="black" />
                                            <path
                                                d="M8.65122 10.607C8.4537 10.7301 8.32461 10.9321 8.29995 11.1569C8.27528 11.3816 8.35775 11.605 8.52433 11.7649L10.4258 13.5879C10.6528 13.8099 10.9266 13.9829 11.229 14.0956C11.6259 14.2418 12.0587 14.2748 12.4749 14.1902C12.8911 14.1058 13.2728 13.9077 13.574 13.6196L15.5067 11.7648V11.7649C15.6709 11.6078 15.7537 11.3889 15.733 11.1674C15.7123 10.946 15.59 10.7448 15.3993 10.6183C15.2401 10.5199 15.0502 10.4778 14.8621 10.4993C14.6741 10.5209 14.4999 10.6047 14.3694 10.7363L12.806 12.2351V6.74935C12.806 6.48157 12.657 6.23419 12.4152 6.10037C12.1732 5.96654 11.8752 5.96654 11.6334 6.10037C11.3916 6.23419 11.2426 6.4816 11.2426 6.74935V12.2368L9.66162 10.7193C9.53348 10.5904 9.36227 10.5086 9.1777 10.4881C8.99313 10.4674 8.80692 10.5095 8.65125 10.6069L8.65122 10.607Z"
                                                fill="black" />
                                        </svg>

                                    </button>
                                </li>

                                <Modal id="besnik-email-validation-result" buttonJustify="justify-between"
                                    buttonGrow="flex-1" buttonFont="text-base" buttonGap="gap-5" buttonText="Download"
                                    modalWidth="w-654px">
                                    <template v-slot:title>
                                    </template>
                                    <template v-slot:body>

                                        <div class="modal-body pt-2 pb-[40px]">

                                            <div class="modal-head mb-30px text-left">
                                                <h2
                                                    class="text-[26px] leading-8 text-title-color mb-15px font-semibold">
                                                    Download verification results</h2>
                                                <p class='text-sm text-text-color'>Download email addresses with
                                                    their verification statuses. Please choose which emails you would
                                                    like to include and pick the format of the exported file</p>
                                            </div>

                                            <div class="modal-content">
                                                <div>
                                                    <div class='mb-[48px]'>
                                                        <h2
                                                            class='text-base text-left leading-22px font-medium text-title-color mb-5'>
                                                            Download verification results</h2>

                                                        <div class='email-type flex items-center gap-30px '>
                                                            <div class='valed flex gap-10px items-center'>
                                                                <input
                                                                    class="bg-white rounded-[4px] border-border-color text-primary h-5 w-5 focus:ring-offset-0 focus:ring-0"
                                                                    type="checkbox" id='valed-checkbox' />
                                                                <label htmlFor='valed-checkbox'
                                                                    class='flex gap-[7px] items-center'>
                                                                    <svg width="10" height="10" viewBox="0 0 10 10"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="#85CC20" />
                                                                    </svg>

                                                                    <span
                                                                        class='font-medium text-sm text-text-color'>Valed</span>
                                                                </label>
                                                            </div>
                                                            <div class='unverifiable flex gap-10px items-center'>
                                                                <input
                                                                    class="bg-white rounded-[4px] border-border-color text-primary h-5 w-5 focus:ring-offset-0 focus:ring-0"
                                                                    type="checkbox" id='unverifiable-checkbox' />
                                                                <label htmlFor='unverifiable-checkbox'
                                                                    class='flex gap-[7px] items-center'>
                                                                    <svg width="10" height="10" viewBox="0 0 10 10"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="#F6D068" />
                                                                    </svg>

                                                                    <span
                                                                        class='font-medium text-sm text-text-color'>Unverifiable</span>
                                                                </label>
                                                            </div>
                                                            <div class='invalid flex gap-10px items-center'>
                                                                <input
                                                                    class="bg-white rounded-[4px] border-border-color text-primary h-5 w-5 focus:ring-offset-0 focus:ring-0"
                                                                    type="checkbox" id='invalid-checkbox' />
                                                                <label htmlFor='invalid-checkbox'
                                                                    class='flex gap-[7px] items-center'>
                                                                    <svg width="10" height="10" viewBox="0 0 10 10"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="#F65353" />
                                                                    </svg>
                                                                    <span
                                                                        class='font-medium text-sm text-text-color'>Invalid</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='mb-48px'>
                                                        <h2
                                                            class='text-base leading-22px font-medium text-left text-title-color mb-5'>
                                                            Download verification results</h2>

                                                        <div class='email-type flex items-center gap-30px '>
                                                            <div class='valed flex gap-10px items-center'>
                                                                <input
                                                                    class="bg-white rounded-[4px] border-border-color text-primary h-5 w-5 focus:ring-offset-0 focus:ring-0"
                                                                    type="checkbox" id='csv-checkbox' />
                                                                <label htmlFor='csv-checkbox'
                                                                    class='flex gap-[7px] items-center'>
                                                                    <span
                                                                        class='font-medium text-sm text-text-color'>CSV</span>
                                                                </label>
                                                            </div>
                                                            <div class='invalid flex gap-10px items-center'>
                                                                <input
                                                                    class="bg-white rounded-[4px] border-border-color text-primary h-5 w-5 focus:ring-offset-0 focus:ring-0"
                                                                    type="checkbox" id='xlsx-checkbox' />
                                                                <label htmlFor='xlsx-checkbox'
                                                                    class='flex gap-[7px] items-center'>
                                                                    <span
                                                                        class='font-medium text-sm text-text-color'>XLSX</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                            </div>

                                        </div>

                                    </template>
                                </Modal>

                                <li>
                                    <a href="/">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.4286 6.28571H16.0001V5.71428C15.9995 5.25982 15.8188 4.82397 15.4974 4.50269C15.1761 4.18126 14.7402 4.00052 14.2858 4H9.71431C9.25984 4.00051 8.82398 4.18125 8.50271 4.50269C8.18128 4.82399 8.00053 5.25985 8.00001 5.71428V6.28571H4.57142C4.36721 6.28571 4.17857 6.39464 4.07653 6.57143C3.97449 6.74821 3.97449 6.96607 4.07653 7.14285C4.17857 7.31964 4.36722 7.42857 4.57142 7.42857H5.76379L6.76481 18.4408C6.8018 18.8676 6.99784 19.2649 7.31429 19.5538C7.63062 19.8426 8.04403 20.0019 8.47247 20H15.5275C15.956 20.0019 16.3694 19.8426 16.6857 19.5538C17.0022 19.2649 17.1982 18.8676 17.2352 18.4408L18.2362 7.42857H19.4286C19.6328 7.42857 19.8214 7.31964 19.9235 7.14285C20.0255 6.96607 20.0255 6.74821 19.9235 6.57143C19.8214 6.39464 19.6328 6.28571 19.4286 6.28571H19.4286ZM9.14288 5.71428C9.143 5.56275 9.20321 5.41747 9.31035 5.31033C9.41749 5.20319 9.56278 5.14299 9.7143 5.14286H14.2858C14.4373 5.14299 14.5826 5.20319 14.6897 5.31033C14.7969 5.41747 14.8571 5.56276 14.8572 5.71428V6.28571H9.14287L9.14288 5.71428ZM16.0967 18.337C16.0845 18.4793 16.0192 18.6118 15.9137 18.7081C15.8082 18.8044 15.6703 18.8576 15.5274 18.857H8.47239C8.32953 18.8576 8.19165 18.8044 8.08617 18.7081C7.98068 18.6118 7.91538 18.4793 7.90313 18.337L6.91142 7.42857H17.0888L16.0967 18.337Z"
                                                fill="black" />
                                            <path
                                                d="M10.2855 9.71436C10.134 9.71436 9.9886 9.77456 9.88146 9.8817C9.77432 9.98884 9.71411 10.1343 9.71411 10.2858V16.0001C9.71411 16.2043 9.82304 16.3929 9.99983 16.495C10.1766 16.597 10.3945 16.597 10.5713 16.495C10.748 16.3929 10.857 16.2043 10.857 16.0001V10.2858C10.857 10.1343 10.7968 9.98884 10.6896 9.8817C10.5825 9.77456 10.4371 9.71436 10.2855 9.71436Z"
                                                fill="black" />
                                            <path
                                                d="M13.7143 9.71436C13.5627 9.71436 13.4173 9.77456 13.3102 9.8817C13.203 9.98884 13.1428 10.1343 13.1428 10.2858V16.0001C13.1428 16.2043 13.2518 16.3929 13.4285 16.495C13.6053 16.597 13.8232 16.597 14 16.495C14.1768 16.3929 14.2857 16.2043 14.2857 16.0001V10.2858C14.2857 10.1343 14.2255 9.98884 14.1183 9.8817C14.0112 9.77456 13.8658 9.71436 13.7143 9.71436Z"
                                                fill="black" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.45451 5C4.09892 5 3 6.17523 3 7.62495V16.375C3 17.8248 4.09892 19 5.45451 19H18.5455C19.9011 19 21 17.8248 21 16.375V7.62495C21 6.17523 19.9011 5 18.5455 5H5.45451ZM4.63639 7.85846V16.3749C4.63639 16.8582 5.00264 17.2499 5.45451 17.2499H18.5455C18.9974 17.2499 19.3636 16.8582 19.3636 16.3749V7.85846L13.5071 12.73C12.6208 13.4672 11.3797 13.4672 10.4932 12.73L4.63639 7.85846ZM18.031 6.75002H5.96919L11.4978 11.3486C11.7933 11.5942 12.2071 11.5942 12.5025 11.3486L18.031 6.75002Z"
                                                fill="#1E1E1E" />
                                        </svg>

                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="bulk-email-collection">
                    <ul
                        class='flex justify-between items-center px-[20px] py-15px border border-border-color rounded-[5px]'>
                        <li>
                            <p class='text-sm text-black'>Computer network.csv</p>
                        </li>
                        <li>
                            <p class='flex gap-[7px] text-sm text-black'>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 0C3.3675 0 0 3.3675 0 7.5C0 11.6325 3.3675 15 7.5 15C11.6325 15 15 11.6325 15 7.5C15 3.3675 11.6325 0 7.5 0ZM11.085 5.775L6.8325 10.0275C6.7275 10.1325 6.585 10.1925 6.435 10.1925C6.285 10.1925 6.1425 10.1325 6.0375 10.0275L3.915 7.905C3.6975 7.6875 3.6975 7.3275 3.915 7.11C4.1325 6.8925 4.4925 6.8925 4.71 7.11L6.435 8.835L10.29 4.98C10.5075 4.7625 10.8675 4.7625 11.085 4.98C11.3025 5.1975 11.3025 5.55 11.085 5.775Z"
                                        fill="#8CD622" />
                                </svg>

                                <span>200 email verifed</span>
                            </p>
                        </li>
                        <li>
                            <ul class='flex gap-10px'>
                                <li class='flex items-center gap-[7px] text-sm text-black'>
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="5" cy="5" r="5" fill="#85CC20" />
                                    </svg>
                                    <span>100</span>
                                </li>
                                <li class='flex items-center gap-[7px] text-sm text-black'>
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="5" cy="5" r="5" fill="#F6D068" />
                                    </svg>
                                    <span>50</span>
                                </li>
                                <li class='flex items-center gap-[7px] text-sm text-black'>
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="5" cy="5" r="5" fill="#F65353" />
                                    </svg>
                                    <span>25</span>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p class='text-sm text-black'>12-01-2023</p>
                        </li>
                        <li>
                            <div class='relative'>
                                <button
                                    class='flex gap-[5px] py-[5px] px-10px items-center border border-border-color rounded-[3px] '>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V11M1 6L11 6" stroke="#1E1E1E" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <span class='text-sm text-black leading-5'>Add to list</span>
                                </button>
                                <div
                                    class='absolute top-full border z-50 shadow-[0px_10px_20px_1px_rgba(120,114,114,0.15)] border-border-color rounded-[5px] p-[8px] left-0 bg-white mt-[5px]'>
                                    <form class='border border-border-color rounded-[5px] flex overflow-hidden '>
                                        <input type="text" placeholder='Create new list'
                                            class='text-sm inline-block text-text-color p-10px border-r border-border-color outline-none' />
                                        <button
                                            class='text-sm text-text-color p-10px inline-block hover:bg-primary hover:text-white'>Create</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li>
                            <ul class='flex gap-5'>
                                <li>
                                    <a href="/">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.05635 15.497C6.59576 16.7082 7.74355 17.5711 9.09906 17.7845C10.0625 17.9276 11.036 17.9996 12.0109 18C12.9845 17.9994 13.9567 17.9274 14.9188 17.7845C16.2802 17.5608 17.4287 16.6871 17.9655 15.467C18.042 15.2284 17.9896 14.9688 17.8256 14.7749C17.6616 14.5809 17.4077 14.478 17.1484 14.5003C16.889 14.5227 16.6584 14.6673 16.5331 14.8861C16.2137 15.6304 15.5189 16.1657 14.6921 16.3045C13.805 16.4365 12.9086 16.5022 12.0109 16.5011C11.1232 16.5035 10.2367 16.4408 9.35901 16.3137C8.53007 16.1846 7.82749 15.6581 7.49666 14.918C7.42728 14.7657 7.30718 14.6398 7.15505 14.56C7.00292 14.4803 6.82749 14.4514 6.65627 14.4777C6.42194 14.5143 6.21761 14.6509 6.10092 14.8491C5.98422 15.0474 5.96788 15.2858 6.05635 15.497Z"
                                                fill="black" />
                                            <path
                                                d="M8.65122 10.607C8.4537 10.7301 8.32461 10.9321 8.29995 11.1569C8.27528 11.3816 8.35775 11.605 8.52433 11.7649L10.4258 13.5879C10.6528 13.8099 10.9266 13.9829 11.229 14.0956C11.6259 14.2418 12.0587 14.2748 12.4749 14.1902C12.8911 14.1058 13.2728 13.9077 13.574 13.6196L15.5067 11.7648V11.7649C15.6709 11.6078 15.7537 11.3889 15.733 11.1674C15.7123 10.946 15.59 10.7448 15.3993 10.6183C15.2401 10.5199 15.0502 10.4778 14.8621 10.4993C14.6741 10.5209 14.4999 10.6047 14.3694 10.7363L12.806 12.2351V6.74935C12.806 6.48157 12.657 6.23419 12.4152 6.10037C12.1732 5.96654 11.8752 5.96654 11.6334 6.10037C11.3916 6.23419 11.2426 6.4816 11.2426 6.74935V12.2368L9.66162 10.7193C9.53348 10.5904 9.36227 10.5086 9.1777 10.4881C8.99313 10.4674 8.80692 10.5095 8.65125 10.6069L8.65122 10.607Z"
                                                fill="black" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.4286 6.28571H16.0001V5.71428C15.9995 5.25982 15.8188 4.82397 15.4974 4.50269C15.1761 4.18126 14.7402 4.00052 14.2858 4H9.71431C9.25984 4.00051 8.82398 4.18125 8.50271 4.50269C8.18128 4.82399 8.00053 5.25985 8.00001 5.71428V6.28571H4.57142C4.36721 6.28571 4.17857 6.39464 4.07653 6.57143C3.97449 6.74821 3.97449 6.96607 4.07653 7.14285C4.17857 7.31964 4.36722 7.42857 4.57142 7.42857H5.76379L6.76481 18.4408C6.8018 18.8676 6.99784 19.2649 7.31429 19.5538C7.63062 19.8426 8.04403 20.0019 8.47247 20H15.5275C15.956 20.0019 16.3694 19.8426 16.6857 19.5538C17.0022 19.2649 17.1982 18.8676 17.2352 18.4408L18.2362 7.42857H19.4286C19.6328 7.42857 19.8214 7.31964 19.9235 7.14285C20.0255 6.96607 20.0255 6.74821 19.9235 6.57143C19.8214 6.39464 19.6328 6.28571 19.4286 6.28571H19.4286ZM9.14288 5.71428C9.143 5.56275 9.20321 5.41747 9.31035 5.31033C9.41749 5.20319 9.56278 5.14299 9.7143 5.14286H14.2858C14.4373 5.14299 14.5826 5.20319 14.6897 5.31033C14.7969 5.41747 14.8571 5.56276 14.8572 5.71428V6.28571H9.14287L9.14288 5.71428ZM16.0967 18.337C16.0845 18.4793 16.0192 18.6118 15.9137 18.7081C15.8082 18.8044 15.6703 18.8576 15.5274 18.857H8.47239C8.32953 18.8576 8.19165 18.8044 8.08617 18.7081C7.98068 18.6118 7.91538 18.4793 7.90313 18.337L6.91142 7.42857H17.0888L16.0967 18.337Z"
                                                fill="black" />
                                            <path
                                                d="M10.2855 9.71436C10.134 9.71436 9.9886 9.77456 9.88146 9.8817C9.77432 9.98884 9.71411 10.1343 9.71411 10.2858V16.0001C9.71411 16.2043 9.82304 16.3929 9.99983 16.495C10.1766 16.597 10.3945 16.597 10.5713 16.495C10.748 16.3929 10.857 16.2043 10.857 16.0001V10.2858C10.857 10.1343 10.7968 9.98884 10.6896 9.8817C10.5825 9.77456 10.4371 9.71436 10.2855 9.71436Z"
                                                fill="black" />
                                            <path
                                                d="M13.7143 9.71436C13.5627 9.71436 13.4173 9.77456 13.3102 9.8817C13.203 9.98884 13.1428 10.1343 13.1428 10.2858V16.0001C13.1428 16.2043 13.2518 16.3929 13.4285 16.495C13.6053 16.597 13.8232 16.597 14 16.495C14.1768 16.3929 14.2857 16.2043 14.2857 16.0001V10.2858C14.2857 10.1343 14.2255 9.98884 14.1183 9.8817C14.0112 9.77456 13.8658 9.71436 13.7143 9.71436Z"
                                                fill="black" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.45451 5C4.09892 5 3 6.17523 3 7.62495V16.375C3 17.8248 4.09892 19 5.45451 19H18.5455C19.9011 19 21 17.8248 21 16.375V7.62495C21 6.17523 19.9011 5 18.5455 5H5.45451ZM4.63639 7.85846V16.3749C4.63639 16.8582 5.00264 17.2499 5.45451 17.2499H18.5455C18.9974 17.2499 19.3636 16.8582 19.3636 16.3749V7.85846L13.5071 12.73C12.6208 13.4672 11.3797 13.4672 10.4932 12.73L4.63639 7.85846ZM18.031 6.75002H5.96919L11.4978 11.3486C11.7933 11.5942 12.2071 11.5942 12.5025 11.3486L18.031 6.75002Z"
                                                fill="#1E1E1E" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
