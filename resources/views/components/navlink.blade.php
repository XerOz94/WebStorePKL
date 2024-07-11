
@props(['active' => false])

<a class="{{ $active ? 'nav-link fs-5 active' : 'nav-link' }}"
    aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}>
    {{ $slot }}
</a>
