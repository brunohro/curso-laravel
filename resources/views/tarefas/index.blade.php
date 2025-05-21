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

    <h1>Minhas Tarefas</h1>

    <a href="{{ route('tarefas.create') }}">+ Nova Tarefa</a>

    <ul>
        @foreach($tarefas as $tarefa)
        <li>
            {{ $tarefa->titulo }}
            @if($tarefa->concluida)
            ✅
            @endif
            <a href="{{ route('tarefas.edit', $tarefa->id) }}">Editar</a>
            <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>

</html>