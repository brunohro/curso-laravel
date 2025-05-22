<!-- resources/views/tarefas/index.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Minhas Tarefas</title>
</head>

<body>
    @if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif

    <h1 style="color: red;">Minhas Tarefas</h1>

    <a href="{{ route('tarefas.create') }}">+ Nova Tarefa</a>

    <ul>
        @foreach($tarefas as $tarefa)
        <li>
            {{ $tarefa->titulo }}
            @if($tarefa->concluida)
            ✅
            @endif

            <a href="{{ route('tarefas.edit', $tarefa) }}">Editar</a>

            <form action="{{ route('tarefas.destroy', $tarefa) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>

</html>