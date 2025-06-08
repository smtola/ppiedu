@extends('layouts.guest')
@section('banner')
    <img src="{{ $url }}" alt="banner" class="w-full h-auto object-cover object-center">
@endsection
@section('content')
    <div class="w-full mx-auto overflow-x-hidden overflow-y-auto  min-h-screen perspective-[300px]">
    <section class="transform-3d px-3 2xl:px-0 mx-auto overflow-hidden z-[1]">
        <img src="{{ $url_2 }}" alt="" class="w-full h-full object-contain object-center parallax-bg">
    </section>
    <section class="w-full px-3 2xl:px-0 mt-[2rem] max-w-screen-2xl mx-auto overflow-hidden z-[2]">
        <h2 class="text-[16px] lg:text-[24px] xl:text-[32px] text-center my-3 text-[#7f3636] font-medium">{{$about_us_1->title}}</h2>
        <p class="text-[12px] lg:text-[16px] xl:text-[24px] text-justify text-balance text-[#7f3636] hyphens-auto">{{ $about_us_1->content }}</p>
    </section>
    <section class="w-full mt-[2rem] max-w-screen-2xl mx-auto overflow-hidden z-[2]">
        <div class="relative w-full min-h-[36vh] md:min-h-[30vh] xl:min-h-[70vh] mx-auto flex flex-col justify-start items-center clip-image-1 overflow-hidden">
            <img src="{{ url('assets/images/background_abu.png') }}" alt="" class="w-full h-full absolute inset-0">
            <div class="bg-black/40 backdrop-blur-[4px] bg-opacity-100 absolute inset-0"></div>
            <div class="relative flex flex-col justify-center">
                <h2 class="text-[16px] lg:text-[24px] xl:text-[32px] text-center mt-[1rem] lg:my-5 text-[#ffffff] font-medium">{{ $about_us_2->title }}</h2>
                <p class="text-[12px] md:text-[16px] xl:text-[24px] text-justify text-balance text-[#ffffff] px-4 hyphens-auto">{{ $about_us_2->content }}</p>
            </div>
        </div>
    </section>
    <section class=" w-full px-3 2xl:px-0 mt-[2rem] max-w-screen-2xl mx-auto overflow-hidden z-[2]">
        <ul>
            <li class="flex items-start gap-2 my-4">
                <img src="{{ url('assets/images/vision.svg') }}" alt="" class="w-[32px] h-[32px]">
                <div>
                    <h1 class="font-bold text-[18px] xl:text-[24px]">
                        {{ $about_us_3->title }}
                    </h1>
                    <p class="text-[16px] xl:text-[20px] text-pretty">{{ $about_us_3->content }}</p>
                </div>
            </li>
            <li class="flex items-start gap-2 my-4">
                <img src="{{ url('assets/images/mission.svg') }}" alt="" class="w-[32px] h-[32px]">
                <div>
                    <h1 class="font-bold text-[18px] xl:text-[24px]">
                        {{ $about_us_4->title }}
                    </h1>
                    <p class="text-[16px] xl:text-[20px] text-pretty">{{ $about_us_4->content }}</p>
                </div>
            </li>
            <li class="flex items-start gap-2 my-4">
                <img src="{{ url('assets/images/corevalue.svg') }}" alt="" class="w-[32px] h-[32px]">
                <div>
                    <h1 class="font-bold text-[18px] xl:text-[24px]">
                        {{ $about_us_5->title }}
                    </h1>
                    <p class="text-[16px] xl:text-[20px] text-pretty">
                        {{ $about_us_5->title }}
                    </p>
                </div>
            </li>
            <li class="flex items-start gap-2 my-4">
                <img src="{{ url('assets/images/goal.svg') }}" alt="" class="w-[32px] h-[32px]">
                <div>
                    <h1 class="font-bold text-[18px] xl:text-[24px]">
                        {{ $about_us_6->title }}
                    </h1>
                    <p class="text-[16px] xl:text-[20px] text-pretty">
                        {{ $about_us_6->title }}
                    </p>
                </div>
            </li>
            <li class="flex items-start gap-2 my-4">
                <img src="{{ url('assets/images/quality.svg') }}" alt="" class="w-[32px] h-[32px]">
                <div>
                    <h1 class="font-bold text-[18px] xl:text-[24px]">
                        {{ $about_us_7->title }}
                    </h1>
                    <p class="text-[16px] xl:text-[20px] text-pretty">
                        {{ $about_us_7->title }}
                    </p>
                </div>
            </li>
        </ul>
    </section>

    </div>
    <script>
        window.addEventListener("scroll", () => {
        const bg = document.querySelector(".parallax-bg");
        const offset = window.pageYOffset;
        bg.style.transform = `translateY(-12%) translateY(${offset * .2}px)`;
        });
    </script>
@endsection
