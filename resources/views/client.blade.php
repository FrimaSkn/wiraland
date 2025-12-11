@extends('layouts.app')
@section('title', 'Klien')
@section('content')

    <x-banner-hero image="{{ Storage::disk('public_pages')->url($banner) }}" />

    <section class="container pb-20">
        <h3 class="section-title text-center text-underline">{{ $title }}</h3>
        <p class="text-center">{{ $desc }}</p>

        <div class="mt-20">
            <livewire:clients />
        </div>
    </section>
    <x-section-contact />
@endsection
