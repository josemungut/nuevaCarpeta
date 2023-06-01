

<button id="boton"  {{ $attributes->merge(['type' => 'submit', 'class' => 'fadeIn fourth']) }}>
    {{ $slot }}
</button>
