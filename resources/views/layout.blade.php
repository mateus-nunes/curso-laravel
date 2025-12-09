<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minicurso Laravel')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="d-flex flex-column min-vh-100">
    
    <!-- MENU SUPERIOR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">Minicurso Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('products.index') }}">CRUD Produtos</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- CONTEUDO PRINCIPAL -->
    <main class="container">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('main')

    </main>

    <!-- RODAPÉ -->
    <div class="mt-auto">
        <footer class="border-top bg-body-tertiary border-top py-3 my-4">
                
            <div class="container text-center">
                <h6>IFTO Campus Colinas do Tocantins</h6>
                <h5>Feito por <strong>Prof. Mateus Nunes</strong></h5>
            </div>

        </footer>
    </div>
   

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>