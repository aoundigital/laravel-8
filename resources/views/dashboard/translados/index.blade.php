<h1>Translados</h1>

@foreach ($translados as $translado)
    <p>
       Prefixo: {{ $translado->prefixo }} | Horario: {{ $translado->horario }}
    </p>
@endforeach
