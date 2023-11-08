
{{-- Un comoponente permite evitar escribir varias veces el mismo codigo html, y se ponen como variables para que al escribir 
el componente en el fichero necesario solo se deba modificar con un slot --}}

<div>
    <h3>{{ $title }}</h3>
    <img src="{{ asset('assets/img/avatar.png') }}" alt="" width="100px">
    <p>{{ $content }}</p>
</div>