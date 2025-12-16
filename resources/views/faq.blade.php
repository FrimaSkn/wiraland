@extends('layouts.app')
@section('title', 'FAQ')
@section('content')
<x-banner-hero image="{{ Storage::disk('public_pages')->url($banner) }}" />

<section class="container mb-20">
    <h3 class="section-title text-center text-underline">FAQ</h3>

    <div x-data="{selected:1}">
        @foreach ($faqs as $faq)
            <ul class="shadow-box *:pb-4">
                <li class="relative">
                    <button type="button" class="w-full px-4 py-2 md:px-8 md:py-6 text-left border-l-8 border-l-primary border-y-gray-200 border-y border-r-gray-200 border-r"
                        @click="selected !== {{ $faq->id }} ? selected = {{ $faq->id }} : selected = null">
                        <div class="flex items-center justify-between gap-3">
                            <span class="text-primary font-bold">
                                {{ $faq->question }}
                            </span>
                            <span class="ico-plus"><img class="size-8" src="{{ asset('assets/svg/icon-plus.svg') }}"></span>
                        </div>
                    </button>

                    <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-secondary rounded-b-3xl" style=""
                        x-bind:style="selected == {{ $faq->id }} ? 'max-height: ' + ($refs.container1.scrollHeight * 100) + 'px' : ''">
                        <div x-ref="container1" class="p-4 md:p-8">
                            {!! $faq->answer !!}
                        </div>
                    </div>
                </li>
            </ul>
        @endforeach
    </div>

    <div class="mt-8 md:mt-14 flex flex-col items-center gap-6 justify-center">
        <h3 class="text-lg md:text-xl lg:text-3xl font-bold text-center text-primary">Masih punya pertanyaan?</h3>
        <a href="{{ route('contact.index', '#contact-form') }}" class="px-5 py-2 text-base md:text-lg rounded-full bg-secondary hover:bg-primary font-medium hover:text-white mx-auto">Hubungi kami sekarang</a>
    </div>
</section>

<x-section-contact />

@endsection
