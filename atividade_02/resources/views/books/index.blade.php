<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <h1>Lista de Livros</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Novo Livro</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Páginas</th>
            <th>Disponível</th>
            <th>Ações</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->pages }}</td>
            <td>{{ $book->available ? 'Sim' : 'Não' }}</td>
            <td>
                <a href="{{ route('books.show', $book) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Excluir este livro?')" class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
