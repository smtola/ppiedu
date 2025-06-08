@extends('layouts.guest')

@section('content')
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <h2 class="mt-4 text-2xl font-bold text-[#8f4440]">ជោគជ័យ!</h2>
                                <p class="mt-2 text-gray-600">ការចុះឈ្មោះរបស់អ្នកត្រូវបានទទួលជោគជ័យ។
                                    យើងនឹងទាក់ទងអ្នកឆាប់ៗនេះ។</p>
                                <div class="mt-6">
                                    <a href="{{ route('home') }}" class="text-[#8f4440] hover:text-[#7a3935]">
                                        ត្រឡប់ទៅទំព័រដើម
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
