<h1>Cadastrar nova Viagem</h1>

@if ($errors->any())
    <ul>
        @foreach ( $errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('viagens.enviar') }}" method="POST">
    @csrf

    <label for="quantidade_dias">Quantidade Dias</label>
    <input type="number" name="quantidade_dias" id="quantidade_dias" value="{{ old('quantidade_dias') }}">

    <label for="propriedades_id">Propriedade</label>
    <select name="propriedades_id" id="propriedades_id">
        <option value="1" @if(old('propriedades_id') === '1') selected @endif>Campos do Jordão</option>
        <option value="2" @if(old('propriedades_id') === '2') selected @endif>Guarujá</option>
        <option value="3" @if(old('propriedades_id') === '3') selected @endif>Avaré / Arandu</option>
        <option value="4" @if(old('propriedades_id') === '4') selected @endif>Angra dos Reis</option>
    </select>

    <label for="data_entrada">Data de entrada</label>
    <input type="date" name="data_entrada" id="data_entrada" value="{{ old('data_entrada') }}">

    <label for="data_saida">Data de saída</label>
    <input type="date" name="data_saida" id="data_saida" value="{{ old('data_saida') }}">

    <button type="submit">Enviar</button>
</form>
