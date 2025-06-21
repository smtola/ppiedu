@extends('layouts.guest')
@section('banner')
    @if ($url)
        <img src="{{ $url }}" alt="banner" class="w-full h-auto object-cover object-center">
    @else
        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
            <p class="text-gray-500">No banner image available</p>
        </div>
    @endif
@endsection
@section('content')
    @if ($error)
        <div class="w-full max-w-screen-xl mx-auto px-5 2xl:px-0 mt-8">
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error: </strong>
                <span class="block sm:inline">{{ $error }}</span>
            </div>
        </div>
    @endif

    @if ($lib_dep->isEmpty())
        <div class="w-full max-w-screen-xl mx-auto px-5 2xl:px-0 mt-8">
            <div class="bg-yellow-50 border border-yellow-200 text-yellow-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">No library categories available.</span>
            </div>
        </div>
    @endif

    @foreach ($lib_dep as $lapIndex => $lap)
        @php
            $sliderId = "keen-slider-$lapIndex";
            $prevBtnId = "keen-slider-prev-$lapIndex";
            $nextBtnId = "keen-slider-next-$lapIndex";
            $hasItems = $libaries->where('library_category_id', $lap->id)->count() > 0;
        @endphp
        <section class="w-full mt-8 max-w-screen-xl mx-auto overflow-hidden px-5 2xl:px-0">
            <header class="flex justify-between items-center p-3">
                <h2 class="text-xl font-medium md:text-2xl text-[#e9ad31] lg:text-3xl">
                    {{ $lap->name }}
                </h2>
                @if ($hasItems)
                    <div class="hidden md:flex gap-4">
                        <button aria-label="Previous slide" id="{{ $prevBtnId }}"
                            class="rounded-full border border-[#7f3636] p-3 text-[#7f3636] transition hover:bg-[#7f3636] hover:text-[#e9ad31]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:rotate-180" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                        <button aria-label="Next slide" id="{{ $nextBtnId }}"
                            class="rounded-full border border-[#7f3636] p-3 text-[#7f3636] transition hover:bg-[#7f3636] hover:text-[#e9ad31]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:rotate-180" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                @endif
            </header>

            <div class="mt-8 w-full">
                @if ($hasItems)
                    <div id="{{ $sliderId }}" class="keen-slider">
                        @foreach ($libaries as $index => $item)
                            @if ($item->library_category_id === $lap->id)
                                <div class="keen-slider__slide">
                                    <button
                                        onclick="openModal({{ $item->id }}, '{{ $item->name }}', '{{ $item->description ?? '' }}', '{{ $item->subjects->pluck('name')->join(', ') }}', '{{ $item->category->name ?? '' }}', '{{ $item->subjects->pluck('link')->join(', ') }}', '{{ $item->subjects->pluck('attachment')->join(', ') }}')"
                                        class="w-full">
                                        <div class="flex flex-col items-center gap-2 group">
                                            <div
                                                class="w-full h-[30vh] bg-gray-300 rounded-md overflow-hidden transition-all duration-300 group-hover:scale-105 drop-shadow-sm">
                                                @if (isset($libaryMediaUrls[$item->id]))
                                                    <img src="{{ $libaryMediaUrls[$item->id] }}"
                                                        class="w-full h-[30vh] object-contain object-center">
                                                @else
                                                    <div class="w-full h-full flex items-center justify-center bg-gray-200">
                                                        <span class="text-gray-500">No image available</span>
                                                    </div>
                                                @endif
                                            </div>
                                            <h1 class="text-sm md:text-base text-[#050080] group-hover:underline">
                                                {{ $item->name }}</h1>
                                        </div>
                                    </button>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @else
                    <div class="bg-gray-50 rounded-lg p-4 text-center">
                        <p class="text-gray-500">No items available in this category.</p>
                    </div>
                @endif
            </div>
        </section>

        @if ($hasItems)
            <script type="module">
                import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

                const slider{{ $lapIndex }} = new KeenSlider("#{{ $sliderId }}", {
                    loop: true,
                    slides: {
                        origin: "auto",
                        perView: 1,
                        spacing: 20,
                    },
                    breakpoints: {
                        "(min-width: 768px)": {
                            slides: {
                                origin: "auto",
                                perView: 2.5,
                                spacing: 24
                            },
                        },
                        "(min-width: 1024px)": {
                            slides: {
                                origin: "auto",
                                perView: 3,
                                spacing: 26
                            },
                        },
                        "(min-width: 1280px)": {
                            slides: {
                                origin: "auto",
                                perView: 5.5,
                                spacing: 32
                            },
                        },
                    },
                })

                document.getElementById("{{ $prevBtnId }}").addEventListener("click", () => slider{{ $lapIndex }}.prev())
                document.getElementById("{{ $nextBtnId }}").addEventListener("click", () => slider{{ $lapIndex }}.next())
            </script>
        @endif
    @endforeach

    <!-- Modal -->
    <div id="libraryModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
            <div class="flex justify-between items-start mb-4">
                <div class="flex-1">
                    <h3 id="modalTitle" class="text-2xl font-semibold text-[#050080]"></h3>
                    <div class="mt-2 space-y-1">
                        <div id="modalSubject" class="text-sm text-gray-600">
                            <!-- Links will be dynamically added here -->
                        </div>
                        <p id="modalDepartment" class="text-sm text-gray-600"></p>
                    </div>
                </div>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div id="modalContent" class="space-y-4">
            </div>
        </div>
    </div>

    <script>
        function openModal(id, name, description, subjects, department, subjectLinks,subjectAttachment) {
            const modal = document.getElementById('libraryModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalSubject = document.getElementById('modalSubject');
            const modalDepartment = document.getElementById('modalDepartment');
            const modalLinks = document.getElementById('modalLinks');

            modalTitle.textContent = name || 'No title available';
            modalSubject.innerHTML = ''; // Clear previous content

            // Then handle the links if they exist
            if (subjectLinks && subjects) {
                const links = subjectLinks.split(',').map(link => link.trim());
                const attachments = subjectAttachment.split(',').map(attachment => attachment.trim());
                const subjectArray = subjects.split(',').map(subject => subject.trim());
                
                
                // Create a map of unique subjects with their corresponding links and attachments
                const subjectLinkMap = new Map();
                subjectArray.forEach((subject, index) => {
                    if (subject) {
                        const link = links[index] || null;
                        const attachment = attachments[index] || null;
                        subjectLinkMap.set(subject, {
                            link,
                            attachment
                        });
                    }
                });

                // Create links for each unique subject
                subjectLinkMap.forEach((data, subject) => {
                    const linkElement = document.createElement('a');
                    linkElement.href = data.link || `${data.attachment}`;
                    linkElement.target = '_blank';
                    
                    // Style based on category
                    if (department === 'បណ្ណាល័យ') {
                        // PDF files styling
                        linkElement.className =
                            'flex items-center p-2 bg-white rounded-lg border border-gray-200 hover:bg-gray-50 transition shadow-sm mb-2 cursor-pointer';
                        linkElement.innerHTML = `
                            <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-900">${subject}</span>
                        `;
                        // Add click handler for PDF files
                       linkElement.addEventListener('click', (e) => {
                            e.preventDefault();
                            if (data.attachment) {
                                window.open(`/storage/${data.attachment}`, '_blank');
                            }
                        });
                    } else if (department === 'បណ្ណាល័យ Online') {
                        // Online links styling
                        linkElement.className =
                            'flex items-center p-2 bg-white rounded-lg border border-gray-200 hover:bg-gray-50 transition shadow-sm mb-2 cursor-pointer';
                        linkElement.innerHTML = `
                            <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            <span class="text-gray-900">${subject}</span>
                        `;
                        // Add click handler for online links
                        linkElement.addEventListener('click', (e) => {
                            e.preventDefault();
                            if (data.link) {
                                window.open(data.link, '_blank');
                            }
                        });
                    } else {
                        // Default styling
                        linkElement.className = 'block text-blue-600 hover:underline mb-1 cursor-pointer';
                        linkElement.textContent = subject;
                    }

                    modalSubject.appendChild(linkElement);
                });
            }
            modalDepartment.textContent = department ? `Department: ${department}` : 'Department: Not specified';

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('libraryModal');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('libraryModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
@endsection
