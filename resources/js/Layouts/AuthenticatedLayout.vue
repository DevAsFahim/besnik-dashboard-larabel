<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
import userImage from "../../assets/image/userImage.svg"
import down from "../../assets/image/down.svg"

const showingNavigationDropdown = ref(false);

</script>

<template>
    <div>
        <div class="min-h-screen">
            <div class="bg-white border-b border-gray flex">

                <div class="w-[270px] bg-black min-h-screen px-15px py-19px text-white">
                    <div class="">
                        <div class="Logo shrink-0 flex items-center">
                            <Link :href="route('dashboard')">
                            <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
                            </Link>
                        </div>

                        <div class="Navigation Links hidden sm:-my-px sm:block py-49px">
                            <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="group-hover:fill-white"
                                        d="M17.5127 7.72184L10.0127 0.906213C9.73618 0.653237 9.37498 0.512939 9.0002 0.512939C8.62542 0.512939 8.26422 0.653237 7.9877 0.906213L0.4877 7.72184C0.334142 7.86232 0.211499 8.03322 0.127571 8.22368C0.0436425 8.41413 0.000266168 8.61996 0.000200032 8.82809V17.4625C-0.00589792 17.8406 0.127612 18.2078 0.3752 18.4937C0.51572 18.6535 0.688823 18.7814 0.88287 18.8687C1.07692 18.956 1.28741 19.0008 1.5002 19H6.0002C6.19911 19 6.38988 18.9209 6.53053 18.7803C6.67118 18.6396 6.7502 18.4489 6.7502 18.25V13.75C6.7502 13.551 6.82922 13.3603 6.96987 13.2196C7.11052 13.079 7.30129 13 7.5002 13H10.5002C10.6991 13 10.8899 13.079 11.0305 13.2196C11.1712 13.3603 11.2502 13.551 11.2502 13.75V18.25C11.2502 18.4489 11.3292 18.6396 11.4699 18.7803C11.6105 18.9209 11.8013 19 12.0002 19H16.5002C16.749 19.0022 16.9942 18.9408 17.2127 18.8218C17.4504 18.6924 17.649 18.5013 17.7875 18.2688C17.9261 18.0362 17.9995 17.7707 18.0002 17.5V8.82809C18.0001 8.61996 17.9568 8.41413 17.8728 8.22368C17.7889 8.03322 17.6663 7.86232 17.5127 7.72184Z"
                                        fill="#B0B0B0" />
                                </svg>
                                <span class="ml-10px leading-[22px]">Dashboard</span>
                            </NavLink>
                            <NavLink :href="route('utmmanagement')" :active="route().current('utmmanagement')">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="group-hover:fill-white"
                                        d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM9 8C9.55 8 10 8.45 10 9C10 9.55 9.56 10 9 10C8.45 10 8 9.55 8 9C8 8.45 8.45 8 9 8ZM9.53 15.53C9.38 15.68 9.19 15.75 9 15.75C8.81 15.75 8.62 15.68 8.47 15.53C8.18 15.24 8.18 14.76 8.47 14.47L14.47 8.47C14.76 8.18 15.24 8.18 15.53 8.47C15.82 8.76 15.82 9.24 15.53 9.53L9.53 15.53ZM15 16C14.44 16 13.99 15.55 13.99 15C13.99 14.45 14.44 14 14.99 14C15.54 14 15.99 14.45 15.99 15C15.99 15.55 15.55 16 15 16Z"
                                        fill="#B0B0B0" />
                                </svg>
                                <span class="ml-10px leading-[22px]">UTM Management</span>
                            </NavLink>
                            <div>
                                <NavLink>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="group-hover:fill-white"
                                            d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM9.6 16.2C9.6 17.19 8.79 18 7.8 18C6.81 18 6 17.19 6 16.2C6 15.21 6.81 14.4 7.8 14.4H8.6C9.15 14.4 9.6 14.85 9.6 15.4V16.2ZM9.6 8.6C9.6 9.15 9.15 9.6 8.6 9.6H7.8C6.81 9.6 6 8.79 6 7.8C6 6.81 6.81 6 7.8 6C8.79 6 9.6 6.81 9.6 7.8V8.6ZM14.15 13.25C14.15 13.74 13.75 14.15 13.25 14.15H10.74C10.25 14.15 9.84 13.75 9.84 13.25V10.74C9.84 10.25 10.24 9.84 10.74 9.84H13.25C13.74 9.84 14.15 10.24 14.15 10.74V13.25ZM16.2 18C15.21 18 14.4 17.19 14.4 16.2V15.4C14.4 14.85 14.85 14.4 15.4 14.4H16.2C17.19 14.4 18 15.21 18 16.2C18 17.19 17.19 18 16.2 18ZM16.2 9.6H15.4C14.85 9.6 14.4 9.15 14.4 8.6V7.8C14.4 6.81 15.21 6 16.2 6C17.19 6 18 6.81 18 7.8C18 8.79 17.19 9.6 16.2 9.6Z"
                                            fill="#B0B0B0" />
                                    </svg>
                                    <span
                                        class="flex-1 ml-3 text-left whitespace-nowrap font-medium  leading-[22px]">Lead
                                        Management</span>
                                    <svg width="12" height="7" viewBox="0 0 12 7" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="group-hover:stroke-white" d="M1 1L6 6L11 1" stroke="#B0B0B0"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </NavLink>
                                <div>
                                    <NavLink  :href="route('list')" :active="route().current('list')">
                                        <span
                                            class="flex-1 ml-3 text-left whitespace-nowrap font-medium  leading-[22px]">List</span>
                                    </NavLink >
                                    <NavLink :href="route('contacts')" :active="route().current('contacts')">
                                        <span
                                            class="flex-1 ml-3 text-left whitespace-nowrap font-medium  leading-[22px]">Contacts</span>
                                    </NavLink>
                                    <NavLink :href="route('uploadqueue')" :active="route().current('uploadqueue')">
                                        <span
                                            class="flex-1 ml-3 text-left whitespace-nowrap font-medium  leading-[22px]">Upload
                                            Queue</span>
                                    </NavLink>
                                    <NavLink :href="route('sequence')" :active="route().current('sequence')">
                                        <span
                                            class="flex-1 ml-3 text-left whitespace-nowrap font-medium  leading-[22px]">Sequence</span>
                                    </NavLink>
                                    <NavLink :href="route('emailvalidation')" :active="route().current('emailvalidation')">
                                        <span
                                            class="flex-1 ml-3 text-left whitespace-nowrap font-medium  leading-[22px]">Email
                                            Validation</span>
                                    </NavLink>
                                </div>
                            </div>
                            <div>
                                <NavLink>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="group-hover:fill-white"
                                            d="M15.0002 22.75C14.7302 22.75 14.4802 22.6 14.3502 22.37C14.2202 22.14 14.2202 21.85 14.3602 21.62L15.4102 19.87C15.6202 19.51 16.0802 19.4 16.4402 19.61C16.8002 19.82 16.9102 20.28 16.7002 20.64L16.4302 21.09C19.1902 20.44 21.2602 17.96 21.2602 15C21.2602 14.59 21.6002 14.25 22.0102 14.25C22.4202 14.25 22.7602 14.59 22.7602 15C22.7502 19.27 19.2702 22.75 15.0002 22.75Z"
                                            fill="#B0B0B0" />
                                        <path class="group-hover:fill-white"
                                            d="M2 9.75C1.59 9.75 1.25 9.41 1.25 9C1.25 4.73 4.73 1.25 9 1.25C9.27 1.25 9.52 1.4 9.65 1.63C9.78 1.86 9.78 2.15 9.64 2.38L8.59 4.14C8.38 4.49 7.92 4.61 7.56 4.39C7.21 4.18 7.09 3.72 7.31 3.36L7.58 2.91C4.81 3.56 2.75 6.04 2.75 9C2.75 9.41 2.41 9.75 2 9.75Z"
                                            fill="#B0B0B0" />
                                        <path class="group-hover:fill-white"
                                            d="M10.67 13.8499L7.52996 12.1599C7.19996 11.9799 6.79996 11.9799 6.46996 12.1599L3.32996 13.8499C3.09996 13.9699 2.95996 14.2199 2.95996 14.4899C2.95996 14.7599 3.09996 15.0099 3.32996 15.1299L6.46996 16.8199C6.63996 16.9099 6.81996 16.9499 6.99996 16.9499C7.17996 16.9499 7.35996 16.9099 7.52996 16.8199L10.67 15.1299C10.9 15.0099 11.04 14.7599 11.04 14.4899C11.04 14.2199 10.89 13.9799 10.67 13.8499Z"
                                            fill="#B0B0B0" />
                                        <path class="group-hover:fill-white"
                                            d="M5.95 17.4099L3.03 15.9499C2.81 15.8399 2.55 15.8499 2.33 15.9799C2.13 16.1099 2 16.3399 2 16.5899V19.3499C2 19.8299 2.26 20.2599 2.69 20.4699L5.61 21.9299C5.71 21.9699 5.82 21.9999 5.93 21.9999C6.06 21.9999 6.19 21.9599 6.31 21.8899C6.52 21.7599 6.65 21.5299 6.65 21.2799V18.5199C6.65 18.0499 6.38 17.6199 5.95 17.4099Z"
                                            fill="#B0B0B0" />
                                        <path class="group-hover:fill-white"
                                            d="M11.6601 15.9799C11.4501 15.8499 11.1901 15.8399 10.9601 15.9499L8.0401 17.4099C7.6101 17.6199 7.3501 18.0499 7.3501 18.5299V21.2899C7.3501 21.5399 7.4801 21.7699 7.6901 21.8999C7.8101 21.9599 7.9401 21.9999 8.0701 21.9999C8.1801 21.9999 8.2901 21.9699 8.3901 21.9199L11.3101 20.4599C11.7401 20.2499 12.0001 19.8199 12.0001 19.3399V16.5799C12.0001 16.3399 11.8701 16.1099 11.6601 15.9799Z"
                                            fill="#B0B0B0" />
                                        <path class="group-hover:fill-white"
                                            d="M20.67 3.82988L17.53 2.13988C17.2 1.95988 16.8 1.95988 16.47 2.13988L13.33 3.82988C13.1 3.94988 12.96 4.19988 12.96 4.46988C12.96 4.73988 13.1 4.98988 13.33 5.10988L16.47 6.79988C16.64 6.88988 16.82 6.92988 17 6.92988C17.18 6.92988 17.36 6.88988 17.53 6.79988L20.67 5.10988C20.9 4.98988 21.04 4.73988 21.04 4.46988C21.04 4.18988 20.89 3.94988 20.67 3.82988Z"
                                            fill="#B0B0B0" />
                                        <path class="group-hover:fill-white"
                                            d="M15.95 7.38011L13.03 5.92011C12.81 5.81011 12.55 5.82011 12.33 5.95011C12.13 6.08011 12 6.31011 12 6.56011V9.32011C12 9.80011 12.26 10.2301 12.69 10.4401L15.61 11.9001C15.71 11.9501 15.82 11.9801 15.93 11.9801C16.06 11.9801 16.19 11.9401 16.31 11.8701C16.52 11.7401 16.65 11.5101 16.65 11.2601V8.50011C16.65 8.02011 16.38 7.59011 15.95 7.38011Z"
                                            fill="#B0B0B0" />
                                        <path class="group-hover:fill-white"
                                            d="M21.6601 5.95011C21.4501 5.82011 21.1901 5.81011 20.9601 5.92011L18.0401 7.38011C17.6101 7.59011 17.3501 8.02011 17.3501 8.50011V11.2601C17.3501 11.5101 17.4801 11.7401 17.6901 11.8701C17.8101 11.9401 17.9401 11.9801 18.0701 11.9801C18.1801 11.9801 18.2901 11.9501 18.3901 11.9001L21.3101 10.4401C21.7401 10.2201 22.0001 9.79011 22.0001 9.32011V6.56011C22.0001 6.31011 21.8701 6.08011 21.6601 5.95011Z"
                                            fill="#B0B0B0" />
                                    </svg>
                                    <span
                                        class="flex-1 ml-3 text-left whitespace-nowrap font-medium  leading-[22px]">Automation</span>
                                    <svg width="12" height="7" viewBox="0 0 12 7" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="group-hover:stroke-white" d="M1 1L6 6L11 1" stroke="#B0B0B0"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </NavLink>

                                <div>
                                    <NavLink :href="route('addsocialmedia')" :active="route().current('addsocialmedia')">
                                        <span class="ml-10px leading-[22px]">Add Social Media</span>
                                    </NavLink>
                                    <NavLink :href="route('publicpost')" :active="route().current('publicpost')">
                                        <span class="ml-10px leading-[22px]">Public Posts</span>
                                    </NavLink>
                                    <NavLink :href="route('schedulepost')" :active="route().current('schedulepost')">
                                        <span class="ml-10px leading-[22px]">Schedule Post</span>
                                    </NavLink>
                                </div>

                            </div>
                            <div>
                                <NavLink>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_649_14326)">
                                            <path class="group-hover:fill-white"
                                                d="M4.40525 7.70562C4.62021 7.86075 4.88807 7.92437 5.14989 7.88218C5.41172 7.83999 5.6461 7.69557 5.80121 7.48061C6.65614 6.30357 7.83181 5.39755 9.18789 4.87098C9.70732 5.76967 10.6248 6.36563 11.6569 6.475C12.689 6.58415 13.7112 6.19352 14.4072 5.42367C15.1032 4.65377 15.3891 3.59753 15.1766 2.58169C14.9639 1.56584 14.2786 0.712686 13.3324 0.286566C12.3862 -0.139777 11.2931 -0.0879938 10.3913 0.425854C9.48972 0.939701 8.88789 1.85353 8.77251 2.88503C6.92872 3.53258 5.32669 4.72723 4.17982 6.30965C4.02469 6.52461 3.96129 6.79247 4.00348 7.05429C4.04589 7.31613 4.19029 7.55028 4.40525 7.70562ZM12.0002 1.99993C12.3317 1.99993 12.6498 2.13163 12.8842 2.36601C13.1186 2.60038 13.2502 2.91847 13.2502 3.24996C13.2502 3.58145 13.1185 3.89952 12.8842 4.13392C12.6498 4.36832 12.3317 4.49999 12.0002 4.49999C11.6687 4.49999 11.3507 4.36829 11.1163 4.13392C10.8819 3.89954 10.7502 3.58145 10.7502 3.24996C10.7502 2.91847 10.8819 2.60041 11.1163 2.36601C11.3506 2.1316 11.6687 1.99993 12.0002 1.99993Z"
                                                fill="#B0B0B0" />
                                            <path class="group-hover:fill-white"
                                                d="M19.5966 16.2948C19.3819 16.1392 19.114 16.0754 18.8522 16.1171C18.5902 16.1591 18.3558 16.3033 18.2002 16.5182C17.3446 17.695 16.1709 18.6028 14.8171 19.1352C14.2995 18.2348 13.3821 17.6363 12.3495 17.5254C11.3166 17.4142 10.2932 17.8042 9.59581 18.5741C8.89872 19.344 8.61208 20.4011 8.8246 21.4179C9.03733 22.4346 9.72347 23.2882 10.6709 23.7142C11.6182 24.1403 12.7122 24.0874 13.6138 23.5717C14.5155 23.0561 15.1162 22.1402 15.2296 21.1079C17.0705 20.4596 18.6712 19.2684 19.8208 17.6913C19.9761 17.4764 20.04 17.2085 19.998 16.9467C19.956 16.6848 19.8116 16.4502 19.5967 16.2949L19.5966 16.2948ZM12.0005 21.9998C11.6691 21.9998 11.351 21.8681 11.1166 21.6337C10.8822 21.3993 10.7505 21.0812 10.7505 20.7497C10.7505 20.4183 10.8822 20.1002 11.1166 19.8658C11.351 19.6314 11.669 19.4997 12.0005 19.4997C12.332 19.4997 12.6501 19.6314 12.8845 19.8658C13.1189 20.1002 13.2506 20.4183 13.2506 20.7497C13.2506 21.0812 13.1189 21.3993 12.8845 21.6337C12.6501 21.8681 12.332 21.9998 12.0005 21.9998Z"
                                                fill="#B0B0B0" />
                                            <path class="group-hover:fill-white"
                                                d="M7.48061 18.1999C6.30334 17.3452 5.39755 16.1695 4.87098 14.8132C5.76967 14.294 6.36562 13.3763 6.475 12.3442C6.58415 11.3122 6.19352 10.2901 5.42367 9.59413C4.65377 8.89812 3.59753 8.61218 2.58168 8.8247C1.56584 9.0372 0.712686 9.72271 0.286566 10.6689C-0.139777 11.6151 -0.0879938 12.708 0.425854 13.6098C0.939701 14.5116 1.85353 15.1132 2.88503 15.2288C3.53258 17.0724 4.72723 18.6746 6.30965 19.8213C6.59917 20.0304 6.9784 20.0692 7.30452 19.923C7.63042 19.7768 7.85364 19.4677 7.89002 19.1123C7.92618 18.7567 7.77015 18.4089 7.48064 18.1998L7.48061 18.1999ZM1.99996 11.9998C1.99996 11.6683 2.13166 11.3502 2.36604 11.1158C2.60041 10.8814 2.9185 10.7497 3.24999 10.7497C3.58148 10.7497 3.89954 10.8814 4.13395 11.1158C4.36835 11.3502 4.50002 11.6683 4.50002 11.9998C4.50002 12.3313 4.36832 12.6493 4.13395 12.8837C3.89957 13.1181 3.58148 13.2498 3.24999 13.2498C2.9185 13.2498 2.60044 13.1181 2.36604 12.8837C2.13163 12.6494 1.99996 12.3313 1.99996 11.9998Z"
                                                fill="#B0B0B0" />
                                            <path class="group-hover:fill-white"
                                                d="M21.1153 8.77183C20.4678 6.92804 19.2731 5.32601 17.6907 4.17914C17.401 3.98115 17.0284 3.94945 16.7094 4.09588C16.3905 4.24231 16.1715 4.54522 16.1326 4.89412C16.0938 5.24301 16.2407 5.58676 16.5197 5.79973C17.6965 6.65466 18.603 7.82988 19.1309 9.18527C18.2318 9.70402 17.6351 10.6215 17.5252 11.6536C17.4154 12.6857 17.8058 13.7081 18.5755 14.4045C19.3451 15.101 20.4014 15.3874 21.4175 15.1751C22.4333 14.9628 23.2867 14.2775 23.7133 13.3313C24.1398 12.385 24.0883 11.2919 23.5746 10.3901C23.0608 9.48813 22.1467 8.88635 21.1152 8.77069L21.1153 8.77183ZM20.7504 13.2498C20.4189 13.2498 20.1008 13.1181 19.8664 12.8837C19.632 12.6493 19.5003 12.3312 19.5003 11.9998C19.5003 11.6683 19.632 11.3502 19.8664 11.1158C20.1008 10.8814 20.4189 10.7497 20.7504 10.7497C21.0819 10.7497 21.3999 10.8814 21.6343 11.1158C21.8687 11.3502 22.0004 11.6683 22.0004 11.9998C22.0004 12.3312 21.8687 12.6493 21.6343 12.8837C21.3999 13.1181 21.0819 13.2498 20.7504 13.2498Z"
                                                fill="#B0B0B0" />
                                            <path class="group-hover:fill-white"
                                                d="M12.2085 13.5717L10.923 13.5657H10.9186C10.5612 13.565 10.2306 13.7548 10.0514 14.0639C9.87212 14.3728 9.87123 14.7541 10.0491 15.0639C10.227 15.3738 10.5567 15.565 10.9141 15.5657H10.9927H10.9925C11.009 15.8173 11.1197 16.0532 11.3027 16.2264C11.4855 16.3996 11.7271 16.4974 11.9791 16.5003H11.984C12.2485 16.5003 12.5021 16.3956 12.6894 16.2092C12.8769 16.0226 12.9827 15.7697 12.984 15.5052V15.4282C13.6631 15.1847 14.187 14.6342 14.3966 13.9438C14.6062 13.2536 14.4767 12.5047 14.0477 11.9248C13.6186 11.3447 12.9405 11.0018 12.2191 11.0002H11.7905C11.7153 11 11.6432 10.9692 11.5905 10.9151C11.5371 10.8625 11.5075 10.7904 11.5081 10.7151C11.509 10.558 11.6363 10.4308 11.7936 10.4301L13.0791 10.4357H13.0836C13.441 10.4366 13.7715 10.2466 13.9508 9.93768C14.13 9.62852 14.1309 9.2475 13.953 8.93766C13.7751 8.62783 13.4454 8.43654 13.088 8.43564H13.0095H13.0097C12.9941 8.18341 12.8834 7.94657 12.6999 7.77289C12.5164 7.59923 12.2738 7.50168 12.0211 7.50012H12.0162C11.7516 7.50012 11.4981 7.60481 11.3108 7.7912C11.1233 7.97781 11.0175 8.23072 11.0161 8.49521V8.57222C10.3362 8.81508 9.81142 9.36578 9.60159 10.0564C9.39154 10.7473 9.52101 11.4966 9.9507 12.077C10.3804 12.6571 11.0596 12.9995 11.7815 13.0002H12.2106C12.3637 13.0066 12.4847 13.1325 12.4847 13.2859C12.4847 13.4392 12.3637 13.5654 12.2106 13.5716L12.2085 13.5717Z"
                                                fill="#B0B0B0" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_649_14326">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <span
                                        class="flex-1 ml-3 text-left whitespace-nowrap font-medium  leading-[22px]">Affiliate</span>
                                    <svg width="12" height="7" viewBox="0 0 12 7" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="group-hover:stroke-white" d="M1 1L6 6L11 1" stroke="#B0B0B0"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </NavLink>

                                <div>
                                    <div>
                                        <NavLink :href="route('userinformation')" :active="route().current('userinformation')">
                                            <span class="ml-10px leading-[22px]">User Information</span>
                                        </NavLink>
                                        <NavLink :href="route('approvedorrejectprofile')" :active="route().current('approvedorrejectprofile')">
                                            <span class="ml-10px leading-[22px]">Approve or Reject Profile</span>
                                        </NavLink>
                                        <NavLink :href="route('paymentrequest')" :active="route().current('paymentrequest')">
                                            <span class="ml-10px leading-[22px]">Payment Request</span>
                                        </NavLink>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 wrapper-width">
                    <div>
                        <div class="">
                            <div
                                class="flex justify-between py-[15px] px-30px border-b border-border-color items-center">

                                <form class="flex items-center">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11 4C7.13401 4 4 7.13401 4 11C4 14.866 7.13401 18 11 18C14.866 18 18 14.866 18 11C18 7.13401 14.866 4 11 4ZM2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 15.9706 15.9706 20 11 20C6.02944 20 2 15.9706 2 11Z"
                                                    fill="#929292" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M15.9428 15.9428C16.3333 15.5523 16.9665 15.5523 17.357 15.9428L21.707 20.2928C22.0975 20.6833 22.0975 21.3165 21.707 21.707C21.3165 22.0975 20.6833 22.0975 20.2928 21.707L15.9428 17.357C15.5523 16.9665 15.5523 16.3333 15.9428 15.9428Z"
                                                    fill="#929292" />
                                            </svg>

                                        </div>
                                        <input type="search" id="simple-search"
                                            class="bg-gray rounded-[7px] w-[299px] h-10 border-none outline-none pl-42px text-text-color"
                                            placeholder="Search" required>
                                    </div>
                                </form>


                                <div class="hidden sm:flex sm:items-center sm:ml-6">

                                    <div class="Settings Dropdown ml-3 relative">
                                        <Dropdown align="right" width="48">
                                            <template #trigger>
                                                <span class="inline-flex rounded-md cursor-pointer">
                                                    <div class="flex items-center space-x-4">
                                                        <img class="w-10 h-10 rounded-full" :src="userImage"
                                                            alt="userImage" />
                                                        <div>
                                                            <h5 class="font-medium text-sm leading-5 text-black">{{
                                                                $page.props.auth.user.name
                                                            }}</h5>
                                                        </div>
                                                        <img :src='down' alt="shape" />
                                                    </div>
                                                </span>
                                            </template>

                                            <template #content>
                                                <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                                                <DropdownLink :href="route('profile.edit')"> Me </DropdownLink>
                                                <DropdownLink :href="route('logout')" method="post" as="button">
                                                    Log Out
                                                </DropdownLink>
                                            </template>
                                        </Dropdown>
                                    </div>
                                </div>

                                <div class="Hamburger -mr-2 flex items-center sm:hidden">
                                    <button @click="showingNavigationDropdown = !showingNavigationDropdown"
                                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path :class="{
                                                hidden: showingNavigationDropdown,
                                                'inline-flex': !showingNavigationDropdown,
                                            }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                            <path :class="{
                                                hidden: !showingNavigationDropdown,
                                                'inline-flex': showingNavigationDropdown,
                                            }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                            class="Responsive Navigation Menu sm:hidden">
                            <div class="pt-2 pb-3 space-y-1">
                                <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </ResponsiveNavLink>
                            </div>

                            <div class="Responsive Settings Options   pt-4 pb-1 border-t border-gray-200">
                                <div class="px-4">
                                    <div class="font-medium text-base text-gray-800">
                                        {{ $page.props.auth.user.name }}
                                    </div>
                                    <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}
                                    </div>
                                </div>

                                <div class="mt-3 space-y-1">
                                    <ResponsiveNavLink :href="route('profile.edit')"> Profile </ResponsiveNavLink>
                                    <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                        Log Out
                                    </ResponsiveNavLink>
                                </div>
                            </div>
                        </div>
                    </div>


                    <main>
                        <slot />
                    </main>
                </div>











            </div>

            <!-- <header class="Page Heading   bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header> -->


        </div>
    </div>
</template>
