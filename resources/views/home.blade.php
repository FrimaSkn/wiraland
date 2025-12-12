@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <section class="banner_slider splide w-full" aria-label="Basic Structure Example">
        <div class="splide__track">
            <ul class="splide__list flex">
                @foreach ($homeContent->banner as $banner)
                    <li class="splide__slide">
                        <img class="w-full aspect-[19/8] object-cover" src="{{ Storage::disk('public_pages')->url($banner['image']) }}" alt="">
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <x-circular />

    <section class="pt-20 lg:pt-60 pb-20 container space-y-6">
        <h3 class="text-center text-primary text-lg lg:text-[2.7rem] font-bold leading-tight">{{ $homeContent->section_one_title }}</h3>
        <p class="text-center">{{ nl2br($homeContent->section_one_desc) }}</p>
        <video class="w-full aspect-video" controls>
            <source src="{{ Storage::disk('public_pages')->url($homeContent->section_one_video) }}" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
        </video>
    </section>

    <section class="grid grid-cols-3">
        @foreach ($homeContent->services as $service)
            <div class="w-full aspect-[9/10] bg-center bg-cover flex items-center justify-center" style="background-image: url('{{ Storage::disk('public_pages')->url($service['image']) }}')">
                <h3 class="text-center text-white text-xs lg:text-3xl font-bold">{{ strtoupper($service['text']) }}</h3>
            </div>
        @endforeach
    </section>

    <section class="container pb-20">
        <h3 class="section-title text-center text-underline">Partner Kami</h3>
        <div class="partner_slider splide">
            <div class="splide__track">
                <ul class="splide__list flex">
                    @foreach ($clients as $client)
                        <li class="splide__slide flex items-center justify-center p-2">
                            <img src="{{ $client->getFirstMediaUrl('partner_logo') }}" alt="{{ $client->name }}">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <x-direktur />

    <section class="container pb-20">
        <livewire:home-portfolio />
    </section>

    <x-success-story page="home" />

    <section class="container pb-20">
        <h3 class="section-title text-center text-underline">Artikel</h3>
        <div class="grid lg:grid-cols-3 gap-6">
            @for ($i = 0; $i < 3; $i++)
                <div class="space-y-3">
                    <img class="w-full h-auto aspect-video" src="{{ asset('assets/images/banner.png') }}" alt="">
                    <h2 class="font-bold text-primary leading-4">Judul Artikel</h2>
                    <p class="leading-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                </div>
            @endfor
        </div>
        <div class="flex justify-center mt-10">
            <a href="{{ route('article.index') }}" class="px-2.5 py-0.5 text-sm rounded-full bg-secondary hover:bg-primary uppercase font-medium hover:text-white">Lihat Semua Artikel</a>
        </div>
    </section>

    <section class="bg-center bg-cover pb-20" style="background-image: url('{{ asset('assets/images/bg-testimonial.jpg') }}')">
        <div class="container">
            <h3 class="section-title text-center text-underline primary">Testimonial</h3>
            <div class="bg-white py-3 lg:py-6 px-6 lg:px-16 rounded-3xl">
                <div class="py-4 lg:py-10"><x-star class="fill-secondary"/></div>
                <p class="text-center lg:text-xl lg:leading-loose">“PT Wira Land Sketsa telah memberikan pelayanan yang sangat profesional dalam penataan landscape. Mulai dari perencanaan hingga hasil akhir, semuanya dikerjakan dengan detail, rapi, dan sesuai kebutuhan kami. Hasilnya tidak hanya mempercantik area, tetapi juga meningkatkan nilai properti. Kami sangat mengapresiasi dedikasi dan kualitas kerja tim Wira Land Sketsa.”</p>
                <div class="text-center text-xl mt-8"><span class="text-primary font-bold">Jonathan Doe,</span> Direktur Sarinah Indonesia</div>
            </div>
        </div>
    </section>

    <section class="relative">
        <h3 class="section-title max-lg:py-8 max-lg:text-xs !text-white w-full text-center absolute top-0 left-1/2 -translate-x-1/2 text-underline">{{ $homeContent->section_image[0]['title'] }}</h3>
        <img class="w-full h-auto object-center" src="{{ Storage::disk('public_pages')->url($homeContent->section_image[0]['bg_image']) }}" alt="{{ config('app.name') }}">
    </section>

    <x-section-contact />
@endsection
