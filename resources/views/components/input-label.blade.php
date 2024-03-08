@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-black dark:black']) }}>
    {{ $value ?? $slot }}
</label>
