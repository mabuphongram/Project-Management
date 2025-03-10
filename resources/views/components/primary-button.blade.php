<button {{ $attributes->merge(['type' => 'submit','class'=> 'rounded-md']) }}>
    {{ $slot }}
</button>

