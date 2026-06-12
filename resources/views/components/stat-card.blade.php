@props(['label', 'value', 'color' => 'gray'])

@php
    $colors = [
        'red' => 'text-red-600',
        'green' => 'text-green-600',
        'gray' => 'text-gray-600',
        'amber' => 'text-amber-600',
    ]
    $colors = $colors[$color] ?? $colors['gray'];
@endphp
