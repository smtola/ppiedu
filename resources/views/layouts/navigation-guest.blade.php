<nav x-data="{ open: false }" class="sticky top-0 z-50">
    <div
        class="bg-[#7f3636] flex justify-center xl:justify-between items-start md:items-center md:gap-[2vw] p-4 md:p-5 w-full transition-all duration-500 ease-in-out">
        <ul :class="{
            'max-sm:visible max-sm:opacity-100 max-sm:translate-y-0': open,
            'max-sm:invisible max-sm:opacity-0 max-sm:translate-y-[-100%]':
                !open
        }"
            class="max-sm:absolute max-sm:top-full max-sm:left-0 max-sm:right-0 max-sm:bg-[#7f3636] max-sm:py-4 max-sm:px-6 max-sm:shadow-lg flex flex-col md:flex-row md:justify-center md:items-center gap-3 md:gap-[2vw] text-[#ffffff] transition-all duration-300 ease-in-out">
            <li class="transition-all duration-300 ease-in-out">
                <x-nav-link-guest :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('ទំព័រដើម') }}
                </x-nav-link-guest>
            </li>
            <li class="transition-all duration-300 ease-in-out">
                <x-nav-link-guest :href="route('aboutus')" :active="request()->routeIs('aboutus')">
                    {{ __('អំពីវិទ្យាស្ថាន') }}
                </x-nav-link-guest>
            </li>
            <li class="transition-all duration-300 ease-in-out">
                <x-nav-link-guest :href="route('training')" :active="request()->routeIs('training')">
                    {{ __('វគ្គបណ្តុះបណ្តាល') }}
                </x-nav-link-guest>
            </li>
            <li x-data="{ isDropdown: false }" class="relative transition-all duration-300 ease-in-out">
                <button @click="isDropdown = !isDropdown"
                    class="flex items-center gap-2 text-[16px] font-semibold text-white group relative w-full">
                    មហាវិទ្យាល័យ
                    <!-- Arrow Icon -->
                    <svg :class="{ 'rotate-180': isDropdown }" class="w-4 h-4 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                @include('components.ppi-dropdown')
            </li>
            <li class="transition-all duration-300 ease-in-out">
                <x-nav-link-guest :href="route('news')" :active="request()->routeIs('news')">
                    {{ __('ព្រឹត្តិការណ៍ថ្មីៗ') }}
                </x-nav-link-guest>
            </li>
            <li class="transition-all duration-300 ease-in-out">
                <x-nav-link-guest :href="route('contact')" :active="request()->routeIs('contact')">
                    {{ __('ទំនាក់ទំនង') }}
                </x-nav-link-guest>
            </li>
            <li class="transition-all duration-300 ease-in-out">
                <x-nav-link-guest :href="route('lap')" :active="request()->routeIs('lap')">
                    {{ __('បណ្ណាល័យ') }}
                </x-nav-link-guest>
            </li>
            <li class="transition-all duration-300 ease-in-out">
                <x-nav-link-guest :href="route('career')" :active="request()->routeIs('career')">
                    {{ __('ឪកាសការងារ') }}
                </x-nav-link-guest>
            </li>
        </ul>

        <label class="md:hidden swap swap-rotate relative z-50">
            <!-- this hidden checkbox controls the state -->
            <input @click="open = ! open" type="checkbox" class="hidden" />

            <!-- hamburger icon -->
            <svg class="swap-off fill-white w-8 h-8 transition-transform duration-300 hover:scale-110"
                xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
            </svg>
        </label>
    </div>
</nav>
