@extends('layouts.app')
@section('title', 'Kisah Sukses')
@section('content')
    <x-banner-hero image="{{ Storage::disk('public_pages')->url($banner) }}" />

    <h3 class="section-title text-center text-underline">Kisah Sukses</h3>
    <x-grid-paragraf title="{{ $grid_title }}"
        desc="{{ $grid_desc }}" />

    <div class="mt-20 lg:mt-32 mb-20">
        <livewire:success-stories />
    </div>

    <x-section-contact />
@endsection
