<div x-data="tab">
    <h3 class="section-title text-center text-underline">Portfolio Kami</h3>

    <div class="flex gap-4 justify-center items-center mb-16">
        <button x-on:click="tab = 'all'"
            class="px-2.5 py-0.5 text-sm rounded-full bg-secondary hover:bg-primary uppercase font-medium hover:text-white"
            x-bind:class="{ '!bg-primary text-white': tab == 'all' }">semua</button>
        <button x-on:click="tab = '1'"
            class="px-2.5 py-0.5 text-sm rounded-full bg-secondary hover:bg-primary uppercase font-medium hover:text-white"
            x-bind:class="{ '!bg-primary text-white': tab == '1' }">pemerintahan</button>
        <button x-on:click="tab = '2'"
            class="px-2.5 py-0.5 text-sm rounded-full bg-secondary hover:bg-primary uppercase font-medium hover:text-white">kantor</button>
        <button x-on:click="tab = '3'"
            class="px-2.5 py-0.5 text-sm rounded-full bg-secondary hover:bg-primary uppercase font-medium hover:text-white">tempat wisata</button>
        <button x-on:click="tab = '4'"
            class="px-2.5 py-0.5 text-sm rounded-full bg-secondary hover:bg-primary uppercase font-medium hover:text-white">komersial</button>
    </div>

    <div x-show="tab == 'all'">
        <div class="portfolio_slider splide">
            <div class="splide__track">
                <ul class="splide__list flex">
                    @for ($i = 0; $i < 8; $i++)
                        <li class="w-[300px] flex-shrink-0 splide__slide">
                            <div class="aspect-[4/5] bg-center bg-cover rounded-lg shadow-lg" style="background-image: url('{{ asset('assets/images/portfolio/img-01.jpg') }}')"></div>
                            <h4 class="text-lg font-bold mt-4">Proyek Nama {{ $i + 1 }}</h4>
                            <p class="text-sm text-gray-600">Kategori Proyek</p>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
    <div x-show="tab == '1'">1</div>
    <div x-show="tab == '2'">2</div>
    <div x-show="tab == '3'">3</div>
    <div x-show="tab == '4'">4</div>
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
