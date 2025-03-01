<nav x-data="{open:false}" class="group sticky top-0 z-50 overflow-hidden">
    <div class="bg-[#7f3636] flex justify-between  items-start md:items-center md:gap-[2vw] p-5 w-full  transition-all duration-500 ease-in-out">
        <ul :class="{'max-sm:visible max-sm:h-full':open, 'max-sm:invisible max-sm:h-[2vh]': ! open}" class="max-sm:mt-3 flex flex-col md:flex-row md:justify-center md:items-center gap-[3vw] md:gap-[2vw] text-[#ffffff]">
            <li :class="{'max-sm:translate-y-0':open, 'max-sm:translate-y-[-11000%]': ! open}" class="transition-all duration-[500ms] ease-in-out">
                <x-nav-link-guest :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('ទំព័រដើម') }}
                </x-nav-link-guest>
            </li>
            <li :class="{'max-sm:translate-y-0':open, 'max-sm:translate-y-[-10000%]': ! open}" class="transition-all duration-[500ms] ease-in-out">
                <x-nav-link-guest :href="route('aboutus')" :active="request()->routeIs('aboutus')">
                    {{ __('អំពីវិទ្យាស្ថាន') }}
                </x-nav-link-guest>
            </li>
            <li :class="{'max-sm:translate-y-0':open, 'max-sm:translate-y-[-8000%]': ! open}" class="transition-all duration-[500ms] ease-in-out">
                <x-nav-link-guest :href="route('training')" :active="request()->routeIs('training')">
                    {{ __('វគ្គបណ្តុះបណ្តាល') }}
                </x-nav-link-guest>
            </li>
            <li x-data="{isDropdown:false}" :class="{'max-sm:translate-y-0':open, 'max-sm:translate-y-[-6000%]': ! open}" class="transition-all duration-[500ms] ease-in-out">
                <label class="swap swap-rotate relative {{ request()->routeIs('faculty.datail') ? 'before:scale-x-[1] before:origin-bottom-left' : '' }}
                  before:content-[''] before:absolute before:bottom-[-20%] before:left-0 before:right-0 before:w-full before:h-[2px] before:bg-[#ffa828] before:scale-x-0 before:origin-bottom-right before:transition-all before:duration-[500ms] before:ease-in-out before:hover:scale-[1] before:hover:origin-bottom-left
                  text-[16px] font-semibold">
                  <p>មហាវិទ្យាល័យ</p>
                   <input @click="isDropdown = ! isDropdown" type="checkbox" class="hidden" />
                    <svg class="ml-[110%] swap-off md:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" width="24" height="24" stroke-width="2">
                        <path d="M6 9l6 6l6 -6"></path>
                    </svg>
                    <svg class="ml-[110%] swap-on md:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" width="24" height="24" stroke-width="2">
                        <path d="M6 15l6 -6l6 6"></path>
                    </svg>
                </label>
                <ul :class="{'block':isDropdown, 'hidden': ! isDropdown}" class="md:hidden ml-5 my-4">
                    <li class="py-1">
                        <x-nav-link-guest>
                            {{ __('បច្ចេកវិទ្យា') }}
                        </x-nav-link-guest>
                    </li>
                    <li class="py-1">
                        <x-nav-link-guest>
                            {{ __('បច្ចេកវិទ្យា') }}
                        </x-nav-link-guest>
                    </li>
                </ul>
            </li>
            <li :class="{'max-sm:translate-y-0':open, 'max-sm:translate-y-[-4000%]': ! open}"
                class="transition-all duration-[500ms] ease-in-out">
                <x-nav-link-guest :href="route('contact')" :active="request()->routeIs('contact')">
                    {{ __('ទំនាក់ទំនង') }}
                </x-nav-link-guest>
            </li>
            <li :class="{'max-sm:translate-y-0':open, 'max-sm:translate-y-[-4000%]': ! open}" class="transition-all duration-[500ms] ease-in-out">
                <x-nav-link-guest :href="route('lap')" :active="request()->routeIs('lap')">
                    {{ __('បណ្ណាល័យ') }}
                </x-nav-link-guest>
            </li>
            <li :class="{'max-sm:translate-y-0':open, 'max-sm:translate-y-[-2000%]': ! open}" class="transition-all duration-[500ms] ease-in-out">
                <x-nav-link-guest :href="route('career')" :active="request()->routeIs('career')">
                    {{ __('ឪកាសការងារ') }}
                </x-nav-link-guest>
            </li>
            {{-- <li :class="{'max-sm:translate-y-0':open, 'max-sm:translate-y-[-1000%]': ! open}" class="transition-all duration-[500ms] ease-in-out">
                <a class="
                relative before:content-[''] before:absolute before:bottom-[-20%] before:left-0 before:right-0 before:w-full before:h-[2px] before:bg-[#ffa828] before:scale-x-0 before:origin-bottom-right before:transition-all before:duration-[500ms] before:ease-in-out before:hover:scale-[1] before:hover:origin-bottom-left
                text-[16px] font-semibold" href="">ដៃគូសហប្រតិបត្តិការ</a>
            </li> --}}
        </ul>

        <label class="md:hidden swap swap-rotate">
            <!-- this hidden checkbox controls the state -->
            <input @click="open = ! open" type="checkbox" class="hidden" />

            <!-- hamburger icon -->
            <svg class="swap-off fill-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
            </svg>

            <!-- close icon -->
            <svg class="swap-on fill-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                <polygon
                    points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
            </svg>
        </label>
            <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
                <flux:radio value="light" icon="sun" />
                <flux:radio value="dark" icon="moon" />
                <flux:radio value="system" icon="computer-desktop" />
            </flux:radio.group>
    </div>
    {{-- @component('components.ppi-dropdown')
    @endcomponent --}}

</nav>

