@extends('layouts.app')
@section('title', 'Kontak Kami')
@section('content')
    <x-banner-hero image="{{ asset('assets/images/about-banner.jpg') }}" />

    <h3 class="section-title text-center text-underline">Kontak Kami</h3>
    <x-grid-paragraf title="Kami Siap Membantu Mewujudkan Ruang Hijau Impian Anda"
        desc="Baik untuk proyek perumahan, fasilitas publik, hingga area komersial, tim ahli kami siap memberikan solusi lanskap terbaik yang sesuai dengan kebutuhan Anda." />

    <section class="bg-secondary mx-8 mt-10 rounded-[3rem] mb-20 p-10">
        <div class="flex gap-16">
            <div class="basis-[45%] 2xl:basis-[35%]"><img class="w-full h-auto object-cover lg:rounded-[3rem] 2xl:rounded-[4rem]" src="{{ asset('assets/images/image-contact.jpg') }}" alt=""></div>
            <div class="basis-[55%] 2xl:basis-[65%]">
                <div class="text-primary font-bold text-4xl mb-16">Tinggalkan Pesan untuk Kami</div>
                <form action="#" class="space-y-8">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2.5 text-base font-bold text-primary text-heading">Nama Kamu</label>
                        <input type="text" id="name" class="border-[1.8px] border-primary rounded-xl text-primary text-base rounded-base block w-full px-3.5 py-4 shadow-xs placeholder:text-body" placeholder="Nama kamu" required />
                    </div>
                    <div>
                        <label for="email" class="block mb-2.5 text-base font-bold text-primary text-heading">Alamat Email Kamu</label>
                        <input type="email" id="email" class="border-[1.8px] border-primary rounded-xl text-primary text-base rounded-base block w-full px-3.5 py-4 shadow-xs placeholder:text-body" placeholder="Alamat email kamu" required />
                    </div>
                    <div>
                        <label for="email" class="block mb-2.5 text-base font-bold text-primary text-heading">Nomor Telepon Kamu</label>
                        <input type="email" id="email" class="border-[1.8px] border-primary rounded-xl text-primary text-base rounded-base block w-full px-3.5 py-4 shadow-xs placeholder:text-body" placeholder="Nomor telepon kamu" required />
                    </div>
                    <div>
                        <label for="message" class="block mb-2.5 text-base font-bold text-primary text-heading">Pesan</label>
                        <textarea id="message" rows="8" class="border-[1.8px] border-primary rounded-xl text-primary text-base rounded-base block w-full px-3.5 py-4 shadow-xs placeholder:text-body" placeholder="Isi pesan disini..."></textarea>
                    </div>
                    <button class="px-6 py-2.5 bg-primary rounded-full text-secondary font-bold">Kirim</button>
                </form>
            </div>
        </div>
    </section>

    <x-section-contact />
@endsection
