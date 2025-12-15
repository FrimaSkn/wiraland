<section class="container pb-16">
    <h3 class="section-title text-center !pb-6">Perjalanan Kami</h3>
    <p class="text-center">Tonggak penting dalam perjalanan Wira Land menuju perusahaan lanskap terdepan di Indonesia.</p>
    <div class="h-1 w-14 bg-secondary mx-auto mt-6 mb-10"></div>


    <div class="journey">
        <div class="space-y-28 parent">
            @foreach ($visibleJourneys as $journey)
                <div data-aos="fade-up" class="child">
                    <div class="right_content">
                        <h2 class="leading-none">{{ $journey['year'] }}</h2>
                        <img src="{{ Storage::disk('public_pages')->url($journey['image']) }}" alt="">
                    </div>
                    <div class="left_content">
                        <h3 class="text-primary font-bold text-lg uppercase">{{ $journey['title'] }}</h3>
                        <div class="*:list-disc *:space-y-4 mt-4">
                            {!! str($journey['description'])->sanitizeHtml() !!}
                        </div>
                    </div>
                </div>
            @endforeach
            <div style="clear:both;"></div>
        </div>
    </div>
    <div wire:click="loadMore" class="flex justify-center">
        <button @disabled(count($visibleJourneys) > count($journeys)) @class(['bg-gray-200', 'bg-secondary hover:bg-primary' => count($journeys) > count($visibleJourneys), 'px-3 py-1.5 text-sm rounded-full font-bold hover:text-white transition-color duration-300'])>Lihat perjalanan lengkap kami</button>
    </div>
</section>
