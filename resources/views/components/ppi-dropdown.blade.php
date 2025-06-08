                <!-- Desktop Dropdown -->
                <ul x-show="isDropdown" x-transition class="absolute left-0 py-5 bg-white text-black rounded shadow-lg w-[30vh] hidden md:block z-40 space-y-4"
                    @click.away="isDropdown = false">
                    @foreach ($faculties as $link)
                        <li>
                            <x-nav-link-guest :href="route('faculty.show', $link->slug)" class="block px-4 py-1 hover:bg-[#ffa828] hover:text-white">
                                {{ $link->name }}
                            </x-nav-link-guest>
                        </li>
                    @endforeach
                </ul>

                <!-- Mobile Dropdown -->
                <ul x-show="isDropdown" x-transition class="md:hidden ml-4 py-5 space-y-1" @click.away="isDropdown = false">
                    @foreach ($faculties as $link)
                        <li>
                            <x-nav-link-guest :href="route('faculty.show', $link->slug)" class="block text-white">
                                {{ $link->name }}
                            </x-nav-link-guest>
                        </li>
                    @endforeach
                </ul>