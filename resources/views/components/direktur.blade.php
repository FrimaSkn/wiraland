<section class="bg-center bg-cover" style="background-image: url('{{ asset('assets/images/bg-testimonial.jpg') }}')">
    <div class="grid grid-cols-12">
        <div class="col-span-12 lg:col-span-5 flex items-end">
            <img class="w-full" src="{{ asset('assets/images/direktur.png') }}" alt="">
        </div>
        <div class="col-span-12 lg:col-span-7 pb-8 lg:pr-[20%] flex items-center">
            <div class="max-lg:text-center max-md:container">
                <h3 class="section-title text-underline left-m-center">{{ $generalContent->director[0]['title'] }}</h3>
                <p class="text-xl lg:text-5xl xl:text-7xl text-primary leading-none mb-4 font-birthstone">{!! nl2br($generalContent->director[0]['tagline']) !!}</p>
                <div class="mb-8">
                    {!! str($generalContent->director[0]['message'])->sanitizeHtml() !!}
                </div>
                <h3 class="text-2xl lg:text-3xl font-bold text-primary">{{ $generalContent->director[0]['name'] }}</h3>
                <h4 class="max-lg:text-sm">{{ $generalContent->director[0]['position'] }}</h4>
            </div>
        </div>
    </div>
</section>
