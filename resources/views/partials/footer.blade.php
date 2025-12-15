<footer class="bg-primary">
    <div class="container pt-10 lg:pt-20">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('assets/brand/logo-03.png') }}" alt="{{ config('app.name', 'Laravel') }}" class="h-20 -ml-4">
        </a>
        <div class="flex max-lg:flex-col justify-between">
            <div class="max-lg:mb-8">
                <p class="text-white mt-8">Kami adalah Penyedia jasa pembuatan taman <br> terbaik untuk semua wilayah se-INDONESIA</p>
                {{-- <form action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <div class="relative mt-4">
                        <input type="text" name="email" class="block w-full text-white p-3 pe-9 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-xl border-secondary focus:ring-brand focus:border-brand shadow-xs placeholder:text-white" placeholder="Tulis email kami disini..." required />
                        <button type="submit" class="absolute end-1.5 bottom-1.5 text-white bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded text-xs focus:outline-none">
                            <img class="size-8" src="{{ asset('assets/svg/icon-arrow.svg') }}" alt="">
                        </button>
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
                </form> --}}
                <livewire:store-email-subscription />
            </div>
            <div class="flex gap-[20%] lg:w-[25%]">
                <div>
                    <div class="font-bold text-white mb-6">Links</div>
                    <ul class="space-y-2 *:text-nowrap">
                        <li><a href="{{ route('article.index') }}" class="text-white hover:underline">Artikel</a></li>
                        <li><a href="{{ route('success-stories') }}" class="text-white hover:underline">Kisah Sukses</a></li>
                        <li><a href="{{ route('testimonial') }}" class="text-white hover:underline">Testimonial</a></li>
                        <li><a href="{{ route('contact.index') }}" class="text-white hover:underline">Kontak</a></li>
                        <li><a href="{{ route('faq') }}" class="text-white hover:underline">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <div class="font-bold text-white text-nowrap mb-6">Social Media</div>
                    <ul class="space-y-2 *:text-nowrap">
                        @foreach ($generalContent->social_media as $sosmed)
                            <li><a href="{{ $sosmed['link'] }}" target="_blank" class="text-white hover:underline">{{ $sosmed['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-secondary mt-20 p-1 md:p-3 text-[10px] md:text-base text-center font-medium">&copy; {{ date('Y') }} Copyright PT Wira Land Sketsa, All rights reserved.</div>
    </div>
</footer>
