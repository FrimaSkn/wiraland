@props([
    'title' => '',
    'desc' => ''
])

<div class="grid grid-cols-2 gap-[10%] container">
    <div class="section-title !py-0">{{ $title }}</div>
    <div>{{ $desc }}</div>
</div>
