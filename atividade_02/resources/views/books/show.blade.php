<html>
<head></head>
<body class="p-4">
    <h1>Detalhes do Livro</h1>
    <p><strong>ID:</strong> {{ $book->id }}</p>
    <p><strong>Título:</strong> {{ $book->title }}</p>
    <p><strong>Resumo:</strong> {{ $book->summary }}</p>
    <p><strong>Data de Publicação:</strong> {{ $book->publication_date }}</p>
    <p><strong>Páginas:</strong> {{ $book->pages }}</p>
    <p><strong>Disponível:</strong> {{ $book->available ? 'Sim' : 'Não' }}</p>
</body>
</html>
