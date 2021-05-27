<h1>Propriedades</h1>

@foreach ($propriedades as $propriedade)
    <p>
        {{ $propriedade->nome }} | {{ $propriedade->id }}
    </p>
@endforeach
