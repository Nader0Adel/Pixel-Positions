@props([
    'tag',
])

<a href="/tags/{{ strtolower($tag->name) }}" class="bg-white/10 hover:bg-white/50 px-2 py-1 rounded-xl text-sm transition-colors duration-300">{{ $tag->name }} </a>
