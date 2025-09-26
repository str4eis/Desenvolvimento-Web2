<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="my-4">Adicionar Autor</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div >
            <label for="name" >Nome do produto</label>
            <input type="text" id="name" name="name" required>            
        </div>
        <div >
            <label for="description" >Descrição do produto: </label>
            <input type="text" id="description" name="description" required>            
        </div>

        <div >
            <label for="value" >Valor do produto: </label>
            <input type="number" id="value" name="value" required>            
        </div>

        <div >
            <label for="expiration-date" >Validade: </label>
            <input type="date" id="expiration-date" name="expiration-date" required>            
        </div>

        <div >
            <label for="stock" >Estoque: </label>
            <input type="number" id="stock" name="stock" required>            
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Salvar
        </button>
        
    </form>
</body>
</html>
