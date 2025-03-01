@props(['active'])

@php
$classes = ($active ?? false)
            ?
            "
            relative
            before:content-['']
            before:absolute
            before:bottom-[-20%]
            before:left-0
            before:right-0
            before:w-full
            before:h-[2px]
            before:bg-[#ffa828]
            before:scale-x-[1]
            before:origin-bottom-left
            before:transition-all
            before:duration-[500ms]
            before:ease-in-out
            text-[16px]
            font-semibold
            "
            :
            "
            relative
            before:content-['']
            before:absolute
            before:bottom-[-20%]
            before:left-0
            before:right-0
            before:w-full
            before:h-[2px]
            before:bg-[#ffa828]
            before:scale-x-0
            before:origin-bottom-right
            before:transition-all
            before:duration-[500ms]
            before:ease-in-out
            before:hover:scale-x-[1]
            before:hover:origin-bottom-left
            text-[16px]
            font-semibold
            "
            ;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
