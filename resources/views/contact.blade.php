@extends('layouts.app')
@section('title', 'Kontak Kami')
@section('content')
    <x-banner-hero image="{{ Storage::disk('public_pages')->url($banner) }}" />

    <h3 id="contact-form" class="section-title text-center text-underline">Kontak Kami</h3>
    <x-grid-paragraf title="{{ $grid_title }}"
        desc="{{ $grid_desc }}" />

    <section class="bg-secondary mx-2 lg:mx-8 mt-10 rounded-4xl lg:rounded-[3rem] mb-20 p-4 lg:p-10">
        <div class="flex lg:flex-row flex-col gap-16">
            <div class="basis-[45%] 2xl:basis-[35%]"><img class="w-full max-lg:aspect-square object-top h-auto object-cover rounded-3xl lg:rounded-[3rem] 2xl:rounded-[4rem]" src="{{ asset('assets/images/image-contact.jpg') }}" alt=""></div>
            <div class="basis-[55%] 2xl:basis-[65%]">
                <div class="text-primary font-bold text-2xl lg:text-4xl mb-8 lg:mb-16">Tinggalkan Pesan untuk Kami</div>
                <form action="{{ route('contact.store') }}" class="space-y-8" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2.5 text-base font-bold text-primary text-heading">Nama Kamu</label>
                        <input type="text" id="name" name="name" class="border-[1.8px] border-primary rounded-xl text-primary text-base rounded-base block w-full px-3.5 py-4 shadow-xs placeholder:text-body" placeholder="Nama kamu" required />
                    </div>
                    <div>
                        <label for="email" class="block mb-2.5 text-base font-bold text-primary text-heading">Alamat Email Kamu</label>
                        <input type="email" id="email" name="email" class="border-[1.8px] border-primary rounded-xl text-primary text-base rounded-base block w-full px-3.5 py-4 shadow-xs placeholder:text-body" placeholder="Alamat email kamu" required />
                    </div>
                    <div>
                        <label for="phone" class="block mb-2.5 text-base font-bold text-primary text-heading">Nomor Telepon Kamu</label>
                        <input type="text" id="phone" name="phone" class="border-[1.8px] border-primary rounded-xl text-primary text-base rounded-base block w-full px-3.5 py-4 shadow-xs placeholder:text-body" placeholder="Nomor telepon kamu" required />
                    </div>
                    <div>
                        <label for="message" class="block mb-2.5 text-base font-bold text-primary text-heading">Pesan</label>
                        <textarea id="message" name="message" rows="6" class="border-[1.8px] border-primary rounded-xl text-primary text-base rounded-base block w-full px-3.5 py-4 shadow-xs placeholder:text-body" placeholder="Isi pesan disini..."></textarea>
                    </div>
                    @if (env('GOOGLE_RECAPTCHA_STATUS'))
                        <div>
                            <x-recaptcha />
                            <input type="hidden" name="captcha_status" value="true" />
                            @error('g-recaptcha-response')
                                <small class="text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    @endif
                    <button class="px-6 py-2.5 bg-primary rounded-full text-secondary font-bold shadow hover:scale-105 transition-transform duration-300">Kirim</button>
                </form>
            </div>
        </div>
    </section>

    <x-section-contact />
@endsection
