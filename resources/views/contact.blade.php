@extends('layouts.guest')
@section('banner')
    <img src="{{ $url }}" alt="banner" class="w-full h-auto object-cover object-center">
@endsection
@section('content')
    <section class="w-full px-3 md:px-4 my-[2rem] overflow-hidden">
        <div class="columns-2 xl:columns-5 gap-[5vw] md:gap-[1vw] my-3 space-y-4">
            @foreach ($contacts as $idx => $contact)
                <button id="button"
                    onclick="updateModal('{{ $contact->department }}', `{!! $contact->contact !!}`, '{{ $contact->slug }}')"
                    value="{{ $contact->slug }}"
                    class="group flex flex-col items-center justify-start gap-1 w-full h-full max-w-[40vh] mx-auto rounded-xl">
                    <img src="{{ $contactMediaUrls[$idx] }}" alt="{{ $contact->department }}"
                        class="group-hover:scale-x-[1] group-hover:translate-y-[-1%] w-full h-full object-cover object-center transition-all duration-300 rounded-xl">
                    <h1
                        class="group-hover:underline text-[14px] text-center md:text-[16px] 2xl:text-[20px] font-bold text-[#050080] text-pretty transition-all duration-300">
                        {{ $contact->department }}
                    </h1>
                </button>
            @endforeach
        </div>
    </section>

    <dialog id="my_modal_3" class="modal">
        <div class="modal-box p-10 rounded-3xl">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold flex items-center gap-2">
                <b class="text-[#7f3636]" id="modal-department"></b>
                <svg class="animate-pulse transition-all duration-500 ease-linear" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" fill="none" stroke="#7f3636" stroke-linecap="round" stroke-linejoin="round"
                    width="24" height="24" stroke-width="1">
                    <path d="M20 4l-2 2"></path>
                    <path d="M22 10.5l-2.5 -.5"></path>
                    <path d="M13.5 2l.5 2.5"></path>
                    <path
                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2c-8.072 -.49 -14.51 -6.928 -15 -15a2 2 0 0 1 2 -2">
                    </path>
                </svg>
            </h3>
            <div class="py-4 text-[#050080] text-pretty" id="modal-content">
            </div>
        </div>
    </dialog>

    <script>
        function updateModal(department, content, slug) {
            document.getElementById('modal-department').textContent = department;
            document.getElementById('modal-content').innerHTML = content;
            my_modal_3.showModal();
            history.pushState({}, '', '{{ url('contact') }}?department=' + slug);
        }
    </script>
@endsection
