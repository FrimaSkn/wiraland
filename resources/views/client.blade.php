@extends('layouts.app')
@section('title', 'Klien')
@section('content')

    <x-banner-hero image="{{ asset('assets/images/banner-clients.jpg') }}" />

    <section class="container pb-20">
        <h3 class="section-title text-center text-underline">Partner Kami</h3>
        <p class="text-center">Kami bangga telah dipercaya oleh berbagai pengembang, arsitek, instansi, dan klien pribadi di seluruh Indonesia.
            Kerja sama ini menjadi bukti komitmen Wira Land Sketsa dalam menghadirkan lanskap yang fungsional, estetis, dan berkelanjutan.
        </p>
        <ul class="grid grid-cols-3 md:grid-cols-5">
            <li class="p-2">
                <img src="{{ asset('assets/images/partner/logo-adhi.png') }}" alt="">
            </li>
            <li class="p-2">
                <img src="{{ asset('assets/images/partner/logo-wika.png') }}" alt="">
            </li>
            <li class="p-2">
                <img src="{{ asset('assets/images/partner/logo-nindya.png') }}" alt="">
            </li>
            <li class="p-2">
                <img src="{{ asset('assets/images/partner/logo-pp.png') }}" alt="">
            </li>
            <li class="p-2">
                <img src="{{ asset('assets/images/partner/logo-pupr.png') }}" alt="">
            </li>
            <li class="p-2">
                <img src="{{ asset('assets/images/partner/logo-waskita.png') }}" alt="">
            </li>
            <li class="p-2">
                <img src="{{ asset('assets/images/partner/logo-sarinah.png') }}" alt="">
            </li>
            <li class="p-2">
                <img src="{{ asset('assets/images/partner/logo-g20.png') }}" alt="">
            </li>
            <li class="p-2">
                <img src="{{ asset('assets/images/partner/logo-abipraya.png') }}" alt="">
            </li>
            <li class="p-2">
                <img src="{{ asset('assets/images/partner/logo-nusantara.png') }}" alt="">
            </li>
        </ul>

        <div class="flex justify-center mt-10">
            <a href="#" class="px-2.5 py-0.5 text-sm rounded-full bg-secondary hover:bg-primary uppercase font-medium hover:text-white">Selengkapnya</a>
        </div>
    </section>
    <x-section-contact />
@endsection
