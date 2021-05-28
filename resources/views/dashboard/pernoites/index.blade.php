<h1>Pernoites</h1>

@foreach ($pernoites as $pernoite)
    <p>
        Quantidade de Pessoas: {{ $pernoite->numero_pessoas }} | ID: {{ $pernoite->id }}
    </p>
@endforeach
