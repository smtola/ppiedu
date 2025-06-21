@extends('layouts.guest')
@section('content')
<div class="w-full md:container mx-auto p-3 xl:px-4 xl:py-8 overflow-hidden">
    <h1 class="text-3xl md:text-4xl text-center text-[#e9ad31] font-bold py-[2rem]">ដំណឹងនិងព្រឹត្តិការណ៍ថ្មីៗ</h1>
    <div class="w-full grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach($news as $index => $item)
            <div class="w-full bg-white h-auto rounded-2xl overflow-hidden shadow p-4 mx:p-6 hover:shadow-lg transition duration-300">
                <div class="swiper h-[30vh] mySwiper_news-{{ $index }}">
                    <div class="swiper-wrapper">
                        @foreach($newMediaUrls[$index] as $imageUrl)
                            <div class="swiper-slide">
                                <img src="{{ $imageUrl }}" alt="{{ $item['title'] }}" class="rounded-xl w-full object-cover" style="height: 30vh;" />
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <h2 class="text-xl font-semibold mb-2">{{ $item['title'] }}</h2>
                <p class="text-gray-600 mb-4">{{ Str::limit($item['excerpt'], 100) }}</p>
                <p class="text-gray-600 mb-4">{{ $item->name }}</p>
                <a href="{{ route('news.show', $item['id']) }}" class="inline-flex space-x-3 text-blue-600 font-medium hover:underline">
                   <span>Read more</span>
                   <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M15 16l4 -4" /><path d="M15 8l4 4" /></svg>
                </a>
            </div>
        @endforeach
    </div>
    {{ $news->links('pagination::daisyui') }}
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @foreach($news as $index => $item)
            new Swiper(".mySwiper_news-{{ $index }}", {
                loop: true,
                pagination: {
                    el: ".mySwiper_news-{{ $index }} .swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
            });
        @endforeach
    });
</script>
@endsection
