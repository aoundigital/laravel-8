<h1>Avaliações</h1>

@foreach ($avaliacaos as $avaliacao)
    <p>
        ID da Viagem: {{ $avaliacao->viagems_id }} | ID do Sócio: {{ $avaliacao->socios_id }} | ID da Propriedade: {{ $avaliacao->propriedades_id }}
    </p>
@endforeach
