<!doctype html>

<html lang="sr-RS-latin">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rololux</title>
    <meta name="Biljana Ljubojevic" content="Task">
    <!-- CSS file -->
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
<div class="container">
    <nav class="navbar navbar-inverse  navbar-toggleable-md">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarsExampleContainer" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><span class="rolo">ROLO</span><span class="lux">LUX</span><span class="ns"> NS</span></a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarmain">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Pocetna<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">O Nama</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Proizvodi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="mainhead">
        <div id="crausel-big" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#crausel-big" data-slide-to="0" class="active"></li>
                <li data-target="#crausel-big" data-slide-to="1"></li>
                <li data-target="#crausel-big" data-slide-to="2"></li>
                <li data-target="#crausel-big" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="box carousel-item active">
                    <img src="/img/hero/pic1.jpg" class="d-block img-responsive img-center">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Pvoljno</h3>
                        <p>jeftino</p>
                    </div>
                </div>
                <div class="box carousel-item">
                    <img src="/img/hero/pic2.jpg" class="d-block img-responsive img-center">
                </div>
                <div class="box carousel-item">
                    <img src="/img/hero/pic3.jpg" class="d-block img-responsive img-center">
                </div>
                <div class="box carousel-item">
                    <img src="/img/hero/pic4.jpg" class="d-block img-responsive img-center">
                </div>
            </div>
        </div>
    </header>
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/local-javascript.js"></script>
</body>
</html>