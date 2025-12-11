@props([
    'title' => '',
    'desc' => ''
])

<div class="md:grid grid-cols-2 gap-[10%] container max-md:space-y-3">
    <div class="section-title !py-0">{{ $title }}</div>
    <div>{!! nl2br($desc) !!}</div>
</div>
