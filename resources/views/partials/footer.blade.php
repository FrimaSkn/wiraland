<footer class="bg-primary">
    <div class="container pt-10 lg:pt-20">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('assets/brand/logo-white.png') }}" alt="{{ config('app.name', 'Laravel') }}" class="h-20 md:h-24">
        </a>
        <div class="flex max-lg:flex-col justify-between">
            <div class="max-lg:mb-8">
                <p class="text-white mt-8">Kami adalah Penyedia jasa pembuatan taman <br> terbaik untuk semua wilayah se-INDONESIA</p>
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
