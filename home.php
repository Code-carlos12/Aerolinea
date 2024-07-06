<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.html");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aeropuerto Carlos Code</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- === HEADER == -->
    <header id="header" class="fixed-top">
        <div class="container">
            <h1 class="logo"><a href="home.php">MMCA<span>.</span></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="#">Reservas</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Listas de Aerolineas</span><i class="bi"></i></a>
                        <ul>
                            <li><a href="https://www.copaair.com/es-gs/">Copa Airlines</a></li>
                            <li><a href="https://www.united.com/es/us/">United Airlines</a></li>
                            <li><a href="https://www.aa.com/homePage.do?locale=es_AR">American Airlines</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="#">Sobre el sitio</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- === Hero Section === -->
    <section id="hero">
        <div class="container">
            <div>
                <h1>AEROPUERTO INTERNACIONAL DE PANAMÁ <span>.</span></h1>
                <h2>AEROPUERTO INTERNACIONAL GENERAL CARLOS GONZALEZ</h2>
            </div>
        </div>
    </section>
</body>
</html>
