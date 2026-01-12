<section class="container pb-16">
    <h3 data-aos="fade-up" class="section-title text-center">Profesional Terbaik di Balik Setiap Karya Kami</h3>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($teams as $key => $team)
        <div data-aos="fade-up" data-aos-delay="{{ $key * 100 }}" class="border border-gray-300 rounded-2xl px-4 pt-8 pb-4 aspect-[245/313] flex flex-col justify-center relative
            before:content-[''] before:absolute before:-top-0.5 before:inset-x-0 before:w-full before:h-4 before:bg-secondary before:rounded-full
            hover:before:bg-primary hover:shadow-2xl transition-all duration-300 before:transition-colors">
                <div class="w-[60%] aspect-square rounded-full bg-gray-300 mx-auto overflow-hidden">
                    <img class="w-full h-full object-cover object-center" src="{{ $team->getFirstMediaUrl('team_picture') == null ? asset('assets/images/default-avatar.jpg') : $team->getFirstMediaUrl('team_picture') }}" alt="{{ $team->name }}">
                </div>
                <div class="text-primary font-bold text-lg text-center mt-6">{{ $team->name }}</div>
                <div class="font-bold text-center">{{ $team->role }}</div>
            </div>
        @endforeach
    </div>

     <div class="flex justify-center mt-10">
        <button wire:click="loadMore" @disabled(count($teams) >= $count) @class(['bg-gray-200', 'bg-secondary hover:bg-primary' => count($teams) < $count , 'px-3 py-1.5 text-sm rounded-full font-bold hover:text-white transition-color duration-300'])>Lihat Semua Tim</button>
    </div>
</section>
