@extends('layouts.app')
@section('title', 'Testimonial')
@section('content')
    <x-banner-hero image="{{ Storage::disk('public_pages')->url($banner) }}" />

    <section class="mb-20">
        <h3 id="contact-form" class="section-title text-center text-underline">Dipercaya oleh Banyak Klien Terbaik</h3>

        <div class="testimonial_slider splide w-full" aria-label="Basic Structure Example">
            <div class="splide__track">
                <ul class="splide__list flex">
                    @foreach ($testimonials as $testi)
                        <li class="splide__slide bg-secondary rounded-3xl p-10 flex flex-col justify-between gap-6 md:gap-10 lg:gap-16 md:aspect-[1845/315]">
                            <p>{!! $testi->description !!}</p>
                            <div class="flex max-md:flex-col-reverse justify-between md:items-center gap-4">
                                <div>
                                    <p class="font-bold text-primary">{{ $testi->name }}</p>
                                    <p class="text-primary">{{ $testi->position }}</p>
                                </div>
                                <x-star size="size-8" position="max-md:justify-start" stars="{{ $testi->rating }}" />
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <x-section-contact />
@endsection
