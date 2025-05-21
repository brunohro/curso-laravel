<!-- resources/views/tarefas/create.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Nova Tarefa</title>
</head>

<body>
    <h1>Criar Nova Tarefa</h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $erro)
        <li style="color: red;">{{ $erro }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>
        <br><br>
        <button type="submit">Salvar</button>
        <a href="{{ route('tarefas.index') }}">Cancelar</a>
    </form>
</body>

</html>