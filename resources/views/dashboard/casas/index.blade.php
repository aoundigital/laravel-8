<h1>Casas</h1>

@foreach ($casas as $casa)
    <p>
        Nota Higiene: {{ $casa->acomoda_higiene }} | Id da Avaliação: {{ $casa->avaliacoes_id }}
    </p>
@endforeach
