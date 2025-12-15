@extends('layouts.app')
@section('title', 'Layanan Kami')
@section('content')

<x-banner-hero image="{{ Storage::disk('public_pages')->url($banner) }}" />
<section class="pb-8 md:pb-16">
    <h3 data-aos="fade-in" class="section-title text-center text-underline">Layanan Kami</h3>

    <x-grid-paragraf :title="$grid_title" :desc="$grid_desc" />

    <div class="container mt-20 space-y-12">
        @foreach ($services as $key => $service)
            <div data-aos="fade-up" data-aos-delay="{{ $key * 100 }}" class="card-service">
                <div class="col-span-3">
                    <img class="rounded-4xl w-full aspect-[389/335] object-cover" src="{{ Storage::disk('public_pages')->url($service['image']) }}" alt="{{ config('app.name') .' - '. $service['title'] }} ">
                </div>
                <div class="col-span-4">
                    <img class="size-10" src="{{ Storage::disk('public_pages')->url($service['icon']) }}" alt="">
                    <h3 class="section-title !py-6 md:!py-4 lg:!py-12">{{ $service['title'] }}</h3>
                    <p class="w-5/6 mb-10">{{ $service['desc'] }}</p>
                    <a href="#" class="px-4 py-1 text-sm rounded-full shadow bg-secondary hover:bg-primary hover:text-white transition-color duration-300">Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="mb-20">
    <h3 data-aos="fade-in" class="section-title text-center">{!! nl2br($section_two_title) !!}</h3>

    <div class="grid lg:grid-cols-3 mx-6 gap-10">
        @foreach ($section_two as $key => $item)
            <div data-aos="fade-up" data-aos-delay="{{ $key * 100 }}" class="rounded-4xl bg-primary p-8">
                <img class="size-12" src="{{ Storage::disk('public_pages')->url($item['icon']) }}" alt="">
                <h3 class="section-title !py-8 !text-white">{{ $item['title'] }}</h3>
                <p class="text-white">{{ $item['desc'] }}</p>
            </div>
        @endforeach
    </div>
</section>

<x-section-contact />
@endsection
