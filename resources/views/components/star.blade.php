@props([
    'star' => 5,
    'position' => 'justify-center'
])

<div class="flex gap-4 {{ $position }}">
    @for($i = 1; $i <= $star; $i++)
        <div class="size-10">
            <?xml version="1.0" encoding="UTF-8"?>
                <svg id="Layer_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.72 21.66">
                <defs>
                    <style>
                    .cls-1 {
                        fill: #fdc110;
                    }
                    </style>
                </defs>
                <g id="Home">
                    <polygon class="cls-1" points="18.27 21.66 11.29 16.63 4.23 21.55 6.86 13.36 0 8.16 8.6 8.13 11.43 0 14.11 8.17 22.72 8.35 15.77 13.43 18.27 21.66"/>
                </g>
                </svg>
        </div>
    @endfor
</div>
