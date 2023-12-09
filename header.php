<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <title>Aula Bootstrap</title>
</head>

<body>
    <header class="container">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">
                <img src="img/RA-ES-IMPORTADAS-27-11-2023.png" alt="Logo do dev leo fulco" class="img-fluid" style="max-width: 20%;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#sobre">SERVIÇOS<span class="sr-only">(atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">CONTATO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RAÇÕES</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="products.php">All Breeds</a>
                            <a class="dropdown-item" href="products.php">Hills</a>
                            <a class="dropdown-item" href="products.php">Eukanuba</a>
                            <a class="dropdown-item" href="products.php">Friskeis</a>
                            <a class="dropdown-item" href="products.php">Golden</a>
                            <a class="dropdown-item" href="products.php">Champ</a>
                            <a class="dropdown-item" href="products.php">Excellence</a>
                            <a class="dropdown-item" href="products.php">Fri Dog</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    

    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
