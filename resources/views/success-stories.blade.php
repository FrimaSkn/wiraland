@extends('layouts.app')
@section('title', 'Kisah Sukses')
@section('content')
    <x-banner-hero image="{{ Storage::disk('public_pages')->url($banner) }}" />

    <h3 class="section-title text-center text-underline">Kisah Sukses</h3>
    <x-grid-paragraf title="{{ $grid_title }}"
        desc="{{ $grid_desc }}" />

    <div class="mt-20 lg:mt-32 mb-20">
        <x-success-story :loop="3" />
    </div>

    <div class="flex justify-center mb-20 lg:mb-32">
        <a href="#" class="px-4 py-1 text-sm rounded-full shadow bg-secondary hover:bg-primary hover:text-white transition-color duration-300">Selengkapnya</a>
    </div>

    <x-section-contact />
@endsection
