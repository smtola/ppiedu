@extends('layouts.guest')

@section('content')
    <div class="w-full min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12 overflow-hidden">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative w-full px-4 py-10 bg-white mx-1 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="w-full max-w-md mx-auto">
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <h2 class="text-2xl font-bold mb-8 text-center text-[#8f4440]">ចុះឈ្មោះតាមប្រព័ន្ធ Online</h2>

                            <form action="{{ route('registration.store') }}" method="POST" class="space-y-6">
                                @csrf

                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">ឈ្មោះ</label>
                                    <input type="text" name="name" id="name" required
                                        class="mt-1 px-1 py-2  block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8f4440] focus:ring-[#8f4440]">
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">អ៊ីមែល</label>
                                    <input type="email" name="email" id="email" required
                                        class="mt-1 px-1 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8f4440] focus:ring-[#8f4440]">
                                </div>

                                <div>
                                    <label for="phone_number"
                                        class="block text-sm font-medium text-gray-700">លេខទូរស័ព្ទ</label>
                                    <input type="tel" name="phone_number" id="phone_number" required
                                        class="mt-1 px-1 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8f4440] focus:ring-[#8f4440]">
                                </div>

                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700">អាសយដ្ឋាន</label>
                                    <input type="text" name="address" id="address" required
                                        class="mt-1 px-1 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8f4440] focus:ring-[#8f4440]">
                                </div>

                                <div>
                                    <label for="faculty"
                                        class="block text-sm font-medium text-gray-700">មហាវិទ្យាល័យ</label>
                                    <select name="faculty" id="faculty" required
                                        class="mt-1 px-1 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8f4440] focus:ring-[#8f4440]">
                                        <option value="">ជ្រើសរើសមហាវិទ្យាល័យ</option>
                                        @foreach ($faculties as $faculty)
                                            <option value="{{ $faculty->name }}">{{ $faculty->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label for="class" class="block text-sm font-medium text-gray-700">ថ្នាក់</label>
                                    <select name="class" id="class" required
                                        class="mt-1 px-1 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8f4440] focus:ring-[#8f4440]">
                                        <option value="">ជ្រើសរើសថ្នាក់</option>
                                        @foreach ($classes as $class)
                                            <option value="{{ $class->name }}">{{ $class->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label for="notes" class="block text-sm font-medium text-gray-700">ចំណាំ</label>
                                    <textarea name="notes" id="notes" rows="3"
                                        class="mt-1 px-1 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8f4440] focus:ring-[#8f4440]"></textarea>
                                </div>

                                <div class="pt-5">
                                    <button type="submit"
                                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#8f4440] hover:bg-[#7a3935] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#8f4440]">
                                        បញ្ជូន
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
