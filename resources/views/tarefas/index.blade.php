<!DOCTYPE html>
<html>

<head>
    <title>Minhas Tarefas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @if (session('success'))
    <p class="success-message">{{ session('success') }}</p>
    @endif

    <header>
        <h1>Minhas Tarefas</h1>
    </header>

    <main>
        <div id="tarefas">
            <div>
                <a href="{{ route('tarefas.create') }}">+ Nova Tarefa</a>
            </div>

            <ul class="listagem">
                @foreach($tarefas as $tarefa)
                <li class="tarefa">
                    <span>{{ $tarefa->titulo }}</span>
                    @if($tarefa->concluida)
                    ✅
                    @endif

                    <div class="acoes">
                        <a href="{{ route('tarefas.edit', $tarefa) }}">Editar</a>

                        <form action="{{ route('tarefas.destroy', $tarefa) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">
                                Excluir
                            </button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </main>

</body>

</html>