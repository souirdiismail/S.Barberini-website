<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php  $currentFile = $_SERVER["PHP_SELF"];
  $parts = Explode('/', $currentFile);
  $parts = $parts[count($parts) - 1];
  $parts = Explode('.', $parts);
  $pageName = $parts[0];
    ?>

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
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function () {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#165c74"
                    },
                    "button": {
                        "background": "#4b81e8"
                    }
                },
                "theme": "classic",
                "content": {
                    "href": "cookies" /* link li haysiftk f learn more*/
                }
            })
        });
</script>
</head>

<body>
    <!-- NAVBAR -->
    <div>
        <nav class="navbar navbar-expand-xl navbar-dark container col-12">
            <a class="navbar-brand" href="index"><img src="assets/c24 logo dark.png" class="logo" alt="..."></a>
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
                        <a class="nav-link" href="index">Home<span class="sr-only">(current)</span></a>
                        <svg class="line" viewBox="0 0 40 1" preserveAspectRatio="none">
                            <path d="M0 1 L40 1" />
                            <path d="M0 1 L40 1" class="focusedline" />
                        </svg>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?php if($pageName=='index'){echo '#Prodotto';}else{ echo 'index#Prodotto';}?>">Prodotto</a>
                        <svg class="line" viewBox="0 0 40 1" preserveAspectRatio="none">
                            <path d="M0 1 L40 1" />
                            <path d="M0 1 L40 1" class="focusedline" />
                        </svg>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="Video">Video</a>
                        <svg class="line" viewBox="0 0 40 1" preserveAspectRatio="none">
                            <path d="M0 1 L40 1" />
                            <path d="M0 1 L40 1" class="focusedline" />
                        </svg>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?php if($pageName=='index'){echo '#chi_sono';}else{ echo 'chi sono';}?>">Chi
                            sono</a>
                        <svg class="line" viewBox="0 0 40 1" preserveAspectRatio="none">
                            <path d="M0 1 L40 1" />
                            <path d="M0 1 L40 1" class="focusedline" />
                        </svg>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="DIVENTA PERSONAL COACH">Diventa personal coach</a>
                        <svg class="line" viewBox="0 0 40 1" preserveAspectRatio="none">
                            <path d="M0 1 L40 1" />
                            <path d="M0 1 L40 1" class="focusedline" />
                        </svg>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?php if($pageName=='index' ){echo '#ContactUs' ;}else{ echo 'index#ContactUs';}?>">CONTATTO
                            SULLA</a>
                        <svg class="line" viewBox="0 0 40 1" preserveAspectRatio="none">
                            <path d="M0 1 L40 1" />
                            <path d="M0 1 L40 1" class="focusedline" />
                        </svg>
                    </li>
                    <li class="nav-item mx-2 bordered">
                        <a class="nav-link" href="https://club24hl.goherbalife.com/Catalog/Home/Index/it-IT/" target="_blank">Il nostro negozio</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="big-title" style="<?php 
        
        if($pageName=='index') echo 'display:none;' ?>">
        <span class="title">
            <?php
                echo $pageName;
               
            ?>
        </span>
    </div>
    <!-- END NAVBAR -->

    <!-- POPUP -->
    <div id="herbalifepopup">
        <div class="herbalife-popup" id="wc_herba_popup" style="display: none;">
            <div class="herbalife-bg">&nbsp;</div>
            <div class="herbalife-wrap">
                <div class="herbalife-content">
                    <div class="herbalife-info"><a class="herbalife-close" href="#" onclick="wcHidePopUp()">x</a>
                        <h1>SEI GIA’ IN CONTATTO CON UN MEMBRO INDIPENDENTE HERBALIFE?</h1>
                        <div class="herbalife-row">
                            <div class="one-third border"><img alt="You steps" src="/herbalife-popup/images/steps-img.jpg"></div>
                            <div class="two-third border">
                                <p>Scopri i benefici di ricevere l’assistenza da parte di Membro Indipendente
                                    Herbalife.</p>
                                <p>Se conosci <span>già un Membro Indipendente Herbalife</span>, assicurati di <span>restare
                                        in contatto</span> con lui per beneficiare del suo supporto.</p>
                            </div>
                            <div class="clear">&nbsp;</div>
                        </div>
                        <div class="herbalife-row">
                            <div class="two-third">
                                <p class="copy">I prodotti Herbalife sono venduti esclusivamente attraverso i nostri
                                    Membri
                                    Indipendenti. Questo sito è gestito da un Membro Indipendente Herbalife e non da
                                    Herbalife Italia SpA. Il sito web ufficiale Herbalife è <a href="http://www.herbalife.it"
                                        target="_blank">www.herbalife.it</a></p>
                            </div>
                            <div class="one-third"><img alt="Herbalife Logo" class="f-right" src="/herbalife-popup/images/herbalife-logo.jpg"></div>
                            <div class="clear">&nbsp;</div>
                        </div>
                        <div class="clear">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </div>