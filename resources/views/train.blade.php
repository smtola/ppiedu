<x-guest-layout>
    <section class="w-full mt-[2rem] max-w-screen-2xl mx-auto overflow-hidden">
        <header class="flex justify-between px-3">
            <div>
                <h2 class="text-xl  md:text-3xl font-bold text-center text-[#e9ad31] lg:text-4xl">វគ្គបណ្តុះបណ្តាល</h2>
            </div>
            <div class="hidden md:flex gap-4 lg:mt-0">
                <button aria-label="Previous slide" id="keen-slider-previous"
                    class="rounded-full border border-[#7f3636] p-3 text-[#7f3636] transition hover:bg-[#7f3636] hover:text-[#e9ad31]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="size-5 rtl:rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>

                <button aria-label="Next slide" id="keen-slider-next"
                    class="rounded-full border border-[#7f3636] p-3 text-[#7f3636] transition hover:bg-[#7f3636] hover:text-[#e9ad31]">
                    <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>
        </header>
        <div class=" mt-8 w-full lg:mx-0">
            <div id="keen-slider" class="keen-slider">
                <div class="keen-slider__slide">
                    <img src="{{ url('assets/images/train.png') }}" class="w-full h-full">
                </div>

                <div class="keen-slider__slide">
                    <img src="{{ url('assets/images/train.png') }}" class="w-full h-full">
                </div>

                <div class="keen-slider__slide">
                    <img src="{{ url('assets/images/train.png') }}" class="w-full h-full">
                </div>
            </div>
        </div>
    </section>

    <script type="module">
        import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

      const keenSlider = new KeenSlider(
        '#keen-slider',
        {
          loop: true,
          slides: {
            origin: 'center',
            perView: 1.5,
            spacing: 16,
          }
        },
        []
      )

      const keenSliderPrevious = document.getElementById('keen-slider-previous')
      const keenSliderNext = document.getElementById('keen-slider-next')

      keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
      keenSliderNext.addEventListener('click', () => keenSlider.next())
    </script>
</x-guest-layout>
