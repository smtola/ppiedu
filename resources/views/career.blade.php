@extends('layouts.guest')
@section('banner')
    <img src="{{ $url }}" alt="banner" class="w-full h-auto object-cover object-center">
@endsection
@section('content')
    <section class="w-full px-5 2xl:px-0 my-[2rem] md:max-w-screen-2xl mx-auto overflow-hidden">
        <div class="p-5">
            <h1 class="text-2xl font-bold text-rose-600 sm:text-3xl">
                ធ្វើការជាមួយយើង
            </h1>
            <p class="mt-4 leading-relaxed text-gray-700">
                នៅម្នាក់ឯង យើងអាចធ្វើបានតិចតួចណាស់ រួមគ្នាយើងអាចធ្វើបានច្រើន។
            </p>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-[1em] md:gap-[3em] 2xl:gap-[2em] my-3">
            @foreach ($careers as $index => $career)
                <article
                    class="max-w-[350px] lg:max-w-[460px] xl:max-w-[370px] 2xl:max-w-[350px]  overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                    <img alt="" src=" {{ $careerMediaUrls[$index] }}" class="h-56 w-full object-cover" />

                    <div class="bg-white p-4 sm:p-6">
                        <h3 class="mt-0.5 text-lg text-gray-900">{{ $career->title }}​</h3>

                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                            {{ $career->captions }}
                        </p>

                        <button onclick="openApplicationForm('{{ $career->title }}')"
                            class="mt-4 px-4 py-2 bg-rose-600 text-white rounded hover:bg-rose-700 transition">
                            ដាក់ពាក្យ
                        </button>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Application Form Modal -->
        <div id="applicationModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full z-[999]">
            <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                <div class="mt-3">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">ដាក់ពាក្យសំរាប់ការងារ</h3>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('career.apply') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-4">
                        @csrf
                        <input type="hidden" name="position" id="position">

                        <div>
                            <label class="block text-sm font-medium text-gray-700">ឈ្មោះ</label>
                            <input type="text" name="name" required
                                class="mt-1 px-1 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-rose-500 focus:ring-rose-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">អ៊ីមែល</label>
                            <input type="email" name="email" required
                                class="mt-1 px-1 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-rose-500 focus:ring-rose-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">លេខទូរស័ព្ទ</label>
                            <input type="tel" name="phone" required
                                class="mt-1 px-1 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-rose-500 focus:ring-rose-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">សារ</label>
                            <textarea name="message" required rows="4"
                                class="mt-1 px-1 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-rose-500 focus:ring-rose-500"></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">ឯកសារ CV</label>
                            <input type="file" name="resume" required accept=".pdf,.doc,.docx"
                                class="mt-1 px-1 block w-full">
                        </div>

                        <div class="flex justify-end space-x-3">
                            <button type="button" onclick="closeApplicationForm()"
                                class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">
                                បោះបង់
                            </button>
                            <button type="submit"
                                class="px-4 py-2 bg-rose-600 text-white rounded hover:bg-rose-700 transition">
                                ដាក់ពាក្យ
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        function openApplicationForm(position) {
            document.getElementById('position').value = position;
            document.getElementById('applicationModal').classList.remove('hidden');
        }

        function closeApplicationForm() {
            document.getElementById('applicationModal').classList.add('hidden');
        }
    </script>
@endsection
