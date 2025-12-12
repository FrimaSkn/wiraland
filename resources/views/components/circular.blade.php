<div class="relative">
    <div class="absolute inset-0 flex items-center justify-center z-50">
        <div class="container grid grid-cols-3 gap-[5%] lg:gap-[10%] py-4 px-[9%]">
            @foreach ($generalContent->circular as $item)
                <div class="w-full aspect-square bg-secondary rounded-full p-4 lg:p-12 flex justify-center items-start">
                    <div class="space-y-1 lg:space-y-4">
                        <img class="size-[25%] md:size-[30%] mx-auto"  src="{{ Storage::disk('public_pages')->url($item['icon']) }}" alt="">
                        <div class="font-bold text-[8px] md:text-base lg:text-4xl text-center">{{ $item['number'] }}</div>
                        <div class="font-bold text-[6px] md:text-base lg:text-lg text-center uppercase">{{ $item['text'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
