@extends('layouts.app')
@section('title', 'Artikel')
@section('content')

<section class="my-10 lg:my-20 container space-y-5">
    <img src="{{ $post->getFirstMediaUrl('article_image') == null ? asset('assets/images/about-banner.jpg') : $post->getFirstMediaUrl('article_image') }}" alt="">
    <h1 class="text-xl md:text-3xl font-bold text-primary">{{ $post->title }}</h1>
    <article>
        {!! $post->content !!}
    </article>
</section>

<x-section-contact />

@endsection
