<template>
    <div class="modal-area" :id="id">
        <div v-if="showModal"
            @click="hideModal"
            class="modal modal-container   w-full fixed bg-[#a7a7a780] overflow-x-hidden overflow-y-auto top-0 right-1/2 translate-x-1/2 ease-in-out  z-50 h-full">

            <div :class="modalWidth" class="relative w-auto my-6 mx-auto max-w-6xl z-50">
                <!--content-->
                <div
                    class="border-0 py-30px rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    <!--header-->
                    <div
                        class="modal-head flex justify-between items-center px-30px pb-25px">

                        <h2 class="text-2xl leading-9 text-title-color font-semibold">
                            <slot name="title"></slot>
                        </h2>

                        <button class="absolute top-30px right-30px" v-on:click="toggleModal()">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" rx="2" fill="#F4F4F6" />
                                <path d="M7 17L17 7" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M17 17L7 7" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <!--body-->
                    <div class="modal-content">
                            <slot name="body"></slot>
                    </div>
                    <!--footer-->
                    <div :class="buttonJustify, buttonGap, display" class='flex items-center px-30px'>
                        <button :class="buttonGrow, buttonFont" type="button" v-on:click="toggleModal()"
                            class="hover:bg-primary hover:text-white bg-gray rounded-[5px] px-25px py-[14px] text-text-color">Close</button>
                        <button :class="buttonGrow, buttonFont"
                            class="hover:bg-primary hover:text-white bg-gray rounded-[5px] px-25px py-[14px] text-text-color">{{ buttonText }}</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: "large-modal",
    props: {
        id: {
            type: String,
            default() {
                return 'besnik-modal'
            }
        },
        modalWidth: {
            type: String,
            default() {
                return 'w-813px'
            }
        },
        display: {
            type: String,
            default() {
                return ''
            }
        },
        buttonJustify: {
            type: String,
            default() {
                return 'justify-end'
            }
        },
        buttonGrow: {
            type: String,
            default() {
                return ''
            }
        },
        buttonFont: {
            type: String,
            default() {
                return 'text-sm'
            }
        },
        buttonGap: {
            type: String,
            default() {
                return 'gap-13px'
            }
        },
        buttonText: {
            type: String,
            default() {
                return 'Save'
            }
        }
    },
    data() {
        return {
            showModal: false,
        }
    },
    watch:{
        showModal: (val) => {
        if(val){
            document.body.style.overflowY = 'hidden'
        }else{
            document.body.style.overflowY = 'auto'
        }
        }
    },
    mounted() {

        window.addEventListener("message", (event) => {

            if (event.origin === window.origin && event.data.author === 'besnik-modal') {

                let modalId = event.data.id ? event.data.id : 'besnik-modal';

                if ((modalId === this.id) && (event.data.action === 'hideModal')) {
                    this.showModal = false;
                }

                if ((modalId === this.id) && (event.data.action === 'showModal')) {
                    this.showModal = true;
                }
            }

        }, false);


    },
    methods: {
        toggleModal: function () {
            this.showModal = !this.showModal;
        }
    }
}
</script>
