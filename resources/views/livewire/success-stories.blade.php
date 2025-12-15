<div>
    @foreach ($stories as $key => $story)
        <div data-aos="fade-up" data-aos-delay="{{ $key * 100 }}" class="success-story">
            <div class="image-section">
                <img class="w-full h-auto object-cover" src="{{ $story->getFirstMediaUrl('success_story_image') }}" alt="{{ config('app.name') }}">
            </div>
            <div class="content-section max-lg:px-4">
                <h3 class="section-title !text-white text-underline left">Kisah Sukses</h3>
                <h4 class="text-2xl font-semibold italic text-white mb-6">{!! nl2br($story->title) !!}</h4>
                <p class="text-white mb-6 lg:text-lg 2xl:w-9/12">{!! nl2br($story->description) !!}</p>
                <div class="flex gap-[20%] mb-6">
                    <div>
                        <h4 class="text-base font-semibold text-secondary uppercase">Durasi:</h4>
                        <h3 class="text-white fort-bold text-2xl">{!! storyPayload($story->payload, 'duration') !!}</h3>
                    </div>
                    <div>
                        <h4 class="text-base font-semibold text-secondary uppercase">JUMLAH PEKERJA:</h4>
                        <h3 class="text-white fort-bold text-2xl">{!! storyPayload($story->payload, 'manpower') !!}</h3>
                    </div>
                </div>
                <div>
                    <h4 class="text-base font-semibold text-secondary uppercase">JENIS TANAMAN:</h4>
                    <h3 class="text-white fort-bold text-2xl">{!! storyPayload($story->payload, 'type_plant') !!}</h3>
                </div>
            </div>
        </div>
    @endforeach

    <div class="flex justify-center mb-20 lg:mb-32">
        <button wire:click="loadMore" @disabled($stories->count() >= $total) @class(['px-2.5 py-0.5 text-sm rounded-full bg-secondary hover:bg-primary uppercase font-medium hover:text-white', '!bg-gray-200' => $stories->count() >= $total]) >Selengkapnya</button>
    </div>
</div>
