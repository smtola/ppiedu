<x-guest-layout>

    <section
        class="relative">
        <div>
            <img src="{{ asset('assets/images/slide_1.png') }}" class="absolute inset-0 w-full h-full object-cover object-center">
        </div>

        <div class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:bg-gradient-to-r from-gray-900/95 to-gray-900/25">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-start ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-[30px] text-white sm:text-[50px]">
                    មហាវិទ្យាល័យបច្ចេកវិទ្យាព័ត៌មាន
                </h1>

                <ul class="mt-4 max-w-lg text-white sm:text-xl/relaxed list-disc ml-5">
                    <li>
                        <span>

                        </span>
                        <p>
                            ថ្នាក់បរិញ្ញាបត្រ(៤​ ឆ្នាំ)
                        </p>
                    </li>
                    <li>
                        <span>

                        </span>
                        <p>
                            ថ្នាក់បរិញ្ញាបត្ររង(២ ឆ្នាំ)
                        </p>
                    </li>
                    <li>
                        <span>

                        </span>
                        <p>
                            ថ្នាក់បរិញ្ញាបត្រ(៤​ ឆ្នាំ)
                        </p>
                    </li>
                    <li>
                        <span>

                        </span>
                        <p>
                            ថ្នាក់បរិញ្ញាបត្ររង(២ ឆ្នាំ)
                        </p>
                    </li>
                </ul>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="#"
                        class="block w-full rounded bg-[#8a2c28] px-12 py-3 text-sm font-medium text-white shadow hover:bg-[#7f3636] focus:outline-none active:bg-[#e9ad31] sm:w-auto">
                        សូមចុចទីនេះដើម្បីចុះឈ្មោះតាមប្រព័ន្ធ Online
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full mt-[2rem] max-w-screen-2xl mx-auto overflow-hidden">
        <header class="flex justify-between px-3 py-5">
            <div>
                <h2 class="text-lg text-start md:text-xl text-[#e9ad31] lg:text-2xl ">សកម្មភាពសិក្សារបស់និស្សិតវិស្វកម្មអគ្គិសនី</h2>
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
