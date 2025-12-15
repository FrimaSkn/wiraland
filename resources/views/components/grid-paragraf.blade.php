@props([
    'title' => '',
    'desc' => ''
])

<div class="md:grid grid-cols-2 gap-[10%] container max-md:space-y-3">
    <div data-aos="fade-up" class="section-title !py-0">{{ $title }}</div>
    <div data-aos="fade-up">{!! nl2br($desc) !!}</div>
</div>
