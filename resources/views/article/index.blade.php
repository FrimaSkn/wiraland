@extends('layouts.app')
@section('title', 'Artikel')
@section('content')
<x-banner-hero image="{{ asset('assets/images/about-banner.jpg') }}" />

<h3 class="section-title text-center text-underline">Artikel</h3>
<x-grid-paragraf title="Baca artikel terbaru kami"
    desc="Kami berbagi cerita, wawasan, dan inspirasi seputar desain lanskap, arsitektur, serta proses kreatif di balik setiap proyek kami." />

<section class="my-20 container">
    <div class="grid grid-cols-3 gap-x-10 gap-y-20">
        @for ($i = 0; $i < 6; $i++)
            <div class="col-span-1 space-y-5">
                <div class="w-full aspect-square rounded-4xl bg-gray-200"></div>
                <h2 class="text-lg text-primary font-bold">title artikel judul artikel</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id earum commodi reiciendis sequi temporibus tempora non,</p>
                <a href="#" class="text-sm font-medium hover:text-white hover:bg-primary transition-colors duration-300 bg-secondary px-4 py-2 rounded-full">Selengkapnya</a>
            </div>
        @endfor
    </div>
</section>

<x-section-contact />

@endsection
