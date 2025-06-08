@extends('layouts.guest')
@section('banner')
    <img src="{{ $url }}" alt="banner" class="w-full h-auto object-cover object-center">
@endsection
@section('content')
    <section class="w-full px-3 2xl:px-0 mt-[2rem] max-w-screen-2xl mx-auto overflow-hidden">
        <div class="swiper mySwiper rounded-tl-xl rounded-tr-xl">
            <div class="swiper-wrapper">
                @foreach ($sliderMediaUrls as $index => $slider)
                    <div class="swiper-slide">
                        <img src="{{ $sliderMediaUrls[$index] }}" alt="" class="w-full object-center object-contain">
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div
            class="relative flex flex-col justify-center items-center w-full mx-auto h-full xl:h-[30vh] bg-[#8f4440] overflow-hidden rounded-bl-xl md:rounded-bl-[10rem] rounded-br-xl">
            <img src="{{ $registers }}" class="absolute inset-0 w-full object-contain object-center">
            <div class="bg-gradient-to-t from-[#8f4440]/90 to-[#ffffff]/20 absolute inset-0"></div>
            <div
                class="relative mt-[3em] md:mt-[7em] lg:mt-[10em] group hover:scale-[1.1] transition-all duration-[300ms] ease-in-out pb-[1em] md:pb-[2em] xl:pb-0">
                <a href="{{ route('registration.create') }}"
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
                @foreach ($faculties as $index => $faculty)
                    <div class="swiper-slide !px-1 md:!px-0">
                        <a href="{{ route('faculty.show', $faculty->slug) }}">
                            <div
                                class="w-full 2xl:w-[22em] min-h-[48vh] mx-auto bg-gradient-to-b from-[#ffa828]/60 to-[#8f4440]/70 flex flex-col justify-center items-start gap-[10px] p-5 rounded-xl group">
                                <div class="w-full h-[26vh] overflow-hidden rounded-2xl">
                                    <img src="{{ $facultyMediaUrls[$index] }}" alt="{{ $faculty->name }}"
                                        class="w-full object-cover object-center rounded-2xl group-hover:scale-[1.1] transition-all duration-300 ease-in-out">
                                </div>
                                <span
                                    class="w-full bg-[#ffa828]/50 p-2 rounded-bl-[4em] rounded-tr-[2em] rounded-tl-[4em] rounded-br-[10em]">
                                    <h1 class="text-center font-medium text-[16px] text-[#ffffff]">{{ $faculty->name }}</h1>
                                </span>
                                <div>
                                    <ul class="text-[#ffffff]">
                                        @foreach ($faculty->classFaculties as $classFaculty)
                                            <li class="flex items-center gap-[1em]">
                                                <span>
                                                    @if ($classFaculty->slug == 'phonenumber')
                                                        <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                            x-bind:width="size" x-bind:height="size"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            x-bind:stroke-width="stroke" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1">
                                                            <path
                                                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                                            </path>
                                                        </svg>
                                                    @else
                                                        <svg class="w-[22px] h-[22px]" xmlns="http://www.w3.org/2000/svg"
                                                            x-bind:width="size" x-bind:height="size"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            x-bind:stroke-width="stroke" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1">
                                                            <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                            <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                                        </svg>
                                                    @endif
                                                </span>
                                                <h1 class="text-[16px] font-extralight">{{ $classFaculty->name }}</h1>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="w-full px-3 2xl:px-0 my-[2rem] max-w-screen-2xl mx-auto overflow-hidden">
        <!-- Swiper -->
        <div class="swiper_2 mySwiper_2 !overflow-hidden">
            <div class="swiper-wrapper">
                @foreach ($news as $index => $new)
                    <div class="swiper-slide !w-[44vh] md:!w-[64vh] !rounded-3xl">
                        <img src="{{ $newMediaUrls[$index] }}" alt="{{ $new->name }}"
                            class="w-full h-full object-center !rounded-3xl">
                        <div class="swiper-text">{{ $new->name }}</div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section
        class="grid grid-cols-12 justify-center items-center gap-2
     w-full p-3 2xl:px-0 my-[2rem] max-w-screen-2xl mx-auto overflow-hidden">
        <div class="col-span-6 md:col-span-8 flex flex-col justify-start bg-image py-5">
            <div class="absolute inset-0 bg-black/60"></div>
            <div class="relative">
                <h2
                    class="text-[#ffffff] text-center font-medium text-[10px] md:text-[18px] xl:text-[26px] 2xl:text-[34px] mt-4">
                    សក្តានុពលសិក្សានៅវិទ្យាស្ថានពហុបច្ចេកទេសព្រះកុសុមៈ
                </h2>
                <ul class="py-5 px-[5px] md:px-[3rem]">
                    @foreach ($potentials as $index => $potential)
                        <li class="my-[3vw] flex justify-start items-start md:items-center gap-2 text-white">
                            <span>
                                <img src="{{ $potentialMediaUrls[$index] }}" alt=""
                                    class="w-[20px] h-[20px] md:w-[36px] md:h-[36px] xl:w-[44px] xl:h-[44px] mx-auto">
                            </span>
                            <p
                                class="text-[8px] md:text-[16px] lg:text-[22px] xl:text-[26px] 2xl:text-[34px] font-light text-wrap">
                                {{ $potential->name }}
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-span-6 md:col-span-4">
            <div class="w-full h-full mx-auto">
                <img src="{{ $anoun_1 }}" alt="" class="w-full object-cover">
            </div>
            <div class="w-full h-full mx-auto">
                <img src="{{ $anoun_2 }}" alt="" class="w-full object-cover">
            </div>
            <div class="w-full h-full mx-auto">
                <img src="{{ $anoun_3 }}" alt="" class="w-full object-cover">
            </div>
            <div class="w-full h-full mx-auto">
                <img src="{{ $anoun_4 }}" alt="" class="w-full">
            </div>
        </div>
    </section>
@endsection
