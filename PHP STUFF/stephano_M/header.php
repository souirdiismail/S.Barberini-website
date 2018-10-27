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
                        <a class="nav-link" href="<?php if($pageName=='index'){echo '#chi_sono';}else{ echo 'chi sono';}?>">Chi sono</a>
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
        <style>
            article,aside,footer,header,nav,section{
                display:block
            }
            figcaption,figure,main{
                display:block
            }
            figure {
                margin: 1em 40px
            }

            hr {
                box-sizing: content-box;
                height: 0;
                overflow: visible
            }

            pre {
                font-family: monospace, monospace;
                font-size: 1em
            }

            a {
                background-color: transparent;
                -webkit-text-decoration-skip: objects
            }

            a:active,
            a:hover {
                outline-width: 0
            }

            abbr[title] {
                border-bottom: none;
                text-decoration: underline;
                text-decoration: underline dotted
            }

            b,
            strong {
                font-weight: inherit;
                font-weight: bolder
            }

            code,
            kbd,
            samp {
                font-family: monospace, monospace;
                font-size: 1em
            }

            dfn {
                font-style: italic
            }

            mark {
                background-color: #ff0;
                color: #000
            }

            small {
                font-size: 80%
            }

            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline
            }

            sub {
                bottom: -.25em
            }

            sup {
                top: -.5em
            }

            audio,
            video {
                display: inline-block
            }

            audio:not([controls]) {
                display: none;
                height: 0
            }

            img {
                border-style: none
            }

            svg:not(:root) {
                overflow: hidden
            }

            button,
            input,
            optgroup,
            select,
            textarea {
                font-family: sans-serif;
                font-size: 100%;
                line-height: 1.15;
                margin: 0
            }

            button,
            input {
                overflow: visible
            }

            button,
            select {
                text-transform: none
            }

            button,
            html [type="button"],
            [type="reset"],
            [type="submit"] {
                -webkit-appearance: button
            }

            button::-moz-focus-inner,
            [type="button"]::-moz-focus-inner,
            [type="reset"]::-moz-focus-inner,
            [type="submit"]::-moz-focus-inner {
                border-style: none;
                padding: 0
            }

            button:-moz-focusring,
            [type="button"]:-moz-focusring,
            [type="reset"]:-moz-focusring,
            [type="submit"]:-moz-focusring {
                outline: 1px dotted ButtonText
            }

            fieldset {
                border: 1px solid silver;
                margin: 0 2px;
                padding: .35em .625em .75em
            }

            legend {
                box-sizing: border-box;
                color: inherit;
                display: table;
                max-width: 100%;
                padding: 0;
                white-space: normal
            }

            progress {
                display: inline-block;
                vertical-align: baseline
            }

            textarea {
                overflow: auto
            }

            [type="checkbox"],
            [type="radio"] {
                box-sizing: border-box;
                padding: 0
            }

            [type="number"]::-webkit-inner-spin-button,
            [type="number"]::-webkit-outer-spin-button {
                height: auto
            }

            [type="search"] {
                -webkit-appearance: textfield;
                outline-offset: -2px
            }

            [type="search"]::-webkit-search-cancel-button,
            [type="search"]::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit
            }

            details,
            menu {
                display: block
            }

            summary {
                display: list-item
            }

            canvas {
                display: inline-block
            }

            template {
                display: none
            }

            [hidden] {
                display: none
            }

            .herbalife-popup {
                position: fixed !important;
                top: 0 !important;
                right: 0 !important;
                bottom: 0 !important;
                left: 0 !important;
                z-index: 999999 !important;
                text-align: center !important;
                display: none;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-bg {
                position: absolute !important;
                top: 0 !important;
                right: 0 !important;
                bottom: 0 !important;
                left: 0 !important;
                background: #000 !important;
                opacity: 0.9 !important;
                z-index: 999998 !important
            }

            .herbalife-wrap {
                min-width: 400px !important;
                height: auto !important;
                max-height: 100% !important;
                position: absolute !important;
                top: 50% !important;
                left: 50% !important;
                z-index: 999999 !important;
                transform: translate(-50%, -50%) !important;
                margin: 0 auto !important;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important;
            }

            .herbalife-content {
                position: relative !important;
                display: inline-block !important;
                padding: 15px !important;
                background: #fff !important;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-info {
                position: relative !important;
                float: left !important;
                padding: 15px !important;
                border: 3px solid #7ac142 !important;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-info h1 {
                width: calc(100% - 2rem) !important;
                margin: 0 0 15px 0 !important;
                padding: 0 !important;
                font-size: 24px !important;
                line-height: 27px !important;
                font-weight: bold !important;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-info .herbalife-close {
                position: absolute !important;
                top: 5px !important;
                right: 5px !important;
                background: #7ac142 !important;
                border-radius: 10px !important;
                font-size: 12px !important;
                color: #fff !important;
                padding: 0 8.7px !important;
                text-decoration: none !important;
                text-align: center !important;
                cursor: pointer !important;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
            }

            .herbalife-info .herbalife-close:hover {
                background: #6c6d70 !important;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
            }

            .herbalife-info .herbalife-row {
                position: relative !important;
                float: left !important;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-info .one-third {
                width: 25% !important;
                position: relative !important;
                float: left !important;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-info .one-third.border {
                width: calc(25% - 16px) !important;
                padding: 0 15px 0 0 !important;
                border-right: 1px solid #7ac142 !important;
                font-family: Helvetica, Arial, sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-info .one-third img {
                max-width: 100% !important;
                height: auto;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-info .one-third img.f-right {
                float: right !important;
                margin: 10px 0 0 0 !important;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-info .two-third {
                width: 75% !important;
                position: relative !important;
                float: left !important;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-info .two-third.border {
                width: calc(75% - 15px) !important;
                padding: 0 0 0 15px !important;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-info .two-third p {
                margin: 0 0 10px 0 !important;
                padding: 0 !important;
                font-size: 16px !important;
                line-height: 20px !important;
                text-align: left !important;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-info .two-third p.copy {
                margin: 15px 0 0 0 !important;
                font-size: 14px !important;
                line-height: 13px !important;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-info .two-third p span {
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #7ac142 !important
            }

            .herbalife-info .two-third p a {
                font-weight: bold;
                text-decoration: none;
                font-family: 'Helvetica', 'Arial', sans-serif !important;
                color: #6c6d70 !important
            }

            .herbalife-info .two-third p a:hover {
                text-decoration: underline !important
            }

            .clear {
                height: 0px !important;
                line-height: 0px !important;
                clear: both !important
            }

            @media screen and (max-width:767px) {
                .herbalife-wrap {
                    min-width: 90% !important
                }

                .herbalife-info .one-third,
                .herbalife-info .two-third,
                .herbalife-info .one-third.border,
                .herbalife-info .two-third.border {
                    width: 100% !important;
                    margin: 0 0 10px 0 !important;
                    padding: 0 !important;
                    border: 0 !important
                }

                .herbalife-info .one-third.border {
                    text-align: center !important
                }

                .herbalife-info .two-third,
                .herbalife-info .two-third.border {
                    margin: 0 !important
                }

                .herbalife-info .one-third {
                    margin: 0 !important
                }

                .herbalife-info .one-third img.f-right {
                    float: left !important;
                    margin: 5px 0 0 0 !important
                }
            }

            @media screen and (min-width:768px) {
                .herbalife-wrap {
                    min-width: 768px !important
                }
            }

            @media screen and (min-width:850px) {
                .herbalife-wrap {
                    min-width: 850px !important
                }
            }
        </style>
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
    <script type="text/javascript" src="/herbalife-popup/js-include.js"></script>