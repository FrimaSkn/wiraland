@extends('layouts.app')
@section('title', 'Tentang Kami')
@section('content')
<x-banner-hero image="{{ Storage::disk('public_pages')->url($banner) }}" />
<section class="py-12 md:py-20">
    <x-grid-paragraf :title="$grid_title" :desc="$grid_desc" />
</section>

<section class="bg-secondary mx-[1%] rounded-4xl p-10 space-y-8">
    <div class="bg-primary py-2 px-4 text-white rounded-full w-fit font-bold">Misi Kami</div>
    <div class="grid md:grid-cols-2 gap-4 md:gap-[10%]">
        <div class="">
            <img class="w-full h-auto rounded-2xl md:rounded-[3rem] object-cover object-center"
                src="{{ Storage::disk('public_pages')->url($mission['image_misi']) }}" alt="">
        </div>
        <div class="*:list-disc *:space-y-4">
            {!! str($mission['description'])->sanitizeHtml() !!}
        </div>
    </div>
    <div class="bg-primary py-2 px-4 text-white rounded-full w-fit font-bold">Visi Kami</div>
    <img class="w-full h-auto object-center rounded-2xl md:rounded-[3rem]"
        src="{{ Storage::disk('public_pages')->url($vision['image_visi']) }}" alt="">
    <div class="*:list-disc *:space-y-4">
        {!! str($vision['description'])->sanitizeHtml() !!}
    </div>
</section>

 <livewire:journey :journeys="$journey" />

<x-direktur />

<livewire:teams />

<x-section-contact />
@endsection
