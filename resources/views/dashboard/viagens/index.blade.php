<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1>Viagens!</h1>

    <a href="{{ route('viagens.criar') }}">Criar nova Viagem</a>

    @foreach ($viagens as $viagem)
    <p>
        Estadia: {{ $viagem->quantidade_dias }} dias<br>
        Entrada: {{ $viagem->data_entrada }} <br>
        {{-- dado de outra tabela --}}
        Propriedade: {{ $viagem->propriedade->nome }} <br>
        {{-- array de reembolsos --}}
        Reembolso:
        @foreach ( $viagem->reembolso as $remb )
            {{ $remb->nome_socio }} /
        @endforeach
        <br>
        {{-- array de pernoites --}}
        <?php $sum = 0;?>
        Pernoite: {{$viagem->pernoite->count()}}
        @foreach ( $viagem->pernoite as $per )
            <?php $sum += $per['numero_pessoas'] ?>
        @endforeach
        @if ($sum != 0)
            => {{ $sum }} pessoas
        @endif
        <br>
        {{-- array de translados --}}
        Translado:
        @if ($viagem->translado->count() != 0)
            {{$viagem->translado->count()}} =>
            @foreach ( $viagem->translado as $trans )
                {{ $trans->prefixo }} |
            @endforeach
        @endif
        <br>
        Avaliações: {{$viagem->avaliacao->count()}}
    </p>
    @endforeach

</body>
</html>
