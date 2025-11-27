@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <section class="banner_slider splide w-full" aria-label="Basic Structure Example">
        <div class="splide__track">
            <ul class="splide__list flex">
                @for ($i = 0; $i < 3; $i++)
                    <li class="splide__slide">
                        <img class="w-full aspect-[19/8] object-cover" src="{{ asset('assets/images/banner.png') }}" alt="">
                    </li>
                @endfor
            </ul>
        </div>
    </section>

    <x-circular />

    <section class="pt-60 pb-20 container space-y-6">
        <h3 class="text-center text-primary text-[2.7rem] font-bold leading-tight">Membangun hunian & ruang usaha yang bernilai tinggi bagi masa depan Anda.</h3>
        <p class="text-center">Wira Land Sketsa adalah perusahaan yang bergerak di bidang properti dan pengembangan lahan, berfokus pada menciptakan hunian dan ruang usaha yang inovatif, fungsional, serta bernilai investasi tinggi. Dengan komitmen pada kualitas dan ketepatan, Wira Land Sketsa hadir untuk menghadirkan solusi properti yang sesuai dengan kebutuhan pasar modern.</p>
        <img src="{{ asset('assets/images/img-video.jpg') }}" alt="">
    </section>

    <section class="grid grid-cols-3">
        <div class="w-full aspect-[9/10] bg-center bg-cover flex items-center justify-center" style="background-image: url('{{ asset('assets/images/img-01.jpg') }}')">
            <h3 class="text-center text-white text-3xl font-bold">PLANNING</h3>
        </div>
        <div class="w-full aspect-[9/10] bg-center bg-cover flex items-center justify-center" style="background-image: url('{{ asset('assets/images/img-02.jpg') }}')">
            <h3 class="text-center text-white text-3xl font-bold">CONSTRUCTION</h3>
        </div>
        <div class="w-full aspect-[9/10] bg-center bg-cover flex items-center justify-center" style="background-image: url('{{ asset('assets/images/img-03.jpg') }}')">
            <h3 class="text-center text-white text-3xl font-bold">MAINTENANCE</h3>
        </div>
    </section>

    <section class="container pb-20">
        <h3 class="section-title text-center text-underline">Partner Kami</h3>
        <div class="partner_slider splide">
            <div class="splide__track">
                <ul class="splide__list flex">
                    <li class="splide__slide flex items-center justify-center p-2">
                        <img src="{{ asset('assets/images/partner/logo-adhi.png') }}" alt="">
                    </li>
                    <li class="splide__slide flex items-center justify-center p-2">
                        <img src="{{ asset('assets/images/partner/logo-wika.png') }}" alt="">
                    </li>
                    <li class="splide__slide flex items-center justify-center p-2">
                        <img src="{{ asset('assets/images/partner/logo-nindya.png') }}" alt="">
                    </li>
                    <li class="splide__slide flex items-center justify-center p-2">
                        <img src="{{ asset('assets/images/partner/logo-pp.png') }}" alt="">
                    </li>
                    <li class="splide__slide flex items-center justify-center p-2">
                        <img src="{{ asset('assets/images/partner/logo-pupr.png') }}" alt="">
                    </li>
                    <li class="splide__slide flex items-center justify-center p-2">
                        <img src="{{ asset('assets/images/partner/logo-waskita.png') }}" alt="">
                    </li>
                    <li class="splide__slide flex items-center justify-center p-2">
                        <img src="{{ asset('assets/images/partner/logo-sarinah.png') }}" alt="">
                    </li>
                    <li class="splide__slide flex items-center justify-center p-2">
                        <img src="{{ asset('assets/images/partner/logo-g20.png') }}" alt="">
                    </li>
                    <li class="splide__slide flex items-center justify-center p-2">
                        <img src="{{ asset('assets/images/partner/logo-abipraya.png') }}" alt="">
                    </li>
                    <li class="splide__slide flex items-center justify-center p-2">
                        <img src="{{ asset('assets/images/partner/logo-nusantara.png') }}" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <x-direktur />

    <section class="container pb-20">
        <livewire:home-portfolio />
    </section>

    <x-success-story />


    <section class="container pb-20">
        <h3 class="section-title text-center text-underline">Artikel</h3>
        <div class="grid grid-cols-3 gap-6">
            @for ($i = 0; $i < 3; $i++)
                <div class="">
                    <img class="w-full h-auto aspect-video" src="{{ asset('assets/images/banner.png') }}" alt="">
                    <h2>Judul Artikel</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                </div>
            @endfor
        </div>
        <div class="flex justify-center mt-10">
            <a href="#" class="px-2.5 py-0.5 text-sm rounded-full bg-secondary hover:bg-primary uppercase font-medium hover:text-white">Lihat Semua Artikel</a>
        </div>
    </section>

    <section class="bg-center bg-cover pb-20" style="background-image: url('{{ asset('assets/images/bg-testimonial.jpg') }}')">
        <div class="container">
            <h3 class="section-title text-center text-underline primary">Testimonial</h3>
            <div class="bg-white py-6 px-16 rounded-3xl">
                <div class="py-10"><x-star /></div>
                <p class="text-center text-xl leading-loose">“PT Wira Land Sketsa telah memberikan pelayanan yang sangat profesional dalam penataan landscape. Mulai dari perencanaan hingga hasil akhir, semuanya dikerjakan dengan detail, rapi, dan sesuai kebutuhan kami. Hasilnya tidak hanya mempercantik area, tetapi juga meningkatkan nilai properti. Kami sangat mengapresiasi dedikasi dan kualitas kerja tim Wira Land Sketsa.”</p>
                <div class="text-center text-xl mt-8"><span class="text-primary font-bold">Jonathan Doe,</span> Direktur Sarinah Indonesia</div>
            </div>
        </div>
    </section>

    <section class="relative">
        <h3 class="section-title !text-white text-center absolute top-0 left-1/2 -translate-x-1/2 text-underline">Kami Siap Membantu Kebutuhan Landscaping Anda!</h3>
        <img class="w-full h-auto object-center" src="{{ asset('assets/images/img-05.jpg') }}" alt="{{ config('app.name') }}">
    </section>

    <x-section-contact />
@endsection
