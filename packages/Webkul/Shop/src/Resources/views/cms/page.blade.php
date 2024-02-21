{{-- SEO Meta Content --}}
@push('meta')
    <meta name="title" content="{{ $page->meta_title }}" />

    <meta name="description" content="{{ $page->meta_description }}" />

    <meta name="keywords" content="{{ $page->meta_keywords }}" />
@endPush

{{-- Page Layout --}}
<x-shop::layouts>
    {{-- Page Title --}}
    <x-slot:title>
        {{ $page->meta_title }}
    </x-slot>

    {{-- Page Content --}}
    <div class="">
    <div class="p-32 text-center font-bold text-4xl text-white bg-no-repeat bg-center bg-cover" style="background-image: url('https://reehalmadinah.com/storage/theme/10/6oRNvoIHZxTwdTvwJkffV5WgHwQHhgIl1V02cbho.webp');">
        {{ $page->page_title }}
    </div>
    <div class="p-12 container mt-[30px] px-[60px] max-lg:px-[30px] shadow-xl">
    {!! Blade::render($page->html_content) !!}
    </div>
    </div>
</x-shop::layouts>