<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="container-fluid-bg-color-container">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">FLP</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">TIENDA</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    CATEGORIAS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">HERRAMIENTAS ELECTRICAS</a></li>
                                    <li><a class="dropdown-item" href="#">HERRAMIENTAS MANUEALES</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">SIERRAS</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="BUSCAR" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">BUSCAR</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>