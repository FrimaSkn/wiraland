<div>
    <ul class="grid grid-cols-3 md:grid-cols-5">
        @foreach ($clients as $key => $client)
            <li class="p-2">
                <img data-aos="fade-up" data-aos-delay="{{ $key * 100 }}" src="{{ $client->getFirstMediaUrl('partner_logo') }}" alt="{{ $client->name }}">
            </li>
        @endforeach
    </ul>

      <div class="flex justify-center mt-10">
        <button wire:click="loadMore" @disabled($clients->count() >= $totalClients) @class(['px-2.5 py-0.5 text-sm rounded-full bg-secondary hover:bg-primary uppercase font-medium hover:text-white', '!bg-gray-200' => $clients->count() >= $totalClients]) >Selengkapnya</button>
    </div>
</div>
