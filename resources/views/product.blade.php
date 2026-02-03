@extends('layouts.app')
@section('title', 'Product')
@section('content')
    <x-banner-hero image="{{ Storage::disk('public_pages')->url($settings->banner) }}" alt="{{ config('app.name') }} - Product" />
    <section class="container py-20 relative">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10">
            <div class="lg:col-span-2">
                <div class="bg-white shadow-lg p-4 lg:absolute -top-60">
                    <img src="{{ Storage::disk('public_pages')->url($settings->thumb_catalogue) }}" alt="{{ config('app.name') }} Product catalogue" class="w-full h-auto rounded-lg mb-4" />
                    <div class="h-16">
                        <img class="w-24 float-right" src="{{ asset('assets/brand/logo.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3">
                <form action="{{ route('product.download-catalogue') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-4">
                        <label for="email" class="block mb-2.5 text-2xl font-bold text-heading">Download PDF Product Catalogue</label>
                        <input type="email" id="email" name="email" class="border-[1.8px] border-primary rounded-xl text-primary text-base rounded-base block w-full px-3.5 py-4 shadow-xs placeholder:text-body" placeholder="Masukan alamat email kamu" required />
                    </div>
                    <button class="px-6 py-2.5 bg-primary rounded-2xl  shadow hover:scale-105 transition-transform duration-300 flex items-center gap-3">
                        <span class="text-white text-xl">
                            DOWNLOAD
                        </span>
                        <img src="{{ asset('assets/images/icon-arrow.png') }}" alt="">
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="container py-20">
        <div class="text-center text-3xl font-bold relative w-fit mx-auto before:content-[''] before:absolute before:-bottom-4 before:w-full before:h-1.5 before:bg-primary before:rounded-full">E-Commerce</div>
        <div class="mt-24 grid grid-cols-1 md:grid-cols-3 gap-10 flex-wrap">
            @foreach ($settings->ecommerce as $item)
                <a href="{{ $item['url'] }}" target="_blank" class="bg-white shadow-md rounded-2xl p-4 hover:scale-105 transition-transform duration-300">
                    <img src="{{ Storage::disk('public_pages')->url($item['icon']) }}" alt="{{ $item['name'] }}">
                </a>
            @endforeach
        </div>
    </section>
@endsection
