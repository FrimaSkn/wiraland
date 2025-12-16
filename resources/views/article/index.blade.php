@extends('layouts.app')
@section('title', 'Artikel')
@section('content')
<x-banner-hero image="{{ Storage::disk('public_pages')->url($banner) }}" />

<h3 data-aos="fade-in" class="section-title text-center text-underline">Artikel</h3>
<x-grid-paragraf title="{{ $grid_title }}"
    desc="{{ $grid_desc }}" />

<section class="my-20 container">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-20">
        @foreach ($articles as $key => $post)
            <div data-aos="fade-up" data-aos-delay="{{ $key * 100 }}" class="col-span-1 space-y-5 flex flex-col justify-between">
                <div class="w-full aspect-square rounded-4xl bg-gray-200 overflow-hidden group">
                    <img class="w-full h-full object-cover object-center group-hover:scale-110 transition-all duration-300" src="{{ $post->getFirstMediaUrl('article_image') == null ? asset('assets/images/about-banner.jpg') : $post->getFirstMediaUrl('article_image') }}" alt="">
                </div>
                <h2 class="line-clamp-2 text-lg text-primary font-bold">{{ $post->title }}</h2>
                <p class="line-clamp-2">{{ $post->excerpt }}</p>
                <a href="{{ route('article.show', $post->slug) }}" class="w-fit text-sm font-medium hover:text-white hover:bg-primary transition-colors duration-300 bg-secondary px-4 py-2 rounded-full">Selengkapnya</a>
            </div>
        @endforeach
    </div>

    <div class="mt-20 md:flex justify-center" >
        {{ $articles->onEachSide(3)->links('vendor.pagination.tailwind') }}
    </div>
</section>

<x-section-contact />

@endsection
