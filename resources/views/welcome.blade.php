<x-guest-layout>
    <section class="w-full px-3 2xl:px-0 mt-[2rem] max-w-screen-2xl mx-auto overflow-hidden">
        <div class="swiper mySwiper rounded-tl-xl rounded-tr-xl">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ url('assets/images/slide_1.png') }}" alt=""
                        class="w-full object-center object-contain">
                </div>
                <div class="swiper-slide">
                    <img src="{{ url('assets/images/slide_2.png') }}" alt=""
                        class="w-full object-center object-contain">
                </div>
                <div class="swiper-slide">
                    <img src="{{ url('assets/images/slide_3.png') }}" alt=""
                        class="w-full object-center object-contain">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div
            class="relative flex flex-col justify-center items-center w-full mx-auto h-full xl:h-[30vh] bg-[#8f4440] overflow-hidden rounded-bl-xl md:rounded-bl-[10rem] rounded-br-xl">
            <img src="{{asset('assets/images/register.png')}}"
                class="absolute inset-0 w-full object-contain object-center">
            <div class="bg-gradient-to-t from-[#8f4440]/90 to-[#ffffff]/20 absolute inset-0"></div>
            <div
                class="relative mt-[3em] md:mt-[7em] lg:mt-[10em] group hover:scale-[1.1] transition-all duration-[300ms] ease-in-out pb-[1em] md:pb-[2em] xl:pb-0">
                <a href="#"
                    class="text-balance text-[12px] md:text-[16px] font-medium
                bg-[#f9ddb1]/50 backdrop-blur-[15px] bg-opacity-[1] px-1 py-2 md:px-4 md:py-3 text-[#ffffff] rounded-full group-hover:shadow-lg transition-all duration-[300ms] ease-in-out">
                    សូមចុចទីនេះដើម្បីចុះឈ្មោះតាមប្រព័ន្ធ Online
                </a>
            </div>
        </div>
    </section>

    <section class="w-full px-3 2xl:px-0 my-[2rem] max-w-screen-2xl mx-auto overflow-hidden">
        <!-- Swiper -->
        <div class="swiper_3 mySwiper_3 !overflow-visible">
            <div class="swiper-wrapper">
                <div class="swiper-slide !px-1 md:!px-0">
                    <a href="{{ route('faculty.datail') }}">
                        <div
                            class="w-full 2xl:w-[22em] min-h-[48vh] mx-auto bg-gradient-to-b from-[#ffa828]/60 to-[#8f4440]/70 flex flex-col justify-center items-start gap-[10px] p-5 rounded-xl group">
                            <div class="w-full h-[26vh] overflow-hidden rounded-2xl">
                                <img src="http://www.ppiedu.com/system/upload/8c829a6bfc43188bc7b89e8e0085f0a5.jpg"
                                    alt=""
                                    class="w-full object-cover object-center rounded-2xl group-hover:scale-[1.1] transition-all duration-300 ease-in-out">
                            </div>
                            <span
                                class="w-full bg-[#ffa828]/50 p-2 rounded-bl-[4em] rounded-tr-[2em] rounded-tl-[4em] rounded-br-[10em]">
                                <h1 class="text-center font-medium text-[16px] text-[#ffffff]">មហាវិទ្យាល័យអគ្គិសនី</h1>
                            </span>
                            <div>
                                <ul class="text-[#ffffff]">
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">អនុបណ្ឌិត (២ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់បរិញ្ញាប័ត្រ(៤.៥ ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់បរិញ្ញាប័ត្ររង(២ ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់សិក្សាបង់ថ្លៃ</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">អាហាររូបករណ៍១០០%</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">វេនព្រឹក វេនរសៀល វេនយប់</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path
                                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                                </path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">០៩៨ ៦០០ ៨៦៨</h1>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide !px-1 md:!px-0">
                    <a href="{{ route('faculty.datail') }}">
                        <card
                            class="w-full 2xl:w-[22em] min-h-[48vh] mx-auto bg-gradient-to-b from-[#ffa828]/60 to-[#8f4440]/70 flex flex-col justify-center items-start gap-[10px] p-5 rounded-xl group">
                            <div class="w-full h-[26vh] overflow-hidden rounded-2xl">
                                <img src="http://www.ppiedu.com/system/upload/8c829a6bfc43188bc7b89e8e0085f0a5.jpg"
                                    alt=""
                                    class="w-full object-cover object-center rounded-2xl group-hover:scale-[1.1] transition-all duration-300 ease-in-out">
                            </div>
                            <span
                                class="w-full bg-[#ffa828]/50 p-2 rounded-bl-[4em] rounded-tr-[2em] rounded-tl-[4em] rounded-br-[10em]">
                                <h1 class="text-center font-medium text-[16px] text-[#ffffff]">មហាវិទ្យាល័យអគ្គិសនី</h1>
                            </span>
                            <div>
                                <ul class="text-[#ffffff]">
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">អនុបណ្ឌិត (២ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់បរិញ្ញាប័ត្រ(៤.៥ ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់បរិញ្ញាប័ត្ររង(២ ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់សិក្សាបង់ថ្លៃ</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">អាហាររូបករណ៍១០០%</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">វេនព្រឹក វេនរសៀល វេនយប់</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path
                                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                                </path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">០៩៨ ៦០០ ៨៦៨</h1>
                                    </li>
                                </ul>
                            </div>
                        </card>
                    </a>
                </div>
                <div class="swiper-slide !px-1 md:!px-0">
                    <a href="{{ route('faculty.datail') }}">
                        <card
                            class="w-full 2xl:w-[22em] min-h-[48vh] mx-auto bg-gradient-to-b from-[#ffa828]/60 to-[#8f4440]/70 flex flex-col justify-center items-start gap-[10px] p-5 rounded-xl group">
                            <div class="w-full h-[26vh] overflow-hidden rounded-2xl">
                                <img src="http://www.ppiedu.com/system/upload/8c829a6bfc43188bc7b89e8e0085f0a5.jpg"
                                    alt=""
                                    class="w-full object-cover object-center rounded-2xl group-hover:scale-[1.1] transition-all duration-300 ease-in-out">
                            </div>
                            <span
                                class="w-full bg-[#ffa828]/50 p-2 rounded-bl-[4em] rounded-tr-[2em] rounded-tl-[4em] rounded-br-[10em]">
                                <h1 class="text-center font-medium text-[16px] text-[#ffffff]">មហាវិទ្យាល័យអគ្គិសនី</h1>
                            </span>
                            <div>
                                <ul class="text-[#ffffff]">
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">អនុបណ្ឌិត (២ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់បរិញ្ញាប័ត្រ(៤.៥ ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់បរិញ្ញាប័ត្ររង(២ ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់សិក្សាបង់ថ្លៃ</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">អាហាររូបករណ៍១០០%</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">វេនព្រឹក វេនរសៀល វេនយប់</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path
                                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                                </path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">០៩៨ ៦០០ ៨៦៨</h1>
                                    </li>
                                </ul>
                            </div>
                        </card>
                    </a>
                </div>
                <div class="swiper-slide !px-1 md:!px-0">
                    <a href="{{ route('faculty.datail') }}">
                        <card
                            class="w-full 2xl:w-[22em] min-h-[48vh] mx-auto bg-gradient-to-b from-[#ffa828]/60 to-[#8f4440]/70 flex flex-col justify-center items-start gap-[10px] p-5 rounded-xl group">
                            <div class="w-full h-[26vh] overflow-hidden rounded-2xl">
                                <img src="http://www.ppiedu.com/system/upload/8c829a6bfc43188bc7b89e8e0085f0a5.jpg"
                                    alt=""
                                    class="w-full object-cover object-center rounded-2xl group-hover:scale-[1.1] transition-all duration-300 ease-in-out">
                            </div>
                            <span
                                class="w-full bg-[#ffa828]/50 p-2 rounded-bl-[4em] rounded-tr-[2em] rounded-tl-[4em] rounded-br-[10em]">
                                <h1 class="text-center font-medium text-[16px] text-[#ffffff]">មហាវិទ្យាល័យអគ្គិសនី</h1>
                            </span>
                            <div>
                                <ul class="text-[#ffffff]">
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">អនុបណ្ឌិត (២ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់បរិញ្ញាប័ត្រ(៤.៥ ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់បរិញ្ញាប័ត្ររង(២ ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់សិក្សាបង់ថ្លៃ</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">អាហាររូបករណ៍១០០%</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">វេនព្រឹក វេនរសៀល វេនយប់</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path
                                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                                </path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">០៩៨ ៦០០ ៨៦៨</h1>
                                    </li>
                                </ul>
                            </div>
                        </card>
                    </a>
                </div>
                <div class="swiper-slide !px-1 md:!px-0">
                    <a href="{{ route('faculty.datail') }}">
                        <card
                            class="w-full 2xl:w-[22em] min-h-[48vh] mx-auto bg-gradient-to-b from-[#ffa828]/60 to-[#8f4440]/70 flex flex-col justify-center items-start gap-[10px] p-5 rounded-xl group">
                            <div class="w-full h-[26vh] overflow-hidden rounded-2xl">
                                <img src="http://www.ppiedu.com/system/upload/8c829a6bfc43188bc7b89e8e0085f0a5.jpg"
                                    alt=""
                                    class="w-full object-cover object-center rounded-2xl group-hover:scale-[1.1] transition-all duration-300 ease-in-out">
                            </div>
                            <span
                                class="w-full bg-[#ffa828]/50 p-2 rounded-bl-[4em] rounded-tr-[2em] rounded-tl-[4em] rounded-br-[10em]">
                                <h1 class="text-center font-medium text-[16px] text-[#ffffff]">មហាវិទ្យាល័យអគ្គិសនី</h1>
                            </span>
                            <div>
                                <ul class="text-[#ffffff]">
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">អនុបណ្ឌិត (២ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់បរិញ្ញាប័ត្រ(៤.៥ ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់បរិញ្ញាប័ត្ររង(២ ឆ្នាំ)</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">ថ្នាក់សិក្សាបង់ថ្លៃ</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">អាហាររូបករណ៍១០០%</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">វេនព្រឹក វេនរសៀល វេនយប់</h1>
                                    </li>
                                    <li class="flex items-center gap-[1em]">
                                        <span>
                                            <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                x-bind:width="size" x-bind:height="size" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" x-bind:stroke-width="stroke"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                                <path
                                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                                </path>
                                            </svg>
                                        </span>
                                        <h1 class="text-[16px] font-extralight">០៩៨ ៦០០ ៨៦៨</h1>
                                    </li>
                                </ul>
                            </div>
                        </card>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full px-3 2xl:px-0 my-[2rem] max-w-screen-2xl mx-auto overflow-hidden">
        <!-- Swiper -->
        <h2 class="text-center font-medium text-[24px] lg:text-[44px] my-[1em] text-[#853c3d]">
            ដំណឹងនិងព្រឹត្តិការណ៍ថ្មីៗ</h2>
        <div class="swiper_2 mySwiper_2 !overflow-hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_1.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_2.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_3.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_4.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_5.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_6.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_7.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_8.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_9.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_10.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_11.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_12.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_13.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
                <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                    <img src="{{ url('assets/images/event_14.jpg') }}" alt=""
                        class="w-full h-full object-center !rounded-3xl">
                    <div class="swiper-text">ដាក់សាកល្បង</div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="grid grid-cols-12 justify-center items-center gap-2
     w-full p-3 2xl:px-0 my-[2rem] max-w-screen-2xl mx-auto overflow-hidden">
        <div class="col-span-6 md:col-span-8 flex flex-col justify-start bg-image py-5">
            <div class="absolute inset-0 bg-black/60"></div>
            <div class="relative">
                <h2
                    class="text-[#ffffff] text-center font-medium text-[10px] md:text-[18px] xl:text-[26px] 2xl:text-[34px] mt-4">
                    សក្តានុពលសិក្សានៅវិទ្យាស្ថានពហុបច្ចេកទេសព្រះកុសុមៈ
                </h2>
                <ul class="py-5 px-[5px] md:px-[3rem]">
                    <li class="my-[3vw] flex justify-start items-start md:items-center gap-2 text-white">
                        <span>
                            <img src="{{ url('assets/images/labour.svg') }}" alt=""
                                class="w-[20px] h-[20px] md:w-[36px] md:h-[36px] xl:w-[44px] xl:h-[44px] mx-auto">
                        </span>
                        <p
                            class="text-[8px] md:text-[16px] lg:text-[22px] xl:text-[26px] 2xl:text-[34px] font-light text-wrap">
                            មានការយកចិត្តទុកដាក់ ពីក្រសួងការងារនិងបណ្តុះបណ្តាលវិជ្ជាជីវៈ
                        </p>
                    </li>
                    <li class="my-[3vw] flex justify-start items-start md:items-center gap-2 text-white">
                        <span>
                            <img src="{{ url('assets/images/training.svg') }}" alt=""
                                class="w-[20px] h-[20px] md:w-[36px] md:h-[36px] xl:w-[44px] xl:h-[44px] mx-auto">
                        </span>
                        <p
                            class="text-[8px] md:text-[16px] lg:text-[22px] xl:text-[26px] 2xl:text-[34px] font-light text-wrap">
                            សិក្សាលើការអនុវត្តន៍ ច្រើនជាងទ្រឹស្តី
                        </p>
                    </li>
                    <li class="my-[3vw] flex justify-start items-start md:items-center gap-2 text-white">
                        <span>
                            <img src="{{ url('assets/images/business.svg') }}" alt=""
                                class="w-[20px] h-[20px] md:w-[36px] md:h-[36px] xl:w-[44px] xl:h-[44px] mx-auto">
                        </span>
                        <p
                            class="text-[8px] md:text-[16px] lg:text-[22px] xl:text-[26px] 2xl:text-[34px] font-light text-wrap">
                            មានសហប្រតិបត្តិការជាមួយ ម្ចាស់សហគ្រាស និងក្រុមហ៊ុនឯកជន
                        </p>
                    </li>
                    <li class="my-[3vw] flex justify-start items-start md:items-center gap-2 text-white">
                        <span>
                            <img src="{{ url('assets/images/certificate.svg') }}" alt=""
                                class="w-[20px] h-[20px] md:w-[36px] md:h-[36px] xl:w-[44px] xl:h-[44px] mx-auto">
                        </span>
                        <p
                            class="text-[8px] md:text-[16px] lg:text-[22px] xl:text-[26px] 2xl:text-[34px] font-light text-wrap">
                            ទទួលបានលិខិតសិក្សាជំនាញ
                        </p>
                    </li>
                    <li class="my-[3vw] flex justify-start items-start md:items-center gap-2 text-white">
                        <span>
                            <img src="{{ url('assets/images/anniversary.svg') }}" alt=""
                                class="w-[20px] h-[20px] md:w-[36px] md:h-[36px] xl:w-[44px] xl:h-[44px] mx-auto">
                        </span>
                        <p
                            class="text-[8px] md:text-[16px] lg:text-[22px] xl:text-[26px] 2xl:text-[34px] font-light text-wrap">
                            ទទួលបានអាហារូបករណ៍ ១០០%
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-span-6 md:col-span-4">
            <div class="w-full h-full mx-auto">
                <img src="{{ url('assets/images/promotion_1.jpg') }}" alt="" class="w-full object-cover">
            </div>
            <div class="w-full h-full mx-auto">
                <img src="{{ url('assets/images/promotion_2.jpg') }}" alt="" class="w-full object-cover">
            </div>
            <div class="w-full h-full mx-auto">
                <img src="{{ url('assets/images/promotion_3.jpg') }}" alt="" class="w-full object-cover">
            </div>
            <div class="w-full h-full mx-auto">
                <img src="{{ url('assets/images/promotion_4.jpg') }}" alt="" class="w-full">
            </div>
        </div>
    </section>

</x-guest-layout>
