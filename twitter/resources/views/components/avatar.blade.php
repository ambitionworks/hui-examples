@props(['text' => 'text-gray-400', 'bg' => 'bg-gray-800', 'size' => [12, 8]])

@php
    abort_if(!is_array($size) && count($size) !== 2, 500)
@endphp

{{-- <div class="flex items-center justify-center h-{{ $size[0] }} w-{{ $size[0] }} rounded-full{{ $text ? ' '.$text : '' }}{{ $bg ? ' '.$bg : ''}}">
    <svg class="h-{{ $size[1] }} w-{{ $size[1] }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
    </svg>
</div> --}}
<img src="http://lorempixel.com/480/480/people/{{ rand(1, 10) }}" class="h-{{ $size[0] }} w-{{ $size[0] }} rounded-full" alt="">