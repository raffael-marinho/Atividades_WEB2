<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <h1>Adicionar Livro</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Título</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Resumo</label>
            <textarea name="summary" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>Data de Publicação</label>
            <input type="date" name="publication_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Número de Páginas</label>
            <input type="number" name="pages" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Disponível?</label>
            <select name="available" class="form-control">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>

        <button class="btn btn-success">Salvar</button>
    </form>
</body>
</html>
