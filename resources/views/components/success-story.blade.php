@props([
    'loop' => 1,
    'page' => null,
])

@for ($i = 0; $i < $loop; $i++)
    <section class="success-story {{ $page === 'home' ? 'home':'' }}">
        <div class="image-section">
            <img class="w-full h-auto object-cover" src="{{ asset('assets/images/img-04.jpg') }}" alt="{{ config('app.name') }}">
        </div>
        <div class="content-section">
            <h3 class="section-title !text-white text-underline left">Kisah Sukses</h3>
            <h4 class="text-2xl font-semibold italic text-white mb-6">Inovasi Kreatif dan Cepat untuk <br> Menyambut Pemimpin Dunia</h4>
            <p class="text-white mb-6 lg:text-lg">Menjelang G20 2022, Bali dipercantik dengan penataan landscape yang memadukan keindahan alam dan kekayaan budaya. Jalan utama hingga kawasan Nusa Dua dihiasi taman bunga berwarna-warni, pepohonan tropis yang tertata rapi, serta ornamen khas Bali yang memberi sentuhan hangat dan elegan. Semua ini menjadi wujud keramahan Indonesia sekaligus menyambut tamu dunia sekaligus memperlihatkan pesona Bali sebagai destinasi kelas internasional.</p>
            <div class="flex gap-[20%] mb-6">
                <div>
                    <h4 class="text-base font-semibold text-secondary uppercase">Durasi:</h4>
                    <h3 class="text-white fort-bold text-2xl">7 Hari Kerja</h3>
                </div>
                <div>
                    <h4 class="text-base font-semibold text-secondary uppercase">JUMLAH PEKERJA:</h4>
                    <h3 class="text-white fort-bold text-2xl">107 Orang</h3>
                </div>
            </div>
            <div>
                <h4 class="text-base font-semibold text-secondary uppercase">JENIS TANAMAN:</h4>
                <h3 class="text-white fort-bold text-2xl">+100 Pohon</h3>
                <h3 class="text-white fort-bold text-2xl">+900 Tanaman Hias</h3>
            </div>
        </div>
    </section>
@endfor
