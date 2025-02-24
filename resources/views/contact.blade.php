<x-guest-layout>
    <section class="w-full px-3 2xl:px-0 my-[2rem] md:max-w-screen-md mx-auto overflow-hidden">
        <div class="flex flex-wrap items-start justify-center gap-[10vw] md:gap-[2vw] my-3">
            <button onclick="my_modal_3.showModal()" class="group flex flex-col items-center justify-start gap-1 w-full max-w-[16vh]">
                <img src="{{ asset('assets/images/infor_contact.png') }}" alt="information-contact"
                    class="group-hover:scale-x-[1] group-hover:translate-y-[-1%] w-full h-full object-cover object-center transition-all duration-300">
                <h1 class="group-hover:underline text-[12px] text-center md:text-[14px] 2xl:text-[16px] font-bold text-[#050080] text-pretty transition-all duration-300">
                    លេខទូរស័ព្ទផ្នែកផ្តល់ព័ត៌មាន
                </h1>
            </button>

            <button onclick="my_modal_3.showModal()"
                class="group flex flex-col items-center justify-start gap-1 w-full max-w-[16vh]">
                <img src="{{ asset('assets/images/infor_contact.png') }}" alt="information-contact"
                    class="group-hover:scale-x-[1] group-hover:translate-y-[-1%] w-full h-full object-cover object-center transition-all duration-300">
                <h1
                    class="group-hover:underline text-[12px] text-center md:text-[14px] 2xl:text-[16px] font-bold text-[#050080] text-pretty transition-all duration-300">
                    លេខទូរស័ព្ទផ្នែកផ្តល់ព័ត៌មាន
                </h1>
            </button>

            <button onclick="my_modal_3.showModal()"
                class="group flex flex-col items-center justify-start gap-1 w-full max-w-[16vh]">
                <img src="{{ asset('assets/images/infor_contact.png') }}" alt="information-contact"
                    class="group-hover:scale-x-[1] group-hover:translate-y-[-1%] w-full h-full object-cover object-center transition-all duration-300">
                <h1
                    class="group-hover:underline text-[12px] text-center md:text-[14px] 2xl:text-[16px] font-bold text-[#050080] text-pretty transition-all duration-300">
                    លេខទូរស័ព្ទផ្នែកផ្តល់ព័ត៌មាន
                </h1>
            </button>
        </div>
    </section>
    @component('components.modal-contact')
    @endcomponent
</x-guest-layout>
