<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="!bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'វិទ្យាស្ថានពហុបច្ចេកទេសព្រះកុសុមៈ') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
    <!-- Scripts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @fluxAppearance
        @livewireStyles
</head>

<body class="overflow-x-hidden !bg-white">
        <header>
            @yield('banner')
        </header>
        @include('layouts.navigation-guest')
        <main>
            @yield('content')
        </main>
        @include('layouts.footer')
      @fluxScripts
      @livewireScripts
</body>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    // slider
            var swiper = new Swiper(".mySwiper", {
                  spaceBetween: 30,
                  centeredSlides: true,
                  loop: true,
                  effect: "zoom",
                  autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                  },
                  pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                  },
                  navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                  },
                });
// slider course
            var swiper_3 = new Swiper(".mySwiper_3", {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    freeMode: true,
                    loop: true,
                    effect: "zoom",
                    autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                    },
                    breakpoints: {
                        640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                        },
                        768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                        },
                        1024: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                        },
                        1280: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                        },
                    },
                    pagination: {
                    el: ".swiper-pagination",
                    },
              });

              var swiper_2 = new Swiper(".mySwiper_2", {
                  effect: "coverflow",
                  grabCursor: true,
                  centeredSlides: true,
                  slidesPerView: 'auto',
                  loop: true,
                    autoplay: {
                    delay: 4500,
                    disableOnInteraction: false,
                    },
                  coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 120,
                    modifier: 2,
                    slideShadows: true,
                  },
                  pagination: {
                  el: ".swiper-pagination",
                  },

                  on: {
                slideChange: function() {
                document.querySelectorAll('.swiper-text').forEach(function(el) {
                el.style.display = 'none';
                el.style.opacity = 0;
                el.style.transform = 'translateY(50px)';
                });

                var activeSlide = this.slides[this.activeIndex];
                var activeText = activeSlide.querySelector('.swiper-text');
                if (activeText) {
                activeText.style.display = 'block';
                setTimeout(function() {
                activeText.style.opacity = 1;
                activeText.style.transform = 'translateY(0)';
                }, 50);
                }
                }
                },
              });

              var swiper_train = new Swiper(".mySwiper_train", {
            slidesPerView: "auto",
            spaceBetween: 20,
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            }
            });
</script>

</html>
