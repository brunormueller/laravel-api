<form action="{{ $action }}" method="POST">
    @csrf
    @isset($nome)
    @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" @isset($nome)value="{{ $nome }}"@endisset
            name="nome" id="nome">
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
