<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import fbPostImage from '../../assets/image/fb-post-image.png';
import twitterPostImage from '../../assets/image/twitter-post-image.png';
import { hideModal, openModal } from './modal/modal';
import Modal from './modal/index.vue';
import man1 from '../../assets/image/cheerful-curly-man.png';
import man2 from '../../assets/image/hussain.png';
import Pagination from './Pagination.vue';




function showAddSocialMediaModal() {
    openModal('besnik-add-social-media');
}

function showCreateNewPostModal() {
    openModal('besnik-create-new-post');
}

</script>

<template>
    <AuthenticatedLayout>
        <section>
            <div class="pr-5 pl-30px pt-5 pb-30px">
                <div class="heading flex justify-between items-center pb-30px">
                    <div class="title font-semibold text-2xl leading-9 text-title-color">Add Social Media</div>
                    <button @click="showCreateNewPostModal"
                        class='modal-open bg-primary rounded-[5px] px-22px py-[14px] text-white'><span
                            class='leading-5 ml-10px text-sm'>Create New Post</span></button>
                </div>

                <Modal id="besnik-create-new-post" display="hidden" modalWidth="w-1070px">
                    <template v-slot:body>
                        <div>
                            <div class='flex'>
                                <div class='left basis-[63%] border-r border-border-color'>
                                    <div class='profiles flex border-b border-border-color px-30px pt-[46px] pb-10px gap-5'>
                                        <div class='relative group pt-10px'>
                                            <a href="/" class='absolute hidden group-hover:block  -right-[5px] -top-[7px]'>
                                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="24" height="24" rx="2" fill="#F4F4F6" />
                                                    <path d="M7 17L17 7" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 17L7 7" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            <img class='w-[46px]' :src='man1' alt="man" />
                                            <a href="/" class='absolute left-[33px] top-[33px] border-white border rounded-full'>
                                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="24" height="24" rx="12" fill="#1DA1F2" />
                                                    <path d="M20 7.06654C19.4 7.3332 18.8 7.5332 18.1333 7.59987C18.8 7.19987 19.3333 6.5332 19.6 5.79987C18.9333 6.19987 18.2667 6.46654 17.5333 6.59987C16.9333 5.9332 16.0667 5.5332 15.1333 5.5332C13.3333 5.5332 11.8667 6.99987 11.8667 8.79987C11.8667 9.06654 11.8667 9.3332 11.9333 9.5332C9.13333 9.39987 6.73333 8.06654 5.13333 6.06654C4.8 6.59987 4.66667 7.1332 4.66667 7.7332C4.66667 8.86654 5.26667 9.86654 6.13333 10.4665C5.6 10.4665 5.06667 10.3332 4.66667 10.0665C4.66667 10.0665 4.66667 10.0665 4.66667 10.1332C4.66667 11.7332 5.8 13.0665 7.26667 13.3332C7 13.3999 6.73333 13.4665 6.4 13.4665C6.2 13.4665 6 13.4665 5.8 13.3999C6.2 14.7332 7.4 15.6665 8.86667 15.6665C7.73333 16.5332 6.33333 17.0665 4.8 17.0665C4.53333 17.0665 4.26667 17.0665 4 16.9999C5.46667 17.9332 7.2 18.4665 9 18.4665C15.0667 18.4665 18.3333 13.4665 18.3333 9.1332C18.3333 8.99987 18.3333 8.86654 18.3333 8.7332C19 8.26654 19.5333 7.66654 20 7.06654Z" fill="white" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class='relative group pt-10px'>
                                            <a href="/" class='absolute hidden group-hover:block -right-[5px] -top-[7px] '>
                                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="24" height="24" rx="2" fill="#F4F4F6" />
                                                    <path d="M7 17L17 7" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 17L7 7" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            <img class='w-[46px]' :src='man2' alt="man" />
                                            <a href="/" class='absolute left-[33px] top-[33px] border-white border rounded-full'>
                                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="24" height="24" rx="12" fill="#1877F2" />
                                                    <path d="M9.51843 22L9.49091 12.9091H6V9.27273H9.49091V7C9.49091 3.626 11.4967 2 14.3862 2C15.7702 2 16.9598 2.10734 17.3064 2.15532V5.68135L15.3025 5.68229C13.731 5.68229 13.4267 6.46013 13.4267 7.60155V9.27273H18L16.2545 12.9091H13.4267V22H9.51843Z" fill="white" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>

                                    <div class='py-5 px-30px  min-h-[200px]'>
                                        <p class='text-sm text-title-color mb-5'>Hello, Dribbblers!👋</p>
                                        <p class='text-sm text-title-color'>Happy great day guys, please meet up with our work named 📊 Analytica - Social Media
                                            Analytic Dashboard</p>
                                    </div>
                                </div>
                                <div class='right basis-[37%] p-30px'>
                                    <h4 class='text-base leading-22px font-medium text-text-color mb-[29px]'>Publishing Options</h4>
                                    <div class='pb-15px border-b border-border-color border-dashed'>
                                        <input type="radio" name='publish-post' class='peer focus:ring-offset-0 focus:ring-0 h-16px w-16px checked:h-13px checked:w-13px checked:bg-none border-border-color checked:shadow-[0px_0px_0px_3px_#EAEAEA]' id="publish-now"  />
                                        <label class='text-sm text-text-color font-medium ml-[6px] peer-checked:text-title-color' htmlFor="publish-now">Publish Now</label>
                                    </div>
                                    <div class='py-15px'>
                                        <input type="radio" name='publish-post' class='peer focus:ring-offset-0 focus:ring-0 h-16px w-16px checked:h-13px checked:w-13px checked:bg-none border-border-color checked:shadow-[0px_0px_0px_3px_#EAEAEA]' id="schedule-for-date" />
                                        <label class='text-sm text-text-color font-medium ml-[6px] peer-checked:text-title-color' htmlFor="schedule-for-date">Schedule For a Specific Date</label>

                                        <form class='hidden peer-checked:block pl-5'>
                                            <div class='flex gap-10px py-5'>
                                                <input class='outline-none border border-border-color text-sm text-text-color px-2 py-[6px] rounded-[5px]' type="date" />
                                                <div class='flex items-center gap-[2px]'>
                                                    <select class='outline-none border border-border-color text-sm text-text-color px-2 py-[6px] rounded-[5px]'>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                    <span class='text-sm text-text-color'>:</span>
                                                    <select class='outline-none border border-border-color text-sm text-text-color px-2 py-[6px] rounded-[5px]'>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                                <select class='outline-none border border-border-color text-sm text-text-color px-2 py-[6px] rounded-[5px]'>
                                                    <option value="am">AM</option>
                                                    <option value="pm">PM</option>
                                                </select>
                                            </div>

                                            <div class='flex items-center gap-10px'>
                                                <p class='text-sm text-text-color'>Time Zone:</p>
                                                <select class='outline-none border border-border-color text-sm text-text-color px-2 py-[6px] rounded-[5px]'>
                                                    <option value="1">GMT +06:00</option>
                                                    <option value="2">GMT +06:00</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class='modal-btn flex justify-between items-center gap-5 pt-5 px-30px border-t border-border-color'>
                                <div class='flex items-center gap-5'>
                                    <a href="/">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22 14L19.061 11.8839C17.5338 10.7843 15.4467 10.898 14.0479 12.1569L9.95209 15.8431C8.55331 17.102 6.4662 17.2157 4.93901 16.1161L2 14M6 22H18C20.2091 22 22 20.2091 22 18V6C22 3.79086 20.2091 2 18 2H6C3.79086 2 2 3.79086 2 6V18C2 20.2091 3.79086 22 6 22ZM11 8.5C11 9.88071 9.88071 11 8.5 11C7.11929 11 6 9.88071 6 8.5C6 7.11929 7.11929 6 8.5 6C9.88071 6 11 7.11929 11 8.5Z" stroke="#929292" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </a>
                                    <a href="/">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 10.8889C21 15.7981 15.375 22 12 22C8.625 22 3 15.7981 3 10.8889C3 5.97969 7.02944 2 12 2C16.9706 2 21 5.97969 21 10.8889Z" stroke="#929292" stroke-width="1.5" />
                                            <path d="M15 11C15 12.6569 13.6569 14 12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11Z" stroke="#929292" stroke-width="1.5" />
                                        </svg>
                                    </a>
                                    <a href="/">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 15C9 15 10.125 16 12 16C13.875 16 15 15 15 15M17 10C17 10.5523 16.5523 11 16 11C15.4477 11 15 10.5523 15 10C15 9.44772 15.4477 9 16 9C16.5523 9 17 9.44772 17 10ZM22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM9 10C9 10.5523 8.55228 11 8 11C7.44772 11 7 10.5523 7 10C7 9.44772 7.44772 9 8 9C8.55228 9 9 9.44772 9 10Z" stroke="#929292" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <button type="button"
                                        class=" hover:bg-primary hover:text-white bg-gray rounded-[5px] leading-5 px-25px py-[14px] text-sm text-text-color">Save Draft</button>
                                    <button
                                        class="hover:bg-primary hover:text-white bg-gray ml-13px rounded-[5px] leading-5 px-25px py-[14px] text-sm text-text-color">Update Schedule</button>
                                </div>
                            </div>
                        </div>

                    </template>
                </Modal>








                <div class="posts grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[26px]">
                    <div
                        class="post p-5 rounded-[5px] bg-gray hover:bg-white hover:shadow-[3px_20px_40px_2px_rgba(174,174,174,0.1)] ease-in-out duration-300">
                        <div class="post-head mb-15px">
                            <div class='flex justify-between mb-10px items-center'>
                                <div class='flex gap-10px items-center'>
                                    <a href="/">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="24" height="24" rx="12" fill="#1877F2" />
                                            <path
                                                d="M9.51843 22L9.49091 12.9091H6V9.27273H9.49091V7C9.49091 3.626 11.4967 2 14.3862 2C15.7702 2 16.9598 2.10734 17.3064 2.15532V5.68135L15.3025 5.68229C13.731 5.68229 13.4267 6.46013 13.4267 7.60155V9.27273H18L16.2545 12.9091H13.4267V22H9.51843Z"
                                                fill="white" />
                                        </svg>
                                    </a>

                                    <h4 class='text-title-color text-base leading-22px font-medium'><a href="/">Hussain
                                            Ahmed</a></h4>
                                </div>
                                <a href="/">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 12C8 13.1046 7.10457 14 6 14C4.89543 14 4 13.1046 4 12C4 10.8954 4.89543 10 6 10C7.10457 10 8 10.8954 8 12Z"
                                            fill="#929292" />
                                        <path
                                            d="M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z"
                                            fill="#929292" />
                                        <path
                                            d="M20 12C20 13.1046 19.1046 14 18 14C16.8954 14 16 13.1046 16 12C16 10.8954 16.8954 10 18 10C19.1046 10 20 10.8954 20 12Z"
                                            fill="#929292" />
                                    </svg>
                                </a>
                            </div>
                            <p class='text-sm text-title-color mb-10px'>Post from facebook</p>
                            <p class='text-sm text-text-color'>15 Jan at 12:30 PM</p>
                        </div>

                        <div class="post-image mb-15px">
                            <img :src='fbPostImage' alt="fbPostImage" class='w-full' />
                        </div>

                        <div class="post-info">
                            <div class="flex justify-between items-center mb-10px">
                                <span class='text-sm text-title-color'>Likes :</span>
                                <span class='text-sm text-title-color'>520</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class='text-sm text-title-color'>Comments :</span>
                                <span class='text-sm text-title-color'>100</span>
                            </div>
                        </div>

                    </div>
                    <div
                        class="post p-5 rounded-[5px] bg-gray hover:bg-white hover:shadow-[3px_20px_40px_2px_rgba(174,174,174,0.1)] ease-in-out duration-300">
                        <div class="post-head mb-15px">
                            <div class='flex justify-between mb-10px items-center'>
                                <div class='flex gap-10px items-center'>
                                    <a href="/">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="24" height="24" rx="12" fill="#1DA1F2" />
                                            <path
                                                d="M20 7.06654C19.4 7.3332 18.8 7.5332 18.1333 7.59987C18.8 7.19987 19.3333 6.5332 19.6 5.79987C18.9333 6.19987 18.2667 6.46654 17.5333 6.59987C16.9333 5.9332 16.0667 5.5332 15.1333 5.5332C13.3333 5.5332 11.8667 6.99987 11.8667 8.79987C11.8667 9.06654 11.8667 9.3332 11.9333 9.5332C9.13333 9.39987 6.73333 8.06654 5.13333 6.06654C4.8 6.59987 4.66667 7.1332 4.66667 7.7332C4.66667 8.86654 5.26667 9.86654 6.13333 10.4665C5.6 10.4665 5.06667 10.3332 4.66667 10.0665C4.66667 10.0665 4.66667 10.0665 4.66667 10.1332C4.66667 11.7332 5.8 13.0665 7.26667 13.3332C7 13.3999 6.73333 13.4665 6.4 13.4665C6.2 13.4665 6 13.4665 5.8 13.3999C6.2 14.7332 7.4 15.6665 8.86667 15.6665C7.73333 16.5332 6.33333 17.0665 4.8 17.0665C4.53333 17.0665 4.26667 17.0665 4 16.9999C5.46667 17.9332 7.2 18.4665 9 18.4665C15.0667 18.4665 18.3333 13.4665 18.3333 9.1332C18.3333 8.99987 18.3333 8.86654 18.3333 8.7332C19 8.26654 19.5333 7.66654 20 7.06654Z"
                                                fill="white" />
                                        </svg>
                                    </a>

                                    <h4 class='text-title-color text-base leading-22px font-medium'><a href="/">Hussain
                                            Ahmed</a></h4>
                                </div>
                                <a href="/">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 12C8 13.1046 7.10457 14 6 14C4.89543 14 4 13.1046 4 12C4 10.8954 4.89543 10 6 10C7.10457 10 8 10.8954 8 12Z"
                                            fill="#929292" />
                                        <path
                                            d="M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z"
                                            fill="#929292" />
                                        <path
                                            d="M20 12C20 13.1046 19.1046 14 18 14C16.8954 14 16 13.1046 16 12C16 10.8954 16.8954 10 18 10C19.1046 10 20 10.8954 20 12Z"
                                            fill="#929292" />
                                    </svg>
                                </a>
                            </div>
                            <p class='text-sm text-title-color mb-10px'>Post from facebook</p>
                            <p class='text-sm text-text-color'>15 Jan at 12:30 PM</p>
                        </div>

                        <div class="post-image mb-15px">
                            <img :src='twitterPostImage' alt="fbPostImage" class='w-full' />
                        </div>

                        <div class="post-info">
                            <div class="flex justify-between items-center mb-10px">
                                <span class='text-sm text-title-color'>Likes :</span>
                                <span class='text-sm text-title-color'>520</span>
                            </div>
                            <div class="flex justify-between items-center mb-10px">
                                <span class='text-sm text-title-color'>Retweets :</span>
                                <span class='text-sm text-title-color'>20</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class='text-sm text-title-color'>Comments :</span>
                                <span class='text-sm text-title-color'>100</span>
                            </div>
                        </div>

                    </div>
                    <div @click="showAddSocialMediaModal"
                        class="modal-open add-channel flex justify-center items-center text-center border-dashed border-border-color border rounded-[5px] cursor-pointer py-[58px] px-14">
                        <div>
                            <svg class="m-auto" width="70" height="70" viewBox="0 0 70 70" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M46.6663 37.187H23.333C22.1372 37.187 21.1455 36.1953 21.1455 34.9995C21.1455 33.8037 22.1372 32.812 23.333 32.812H46.6663C47.8622 32.812 48.8538 33.8037 48.8538 34.9995C48.8538 36.1953 47.8622 37.187 46.6663 37.187Z"
                                    fill="#685CF0" />
                                <path
                                    d="M35 48.8548C33.8042 48.8548 32.8125 47.8631 32.8125 46.6673V23.334C32.8125 22.1382 33.8042 21.1465 35 21.1465C36.1958 21.1465 37.1875 22.1382 37.1875 23.334V46.6673C37.1875 47.8631 36.1958 48.8548 35 48.8548Z"
                                    fill="#685CF0" />
                                <path
                                    d="M43.7502 66.3543H26.2502C10.4127 66.3543 3.646 59.5877 3.646 43.7502L3.646 26.2502C3.646 10.4127 10.4127 3.646 26.2502 3.646L43.7502 3.646C59.5877 3.646 66.3543 10.4127 66.3543 26.2502V43.7502C66.3543 59.5877 59.5877 66.3543 43.7502 66.3543ZM26.2502 8.021C12.8043 8.021 8.021 12.8043 8.021 26.2502L8.021 43.7502C8.021 57.196 12.8043 61.9793 26.2502 61.9793H43.7502C57.196 61.9793 61.9793 57.196 61.9793 43.7502V26.2502C61.9793 12.8043 57.196 8.021 43.7502 8.021L26.2502 8.021Z"
                                    fill="#685CF0" />
                            </svg>
                            <p class='text-sm text-text-color mt-5'>Add social channels to view recent
                                posts from them.</p>
                        </div>
                    </div>
                    <Modal id="besnik-add-social-media" display="hidden" modalWidth="w-1130px">
                        <template v-slot:title>
                            Add a social media
                        </template>
                        <template v-slot:body>

                            <div class="px-30px pt-25px border-t border-border-color">
                                <div class='grid grid-cols-1 lg:grid-cols-5 gap-5'>
                                    <div class='p-5 bg-gray text-center rounded-[5px]'>
                                        <svg class='m-auto' width="60" height="60" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="24" height="24" rx="12" fill="#1877F2" />
                                            <path
                                                d="M9.51843 22L9.49091 12.9091H6V9.27273H9.49091V7C9.49091 3.626 11.4967 2 14.3862 2C15.7702 2 16.9598 2.10734 17.3064 2.15532V5.68135L15.3025 5.68229C13.731 5.68229 13.4267 6.46013 13.4267 7.60155V9.27273H18L16.2545 12.9091H13.4267V22H9.51843Z"
                                                fill="white" />
                                        </svg>
                                        <h4 class='text-[20px] leading-5 text-title-color font-semibold mt-15px mb-5'>
                                            Facebook</h4>
                                        <button
                                            class='px-30px py-2 hover:bg-[#1877F2] text-title-color bg-[#E0E0E0] rounded-3xl text-sm font-semibold hover:text-white'>Connect</button>
                                    </div>
                                    <div class='p-5 bg-gray text-center rounded-[5px]'>
                                        <svg class='m-auto' width="60" height="60" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="24" height="24" rx="12" fill="#1DA1F2" />
                                            <path
                                                d="M20 7.06654C19.4 7.3332 18.8 7.5332 18.1333 7.59987C18.8 7.19987 19.3333 6.5332 19.6 5.79987C18.9333 6.19987 18.2667 6.46654 17.5333 6.59987C16.9333 5.9332 16.0667 5.5332 15.1333 5.5332C13.3333 5.5332 11.8667 6.99987 11.8667 8.79987C11.8667 9.06654 11.8667 9.3332 11.9333 9.5332C9.13333 9.39987 6.73333 8.06654 5.13333 6.06654C4.8 6.59987 4.66667 7.1332 4.66667 7.7332C4.66667 8.86654 5.26667 9.86654 6.13333 10.4665C5.6 10.4665 5.06667 10.3332 4.66667 10.0665C4.66667 10.0665 4.66667 10.0665 4.66667 10.1332C4.66667 11.7332 5.8 13.0665 7.26667 13.3332C7 13.3999 6.73333 13.4665 6.4 13.4665C6.2 13.4665 6 13.4665 5.8 13.3999C6.2 14.7332 7.4 15.6665 8.86667 15.6665C7.73333 16.5332 6.33333 17.0665 4.8 17.0665C4.53333 17.0665 4.26667 17.0665 4 16.9999C5.46667 17.9332 7.2 18.4665 9 18.4665C15.0667 18.4665 18.3333 13.4665 18.3333 9.1332C18.3333 8.99987 18.3333 8.86654 18.3333 8.7332C19 8.26654 19.5333 7.66654 20 7.06654Z"
                                                fill="white" />
                                        </svg>
                                        <h4 class='text-[20px] leading-5 text-title-color font-semibold mt-15px mb-5'>
                                            Twitter</h4>
                                        <button
                                            class='px-30px py-2 hover:bg-[#1DA1F2] text-title-color bg-[#E0E0E0] rounded-3xl text-sm font-semibold hover:text-white'>Connect</button>
                                    </div>
                                    <div class='p-5 bg-gray text-center rounded-[5px]'>
                                        <svg class='m-auto' width="60" height="60" viewBox="0 0 60 60" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="60" height="60" rx="30" fill="#F00075" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M30.0001 34.9998C32.7615 34.9998 35.0001 32.7613 35.0001 29.9998C35.0001 27.2384 32.7615 24.9998 30.0001 24.9998C27.2387 24.9998 25.0001 27.2384 25.0001 29.9998C25.0001 32.7613 27.2387 34.9998 30.0001 34.9998ZM30.0001 38.3332C34.6025 38.3332 38.3334 34.6022 38.3334 29.9998C38.3334 25.3975 34.6025 21.6665 30.0001 21.6665C25.3977 21.6665 21.6667 25.3975 21.6667 29.9998C21.6667 34.6022 25.3977 38.3332 30.0001 38.3332Z"
                                                fill="white" />
                                            <path
                                                d="M40.0001 21.6667C40.0001 22.5871 39.2539 23.3333 38.3334 23.3333C37.4129 23.3333 36.6667 22.5871 36.6667 21.6667C36.6667 20.7462 37.4129 20 38.3334 20C39.2539 20 40.0001 20.7462 40.0001 21.6667Z"
                                                fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M36.6666 16.6668H23.3333C19.6514 16.6668 16.6666 19.6516 16.6666 23.3335V36.6668C16.6666 40.3487 19.6514 43.3335 23.3333 43.3335H36.6666C40.3485 43.3335 43.3333 40.3487 43.3333 36.6668V23.3335C43.3333 19.6516 40.3485 16.6668 36.6666 16.6668ZM23.3333 13.3335C17.8104 13.3335 13.3333 17.8106 13.3333 23.3335V36.6668C13.3333 42.1897 17.8104 46.6668 23.3333 46.6668H36.6666C42.1894 46.6668 46.6666 42.1897 46.6666 36.6668V23.3335C46.6666 17.8106 42.1894 13.3335 36.6666 13.3335H23.3333Z"
                                                fill="white" />
                                        </svg>
                                        <h4 class='text-[20px] leading-5 text-title-color font-semibold mt-15px mb-5'>
                                            Instagram</h4>
                                        <button
                                            class='px-30px py-2 hover:bg-[#F00075] text-title-color bg-[#E0E0E0] rounded-3xl text-sm font-semibold hover:text-white'>Connect</button>
                                    </div>
                                    <div class='p-5 bg-gray text-center rounded-[5px]'>
                                        <svg class='m-auto' width="60" height="60" viewBox="0 0 60 60" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="60" height="60" rx="30" fill="#FF0000" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M18.7982 19.5779C16.5512 19.8275 14.7435 21.5393 14.3719 23.7694C13.6843 27.8946 13.6843 32.1052 14.3719 36.2304C14.7435 38.4604 16.5512 40.1722 18.7982 40.4219L19.682 40.5201C26.5396 41.2821 33.4606 41.2821 40.3182 40.5201L41.202 40.4219C43.449 40.1722 45.2567 38.4604 45.6283 36.2304C46.3159 32.1052 46.3159 27.8946 45.6283 23.7694C45.2567 21.5393 43.449 19.8275 41.202 19.5779L40.3182 19.4797C33.4606 18.7177 26.5396 18.7177 19.682 19.4797L18.7982 19.5779ZM34.5865 31.3866C35.5761 30.7269 35.5761 29.2728 34.5865 28.6131L29.2578 25.0607C28.1502 24.3223 26.6667 25.1163 26.6667 26.4474V33.5524C26.6667 34.8835 28.1502 35.6775 29.2578 34.9391L34.5865 31.3866Z"
                                                fill="white" />
                                        </svg>

                                        <h4 class='text-[20px] leading-5 text-title-color font-semibold mt-15px mb-5'>
                                            You Tube</h4>
                                        <button
                                            class='px-30px py-2 hover:bg-[#FF0000] text-title-color bg-[#E0E0E0] rounded-3xl text-sm font-semibold hover:text-white'>Connect</button>
                                    </div>
                                    <div class='p-5 bg-gray text-center rounded-[5px]'>
                                        <svg class='mx-auto' width="60" height="60" viewBox="0 0 60 60" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="60" height="60" rx="30" fill="#FF0000" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M30.5323 13.4008C34.9675 13.1966 39.5311 14.7778 42.149 18.1436C48.8128 26.7113 42.3678 38.3335 33.3334 38.3335C31.1879 38.3335 29.5024 37.8623 28.2211 37.0157C27.7286 36.6903 27.3154 36.3223 26.97 35.9302L24.0284 45.4904C23.7577 46.3701 22.825 46.8639 21.9453 46.5932C21.0655 46.3225 20.5717 45.3898 20.8424 44.5101L27.5091 22.8434C27.7798 21.9637 28.7125 21.4699 29.5922 21.7406C30.472 22.0113 30.9658 22.9439 30.6951 23.8237L28.6765 30.3841C28.6727 30.4101 28.6683 30.4429 28.6637 30.4821C28.648 30.6146 28.6307 30.8143 28.6284 31.0573C28.6238 31.5553 28.6832 32.1709 28.8995 32.7533C29.1082 33.3153 29.4573 33.8373 30.0587 34.2346C30.6691 34.638 31.6723 35.0001 33.3334 35.0002C39.5257 35.0002 44.5207 26.6224 39.5178 20.1901C37.7346 17.8974 34.3492 16.5619 30.6856 16.7306C27.0625 16.8975 23.475 18.5287 21.3221 21.7581C19.9222 23.8579 19.7947 25.8624 20.2043 27.3778C20.6419 28.9964 21.6157 29.8857 22.2218 30.079C23.0987 30.3587 23.583 31.2963 23.3033 32.1733C23.0237 33.0502 22.086 33.5344 21.2091 33.2548C19.2019 32.6147 17.619 30.5874 16.9865 28.2477C16.3261 25.8047 16.6152 22.8092 18.5486 19.9091C21.3957 15.6383 26.0567 13.6069 30.5323 13.4008Z"
                                                fill="white" />
                                        </svg>
                                        <h4 class='text-[20px] leading-5 text-title-color font-semibold mt-15px mb-5'>
                                            Pinterest</h4>
                                        <button
                                            class='px-30px py-2 hover:bg-[#FF0000] text-title-color bg-[#E0E0E0] rounded-3xl text-sm font-semibold hover:text-white'>Connect</button>
                                    </div>
                                </div>
                            </div>

                        </template>
                    </Modal>
                </div>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
