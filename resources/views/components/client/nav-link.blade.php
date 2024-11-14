@props(['active' => false])

<li>
    <a {{ $attributes }} class="{{ $active ? 'active-link' : 'link' }}" aria-current="page">
        {{ $slot }}
    </a>
</li>
