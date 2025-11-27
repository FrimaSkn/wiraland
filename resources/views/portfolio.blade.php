@extends('layouts.app')
@section('title', 'Portfolio')
@section('content')
    <x-banner-hero image="{{ asset('assets/images/banner-services.jpg') }}" alt="{{ config('app.name') }} - Services" />

    <div class="bg-primary mx-6 mt-10 rounded-3xl mb-40">
        <div class="container pb-48">
            <h3 class="section-title text-center !text-secondary text-underline">Portfolio Kami</h3>
            <p class="text-white text-center">Berikut adalah beberapa proyek lanskap dan desain kami yang mencerminkan dedikasi dalam menciptakan <br> ruang luar yang fungsional, estetis, dan berkelanjutan.</p>
        </div>
        <x-circular />
    </div>

    <section class="mx-6 pt-24 mb-20 space-y-12">
        <div>
            <div class="flex justify-between">
                <div class="px-4 py-2 text-primary text-xl rounded-full font-bold bg-secondary hover:bg-primary hover:text-white">Pemerintahan</div>
                <div class="size-10 bg-secondary rounded-full">
                    <svg id="Layer_2" class="fill-none stroke-primary rotate-180 stroke-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.89 34.89">
                    <g id="Home">
                        <polyline class="cls-1" points="12.15 11.44 24.15 11.44 24.15 23.45"/>
                        <line class="cls-1" x1="10.74" y1="22.95" x2="24.15" y2="11.44"/>
                    </g>
                    </svg>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-6 mt-10">
                @for ($i = 1; $i <= 7; $i++)
                    <div class="bg-cover bg-center w-full aspect-[378/443]" style="background-image: url('{{ asset('assets/images/portfolio/pemerintah-0'. $i .'.jpg') }}')">
                        <div class="grid grid-rows-2 h-full text-white  justify-items-center px-[10%]">
                            <div></div>
                            <div class="flex flex-col justify-between items-center">
                                <div class="font-bold text-center text-lg">Penyempurnaan danPenataan Kawasan Bendungan Sepaku Semoi IKN</div>
                                <div class="mb-10 text-center">Bali</div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div>
            <div class="flex justify-between">
                <div class="px-4 py-2 text-primary text-xl rounded-full font-bold bg-secondary hover:bg-primary hover:text-white">Kantor</div>
                <div class="size-10 bg-secondary rounded-full">
                    <svg id="Layer_2" class="fill-none stroke-primary rotate-180 stroke-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.89 34.89">
                    <g id="Home">
                        <polyline class="cls-1" points="12.15 11.44 24.15 11.44 24.15 23.45"/>
                        <line class="cls-1" x1="10.74" y1="22.95" x2="24.15" y2="11.44"/>
                    </g>
                    </svg>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-10">
                <div class="bg-cover bg-center w-full aspect-[1164/366]" style="background-image: url('{{ asset('assets/images/portfolio/kantor-01.jpg') }}')">
                    <div class="grid grid-rows-2 h-full text-white  justify-items-center px-[10%]">
                        <div></div>
                        <div class="flex flex-col justify-between items-center">
                            <div class="font-bold text-center text-lg">Politeknik PUPR Semarang</div>
                            <div class="mb-10 text-center">Semarang</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="flex justify-between">
                <div class="px-4 py-2 text-primary text-xl rounded-full font-bold bg-secondary hover:bg-primary hover:text-white">Komersial</div>
                <div class="size-10 bg-secondary rounded-full">
                    <svg id="Layer_2" class="fill-none stroke-primary rotate-180 stroke-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.89 34.89">
                    <g id="Home">
                        <polyline class="cls-1" points="12.15 11.44 24.15 11.44 24.15 23.45"/>
                        <line class="cls-1" x1="10.74" y1="22.95" x2="24.15" y2="11.44"/>
                    </g>
                    </svg>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-10">
                <div class="bg-cover bg-center w-full aspect-[1164/366]" style="background-image: url('{{ asset('assets/images/portfolio/komersial-01.jpg') }}')">
                    <div class="grid grid-rows-2 h-full text-white  justify-items-center px-[10%]">
                        <div></div>
                        <div class="flex flex-col justify-between items-center">
                            <div class="font-bold text-center text-lg">Penanaman & Pemeliharan Proyek Taman Kota Peruri</div>
                            <div class="mb-10 text-center">Jakarta Selatan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="flex justify-between">
                <div class="px-4 py-2 text-primary text-xl rounded-full font-bold bg-secondary hover:bg-primary hover:text-white">Tempat Wisata</div>
                <div class="size-10 bg-secondary rounded-full">
                    <svg id="Layer_2" class="fill-none stroke-primary rotate-180 stroke-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.89 34.89">
                    <g id="Home">
                        <polyline class="cls-1" points="12.15 11.44 24.15 11.44 24.15 23.45"/>
                        <line class="cls-1" x1="10.74" y1="22.95" x2="24.15" y2="11.44"/>
                    </g>
                    </svg>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-10">
                <div class="bg-cover bg-center w-full aspect-[1164/366]" style="background-image: url('{{ asset('assets/images/portfolio/komersial-01.jpg') }}')">
                    <div class="grid grid-rows-2 h-full text-white  justify-items-center px-[10%]">
                        <div></div>
                        <div class="flex flex-col justify-between items-center">
                            <div class="font-bold text-center text-lg">Sarinah</div>
                            <div class="mb-10 text-center">Jakarta Selatan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-section-contact />

@endsection
