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
        Quantidade de Dias: {{ $viagem->quantidade_dias }} <br>
        Data de Entrada: {{ $viagem->data_entrada }} <br>
        Data de Saída: {{ $viagem->data_saida }} <br>
        {{-- dado de outra tabela --}}
        Propriedade: {{ $viagem->propriedade->nome }}
        {{-- Reembolso: {{ $viagem->reembolso->nome_socio }} --}}


    </p>
    @endforeach

</body>
</html>
