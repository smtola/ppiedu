@extends('layouts.guest')
{{-- @section('banner')
    <img src="{{ $url }}" alt="banner" class="w-full h-auto object-cover object-center">
@endsection --}}
@section('content')
<div class="container mx-auto md:px-4 md:py-10">
    <div class="mx-auto bg-white rounded-2xl p-3 md:p-6">
        {{-- Back Button --}}
        <a href="{{ route('news') }}" class="inline-flex space-x-3 mt-4 text-blue-600 font-medium hover:underline">
            
            <span>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l4 4" /><path d="M5 12l4 -4" /></svg>
            </span>
        <span> Back to News</span>
        </a>
        <div class="block">
            <div class="xl:float-end xl:w-[60%] xl:ps-[1rem] xl:pt-[4rem]">
            {{-- Images Slider or Gallery --}}
                @if(!empty($urls))
                    <div class="w-full swiper !h-[20vh] md:!h-[30vh] xl:!h-[50vh] mySwiper mb-6 rounded-xl overflow-hidden">
                        <div class="swiper-wrapper">
                            @foreach($urls as $imageUrl)
                                <div class="swiper-slide">
                                    <a href="{{ $imageUrl }}" target="_blank" rel="noopener noreferrer">
                                        <img src="{{ $imageUrl }}" alt="{{ $item->name }}" class="w-full h-full object-contain rounded-xl" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                    <style>
                        .mySwiper {
                            height: 16rem;
                        }
                        .mySwiper .swiper-slide img {
                            border-radius: 0.75rem;
                        }
                    </style>
                @endif
            </div>
            <div>
                {{-- Title --}}
                <h1 class="text-3xl font-bold mb-6">{{ $item->name }}</h1>

                {{-- Content --}}
                <div class="text-gray-700 text-lg leading-relaxed text-justify space-y-4 mb-8">
                    {!! $item->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
