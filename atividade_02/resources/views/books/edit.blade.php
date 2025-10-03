<html>
<head></head>
<body class="p-4">
    <h1>Editar Livro</h1>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Título</label>
            <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
        </div>

        <div class="mb-3">
            <label>Resumo</label>
            <textarea name="summary" class="form-control" required>{{ $book->summary }}</textarea>
        </div>

        <div class="mb-3">
            <label>Data de Publicação</label>
            <input type="date" name="publication_date" class="form-control" value="{{ $book->publication_date }}" required>
        </div>

        <div class="mb-3">
            <label>Páginas</label>
            <input type="number" name="pages" class="form-control" value="{{ $book->pages }}" required>
        </div>

        <div class="mb-3">
            <label>Disponível?</label>
            <select name="available" class="form-control">
                <option value="1" {{ $book->available ? 'selected' : '' }}>Sim</option>
                <option value="0" {{ !$book->available ? 'selected' : '' }}>Não</option>
            </select>
        </div>

        <button class="btn btn-primary">Atualizar</button>
    </form>
</body>
</html>
