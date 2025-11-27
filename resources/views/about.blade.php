@extends('layouts.app')
@section('title', 'Tentang Kami')
@section('content')

<x-banner-hero image="{{ asset('assets/images/about-banner.jpg') }}" />
<section class="py-20">
    <x-grid-paragraf title="Kami membangun lebih dari sekadar bangunan"
        desc="Setiap proyek kami lahir dari riset, empati, dan dedikasi. Hasilnya bukan hanya tempat tinggal, tapi ruang hidup yang memberi kenyamanan dan kebanggaan bagi setiap penghuninya." />
</section>

<section class="bg-secondary mx-[1%] rounded-4xl p-10 space-y-8">
    <div class="bg-primary py-2 px-4 text-white rounded-full w-fit font-bold">Misi Kami</div>
    <div class="grid grid-cols-2 gap-[10%]">
        <div class="rounded-[3rem] overflow-hidden">
            <img class="w-full h-auto object-cover object-center"
                src="{{ asset('assets/images/img-misi.jpg') }}" alt="">
        </div>
        <div>
            <ul class="list-disc space-y-4">
                <li>
                    <h4 class="font-bold">Sosial</h4>
                    <p>Berperan serta dalam pembangunan yang berorientasi kepada terjaganya kualitas.</p>
                </li>
                <li>
                    <h4 class="font-bold">Ekonomi</h4>
                    <p>Menciptakan lapangan kerja serta meningkatkan kesejahteraan karyawan dengan semangat loyalitas
                        dan profesionalisme.</p>
                </li>
                <li>
                    <h4 class="font-bold">Budaya</h4>
                    <p>Mengembangkan nilai budaya taman tropis khas Indonesia yang mudah dirawat dan selaras dengan
                        alam.</p>
                </li>
                <li>
                    <h4 class="font-bold">Bisnis</h4>
                    <p>Menjadi mitra terpercaya dan menguntungkan bagi klien serta investor.</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="bg-primary py-2 px-4 text-white rounded-full w-fit font-bold">Visi Kami</div>
    <img class="w-full h-auto object-center rounded-[3rem]"
        src="{{ asset('assets/images/img-visi.jpg') }}" alt="">
    <p class="text-center font-bold">Menjadi Perusahaan lansekap skala nasional yang memperhatikan aspek- aspek
        harmonisasi lingkungan.</p>
</section>

<section class="container pb-16">
    <h3 class="section-title text-center !pb-6">Perjalanan Kami</h3>
    <p class="text-center">Tonggak penting dalam perjalanan Wira Land menuju perusahaan lanskap terdepan di Indonesia.</p>
    <div class="h-1 w-14 bg-secondary mx-auto mt-6 mb-10"></div>


    <div class="journey">
        <div class="space-y-28 parent">
            <div class="child">
                <div class="right_content">
                    <h2 class="leading-none">2016</h2>
                    <img src="{{ asset('assets/images/img-journey-01.jpg') }}" alt="">
                </div>
                <div class="left_content">
                    <h3 class="text-primary font-bold text-lg uppercase">PROYEK KONSTRUKSI LANSEKAP</h3>
                    <ul class="list-disc mt-4 space-y-3">
                        <li>Proyek Konstruksi Lansekap : Redesain Lansekap Istana Bogor.</li>
                    </ul>
                </div>
            </div>
            <div class="child">
                <div class="right_content">
                    <h2 class="leading-none">2017</h2>
                    <img src="{{ asset('assets/images/img-journey-01.jpg') }}" alt="">
                </div>
                <div class="left_content">
                    <h3 class="text-primary font-bold text-lg uppercase">PROYEK KONSTRUKSI & PEMELIHARAAN LANSEKAP</h3>
                    <ul class="list-disc mt-4 space-y-3">
                        <li>Penanaman & Pemeliharaan Lansekap (Pos Lintas Batas Negara)</li>
                        <li>PLBN Motamasin, Kab. Malaka, NTT (PT. Nindya Karya)</li>
                        <li>Penanaman & Pemeliharaan Lansekap (Pos Lintas Batas Negara)</li>
                        <li>PLBN Aruk Tahap 1, Kalbar</li>
                        <li>Penanaman & Pemeliharaan Lansekap (Pos Lintas Batas Negara) PLBN Badau Tahap 1, Kalbar</li>
                        <li>Penanaman & Pemeliharaan Lansekap (Pos Lintas Batas Negara) PLBN Entikong Tahap 1, Kalbar</li>
                        <li>Penanaman & Pemeliharaan Lansekap (Pos Lintas Batas Negara) PLBN Skouw, Papua</li>
                        <li>Penanaman & Pemeliharaan Rusunawa Nagrak, Cilincing, Jakarta Utara</li>
                    </ul>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>

    <div class="flex justify-center">
        <button class="px-3 py-1.5 text-sm rounded-full bg-secondary hover:bg-primary font-bold hover:text-white transition-color duration-300">Lihat perjalanan lengkap kami</button>
    </div>
</section>

<x-direktur />

<section class="container pb-16">
    <h3 class="section-title text-center">Profesional Terbaik di Balik Setiap Karya Kami</h3>

    <div class="grid grid-cols-4 gap-6">
        @for ($i = 0; $i < 8; $i++)
            <div class="border border-gray-300 rounded-2xl px-4 pt-8 pb-4 aspect-[245/313] flex flex-col justify-center relative
            before:content-[''] before:absolute before:-top-0.5 before:inset-x-0 before:w-full before:h-4 before:bg-secondary before:rounded-full
            hover:before:bg-primary hover:shadow-2xl transition-all duration-300 before:transition-colors">
                <div class="w-[60%] aspect-square rounded-full bg-gray-300 mx-auto"></div>
                <div class="text-primary font-bold text-lg text-center mt-6">Nama</div>
                <div class="font-bold text-center">Pekerjaan</div>
            </div>
        @endfor
    </div>

     <div class="flex justify-center mt-10">
        <button class="px-3 py-1.5 text-sm rounded-full bg-secondary hover:bg-primary font-bold hover:text-white transition-color duration-300">Lihat Semua Tim</button>
    </div>
</section>

<x-section-contact />
@endsection
