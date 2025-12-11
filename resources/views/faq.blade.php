@extends('layouts.app')
@section('title', 'FAQ')
@section('content')
<x-banner-hero image="{{ Storage::disk('public_pages')->url($banner) }}" />

<section class="container mb-20">
    <h3 class="section-title text-center text-underline">FAQ</h3>

    <div x-data="{selected:1}">
        <ul class="shadow-box *:pb-4">
            <li class="relative">
                <button type="button" class="w-full px-4 py-2 md:px-8 md:py-6 text-left border-l-8 border-l-primary border-y-gray-200 border-y border-r-gray-200 border-r"
                    @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="flex items-center justify-between gap-3">
                        <span class="text-primary font-bold">
                            Should I use reCAPTCHA v2 or v3? </span>
                        <span class="ico-plus"><img class="size-8" src="{{ asset('assets/svg/icon-plus.svg') }}"></span>
                    </div>
                </button>

                <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-secondary rounded-b-3xl" style=""
                    x-ref="container1"
                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="p-4 md:p-8">
                        <p>reCAPTCHA v2 is not going away! We will continue to fully support and improve security
                            and usability for v2.</p>
                        <p>reCAPTCHA v3 is intended for power users, site owners that want more data about their
                            traffic, and for use cases in which it is not appropriate to show a challenge to the
                            user.</p>
                        <p>For example, a registration page might still use reCAPTCHA v2 for a higher-friction
                            challenge, whereas more common actions like sign-in, searches, comments, or voting might
                            use reCAPTCHA v3. To see more details, see the reCAPTCHA v3 developer guide.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="mt-8 md:mt-14 flex flex-col items-center gap-6 justify-center">
        <h3 class="text-lg md:text-xl lg:text-3xl font-bold text-center text-primary">Masih punya pertanyaan?</h3>
        <a href="{{ route('contact.index', '#contact-form') }}" class="px-5 py-2 text-base md:text-lg rounded-full bg-secondary hover:bg-primary font-medium hover:text-white mx-auto">Hubungi kami sekarang</a>
    </div>
</section>

<x-section-contact />

@endsection
