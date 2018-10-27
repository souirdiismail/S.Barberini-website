<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Lato font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <!-- AOS scrolling animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" type="text/css" href="swiper.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>

<body>
    <!-- NAVBAR -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark container col-12">
            <a class="navbar-brand" href="#"><img src="assets/c24 logo dark.png" class="logo" alt="..."></a>
            <button class="navbar-toggler navbuton" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                        <path stroke="rgba(27,86,138,1)" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10"
                            d="M4 7h22M4 15h22M4 23h22" /></svg>
                </span>
            </button>
            <div class=" collapse navbar-collapse customnav" id="navbarNavDropdown">
                <ul class="navbar-nav justify-content-end col-12">
                    <li class="nav-item mx-2 current">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                        <svg class="line" viewBox="0 0 40 1" preserveAspectRatio="none">
                            <path d="M0 1 L40 1" />
                            <path d="M0 1 L40 1" class="focusedline" />
                        </svg>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#Prodotto">Prodotto</a>
                        <svg class="line" viewBox="0 0 40 1" preserveAspectRatio="none">
                            <path d="M0 1 L40 1" />
                            <path d="M0 1 L40 1" class="focusedline" />
                        </svg>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="Video.php">Video</a>
                        <svg class="line" viewBox="0 0 40 1" preserveAspectRatio="none">
                            <path d="M0 1 L40 1" />
                            <path d="M0 1 L40 1" class="focusedline" />
                        </svg>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="chi sono.php">Chi sono</a>
                        <svg class="line" viewBox="0 0 40 1" preserveAspectRatio="none">
                            <path d="M0 1 L40 1" />
                            <path d="M0 1 L40 1" class="focusedline" />
                        </svg>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="DIVENTA PERSONAL COACH.php">Diventa personal coach</a>
                        <svg class="line" viewBox="0 0 40 1" preserveAspectRatio="none">
                            <path d="M0 1 L40 1" />
                            <path d="M0 1 L40 1" class="focusedline" />
                        </svg>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">CONTATTO SULLA</a>
                        <svg class="line" viewBox="0 0 40 1" preserveAspectRatio="none">
                            <path d="M0 1 L40 1" />
                            <path d="M0 1 L40 1" class="focusedline" />
                        </svg>
                    </li>
                    <li class="nav-item mx-2 bordered">
                        <a class="nav-link" href="#">Il nostro negozio</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="big-title" style="<?php 
         $currentFile = $_SERVER["PHP_SELF"];
  $parts = Explode('/', $currentFile);
  $parts = $parts[count($parts) - 1];
  $parts = Explode('.', $parts);
  $pageName = $parts[0];
        if($pageName=='index') echo 'display:none;' ?>">
        <span class="title">
            <?php
                echo $pageName;
               
            ?>
        </span>
    </div>
    <!-- END NAVBAR -->