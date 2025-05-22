<!DOCTYPE html>
<html>

<head>
    <title>Editar Tarefa</title>
</head>

<body>
    <h1>Editar Tarefa</h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $erro)
        <li style="color: red;">{{ $erro }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('tarefas.update', $tarefa) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="{{ $tarefa->titulo }}" required>

        <button type="submit">Salvar</button>
        <a href="{{ route('tarefas.index') }}">Cancelar</a>
    </form>
</body>

</html>