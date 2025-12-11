@extends('layouts.app')
@section('title', 'Testimonial')
@section('content')
    <x-banner-hero image="{{ Storage::disk('public_pages')->url($banner) }}" />

    <section class="mb-20">
        <h3 id="contact-form" class="section-title text-center text-underline">Dipercaya oleh Banyak Klien Terbaik</h3>

        <div class="testimonial_slider splide w-full" aria-label="Basic Structure Example">
            <div class="splide__track">
                <ul class="splide__list flex">
                    @for ($i = 0; $i < 6; $i++)
                        <li class="splide__slide">
                            <div class="bg-secondary rounded-3xl p-10 flex flex-col gap-6 md:gap-10 lg:gap-16 md:aspect-[1845/315]">
                                <p>“PT Wira Land Sketsa telah memberikan pelayanan yang sangat profesional dalam penataan landscape. Mulai dari perencanaan hingga hasil akhir, semuanya dikerjakan dengan detail, rapi, dan sesuai kebutuhan kami. Hasilnya tidak hanya mempercantik area, tetapi juga meningkatkan nilai properti. Kami sangat mengapresiasi dedikasi dan kualitas kerja tim Wira Land Sketsa.”</p>
                                <div class="flex max-md:flex-col-reverse justify-between md:items-center gap-4">
                                    <div>
                                        <p class="font-bold text-primary">Jonathan Doe</p>
                                        <p class="text-primary">Direktur Sarinah Indonesia</p>
                                    </div>
                                    <x-star size="size-8" position="max-md:justify-start" />
                                </div>
                            </div>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
    </section>

    <x-section-contact />
@endsection
