<h1>Sócios</h1>

@foreach ($socios as $socio)
    <p>
        {{ $socio->nome }} | {{ $socio->id }}
    </p>
@endforeach
