<div x-data="tab">
    <h3 class="section-title text-center text-underline">Portfolio Kami</h3>

    <div class="flex max-lg:flex-wrap gap-4 justify-center items-center mb-16">
        <button wire:click="setCategory(null)"
            class="px-2.5 py-0.5 text-sm rounded-full bg-secondary hover:bg-primary uppercase font-medium hover:text-white"
            x-bind:class="{ '!bg-primary text-white': '{{ $selectedCategory == null }}' }">semua</button>

        @foreach ($categories as $category)
            <button wire:click="setCategory({{ $category->id }})"
                class="px-2.5 py-0.5 text-sm rounded-full bg-secondary hover:bg-primary uppercase font-medium hover:text-white"
                x-bind:class="{ '!bg-primary text-white': '{{ $category->id == $selectedCategory }}' }">{{ strtolower($category->name) }}</button>
        @endforeach
    </div>

    {{-- @foreach ($portfolios as $porto)
        <div>{{ $porto->title }}</div>
    @endforeach --}}

    <div class="portfolio_slider splide">
        <div class="splide__track">
            <ul class="splide__list flex">
                @foreach ($portfolios as $portfolio)
                    <li class="w-[300px] flex-shrink-0 splide__slide">
                        <div class="aspect-[4/5] bg-center bg-cover rounded-lg shadow-lg" style="background-image: url('{{ $portfolio->getFirstMediaUrl('portfolio_image') }}')"></div>
                        <p class="text-sm text-primary font-bold mt-4">{{ $portfolio->category->name }}</p>
                        <h4 class="text-base">{{ $portfolio->title }}</h4>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@push('after-scripts')
    <script>
        Alpine.data('tab', () => ({
            init() {
                this.tab = 'all';
            },
        }));
    </script>
@endpush
