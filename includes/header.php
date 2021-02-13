<?php include_once('./enviroments.php') ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Easy Food</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="icon" href="icon.svg">

  <link rel="stylesheet" href="<?php echo BASE_URL ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/css/main.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/css/slider.css">>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/css/menu.css">>
</head>

<body>
  <!-- Menu de navegación -->
  <nav class="navbar">
    <div class="container">
      <a href="#"><img src="img/logoEasyFood.svg" alt='' class="logo"></a>
      <div class="navbarContent" id="navbarContent">
        <ul class="navbar-nav">
          <li class="nav-item-nicio">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item-menu">
            <a class="nav-link" href="menu.php">Menú</a>
          </li>
          <li class="nav-item-nosotros">
            <a class="nav-link" href="#NosotrosPart">
              Nosotros
            </a>
          </li>
          <li class="nav-item-ubicanos">
            <a class="nav-link" href="#UbicanosPart">Ubícanos</a>
          </li>
          <li class="nav-item-carrito">
            <a class="nav-link" href="#"><img src="img/shopping-cart.svg" alt="" class="carritoDeCompras"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>