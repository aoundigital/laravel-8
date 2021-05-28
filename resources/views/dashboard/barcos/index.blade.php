<h1>Barcos</h1>

@foreach ($barcos as $barco)
    <p>
        Nota Higiene: {{ $barco->acomoda_higiene }} | Id da Avaliação: {{ $barco->avaliacoes_id }}
    </p>
@endforeach
