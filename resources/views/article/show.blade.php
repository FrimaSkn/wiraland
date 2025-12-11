@extends('layouts.app')
@section('title', 'Artikel')
@section('content')

<section class="my-10 lg:my-20 container space-y-5">
    <img src="{{ asset('assets/images/banner-services.jpg') }}" alt="">
    <h1 class="text-xl md:text-3xl font-bold">Judul Artikel Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos odit debitis nisi voluptatibus, recusandae ipsa praesentium sed!</h1>
    <article>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. In laudantium asperiores molestias ipsum earum, perspiciatis deleniti dolorum facere similique reprehenderit. Perferendis veniam quisquam eveniet ullam tenetur reprehenderit, vel vero enim?
    </article>
</section>

<x-section-contact />

@endsection
