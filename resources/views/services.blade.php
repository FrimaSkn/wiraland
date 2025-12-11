@extends('layouts.app')
@section('title', 'Layanan Kami')
@section('content')

<x-banner-hero image="{{ Storage::disk('public_pages')->url($banner) }}" />
<section class="pb-8 md:pb-16">
    <h3 class="section-title text-center text-underline">Layanan Kami</h3>

    <x-grid-paragraf :title="$grid_title" :desc="$grid_desc" />

    <div class="container mt-20 space-y-12">
        @foreach ($services as $service)
            <div class="card-service">
                <div class="col-span-3">
                    <img class="rounded-4xl w-full aspect-[389/335] object-cover" src="{{ Storage::disk('public_pages')->url($service['image']) }}" alt="{{ config('app.name') .' - '. $service['title'] }} ">
                </div>
                <div class="col-span-4">
                    <img class="size-10" src="{{ Storage::disk('public_pages')->url($service['icon']) }}" alt="">
                    <h3 class="section-title !py-6 md:!py-12">{{ $service['title'] }}</h3>
                    <p class="w-5/6 mb-10">{{ $service['desc'] }}</p>
                    <a href="#" class="px-4 py-1 text-sm rounded-full shadow bg-secondary hover:bg-primary hover:text-white transition-color duration-300">Selengkapnya</a>
                </div>
            </div>
        @endforeach
        {{-- <div class="p-6 border bg-primary border-primary md:grid md:grid-cols-7 rounded-4xl gap-[5%] max-md:space-y-3">
            <div class="col-span-3">
                <img class="rounded-4xl w-full aspect-[389/335] object-cover" src="{{ asset('assets/images/img-service-02.jpg') }}" alt="{{ config('app.name') }} - ">
            </div>
            <div class="col-span-4">
                <img class="size-10" src="{{ asset('assets/svg/icon-service-02.svg') }}" alt="">
                <h3 class="section-title !py-6 md:!py-12 !text-white">Konstruksi / Execution</h3>
                <p class="w-5/6 mb-10 text-white">Kami mewujudkan desain dengan presisi dan material terbaik. Setiap tahap dikerjakan dengan standar tinggi dan perhatian pada detail, memastikan hasil akhir mencerminkan visi dan kualitas Wira Land.</p>
                <a href="#" class="px-4 py-1 text-sm rounded-full shadow bg-secondary hover:bg-primary hover:text-white transition-color duration-300">Selengkapnya</a>
            </div>
        </div>
        <div class="p-6 border border-primary md:grid md:grid-cols-7 rounded-4xl gap-[5%] max-md:space-y-3">
            <div class="col-span-3">
                <img class="rounded-4xl w-full aspect-[389/335] object-cover" src="{{ asset('assets/images/img-service-03.jpg') }}" alt="{{ config('app.name') }} - ">
            </div>
            <div class="col-span-4">
                <img class="size-10" src="{{ asset('assets/svg/icon-service-03.svg') }}" alt="">
                <h3 class="section-title !py-6 md:!py-12">Pemeliharaan / Maintenance</h3>
                <p class="w-5/6 mb-10">Kami menjaga keindahan lanskap agar tetap hidup dan berkelanjutan. Melalui perawatan rutin dan pemantauan berkelanjutan, kami memastikan setiap proyek tetap fungsional dan estetis dalam jangka panjang.</p>
                <a href="#" class="px-4 py-1 text-sm rounded-full shadow bg-secondary hover:bg-primary hover:text-white transition-color duration-300">Selengkapnya</a>
            </div>
        </div> --}}
    </div>
</section>

<section class="mb-20">
    <h3 class="section-title text-center">{!! nl2br($section_two_title) !!}</h3>

    <div class="grid lg:grid-cols-3 mx-6 gap-10">
        @foreach ($section_two as $item)
            <div class="rounded-4xl bg-primary p-8">
                <img class="size-12" src="{{ Storage::disk('public_pages')->url($item['icon']) }}" alt="">
                <h3 class="section-title !py-8 !text-white">{{ $item['title'] }}</h3>
                <p class="text-white">{{ $item['desc'] }}</p>
            </div>
        @endforeach
    </div>
</section>

<x-section-contact />
@endsection
