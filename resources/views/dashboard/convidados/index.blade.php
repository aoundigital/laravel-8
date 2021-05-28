<h1>Convidados</h1>

@foreach ($convidados as $convidado)
    <p>
        Nome: {{ $convidado->nome }} | {{ $convidado->id }}
    </p>
@endforeach
