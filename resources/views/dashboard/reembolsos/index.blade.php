<h1>Reembolsos</h1>

@foreach ($reembolsos as $reembolso)
    <p>
        {{ $reembolso->nome_socio }} | {{ $reembolso->id }} <br>
        Id da Viagem:  {{ $reembolso->viagems_id }}
    </p>
@endforeach
