<section class="hidden translate-y-[40%] scale-[.9] h-[0] invisible opacity-0
group-hover:translate-y-0 group-hover:scale-[1] group-hover:h-auto group-hover:visible group-hover:opacity-100
mx-5 bg-[#ffffff] w-full max-w-screen-lg overflow-hidden shadow-xl md:grid md:grid-cols-3 transition-all duration-[150ms] ease-in-out">
    <img alt=""
        src="{{ asset('assets/images/banner-aboutus.png') }}"
        class="h-32 w-full object-center object-cover md:h-full" />

    <div class="p-4 sm:p-6 md:col-span-2 lg:p-8">
        <ul class="flex flex-wrap justify-center gap-[1vw] text-[#7f3636] font-medium ">
            <li>
                <x-nav-link-guest :href="route('faculty.datail')" :active="request()->routeIs('faculty.datail')">
                    {{ __('Information Technology') }}
                </x-nav-link-guest>
            </li>
        </ul>
    </div>
</section>
