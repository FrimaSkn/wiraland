@extends('layouts.app')
@section('title', 'Portfolio')
@section('content')
    <x-banner-hero image="{{ Storage::disk('public_pages')->url($banner) }}" alt="{{ config('app.name') }} - Services" />

    <div class="bg-primary mx-2 md:mx-6 mt-10 rounded-3xl mb-16 lg:mb-40">
        <div class="container pb-28 md:pb-48">
            <h3 data-aos="fade-in" class="section-title text-center !text-secondary text-underline">{{ $title }}</h3>
            <p data-aos="fade-up" class="text-white text-center">{!! nl2br($desc) !!}</p>
        </div>
        <x-circular />
    </div>

    <section class="mx-6 pt-14 md:pt-24 mb-20 space-y-12">
        @foreach ($portfolios as $ckey => $category)
            <div>
                <div class="flex justify-between">
                    <div class="px-4 py-2 text-primary text-base md:text-xl rounded-full font-bold bg-secondary hover:bg-primary hover:text-white">{{ $category->name }}</div>
                    <div class="size-9 md:size-10 bg-secondary rounded-full">
                        <svg id="Layer_2" class="fill-none stroke-primary rotate-180 stroke-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.89 34.89">
                            <g id="Home">
                                <polyline class="cls-1" points="12.15 11.44 24.15 11.44 24.15 23.45"/>
                                <line class="cls-1" x1="10.74" y1="22.95" x2="24.15" y2="11.44"/>
                            </g>
                        </svg>
                    </div>
                </div>
                @php $count = $category->portfolios->count() @endphp
                <div class="grid {{ $count > 1 ? 'grid-cols-2 lg:grid-cols-3' : 'grid-cols-1' }} gap-3 md:gap-6 mt-10">
                    @foreach ($category->portfolios as $key => $portfolio)
                        <div data-aos="fade-up" data-aos-delay="{{ $key * 100 }}" class="bg-cover bg-center w-full {{ $count > 1 ? 'aspect-[378/443]' : 'aspect-[1164/366]' }}" style="background-image: url('{{ $portfolio->getFirstMediaUrl('portfolio_image') }}')">
                            <div class="grid md:grid-rows-2 h-full text-white  justify-items-center px-[10%]">
                                <div></div>
                                <div class="flex flex-col md:justify-between md:items-center">
                                    <div class="font-bold text-center text-sm md:text-lg">{{ $portfolio->title }}</div>
                                    <div class="mb-2 md:mb-10 max-md:text-xs text-center">{{ $portfolio->location }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </section>

    <x-section-contact />

@endsection
