<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" 
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Bootstrap Builder</title>

        <link rel="stylesheet" href="_cdn/css/bootstrap_custom.css">        
        <link rel="stylesheet" href="_cdn/css/app.css">
    </head>
    <body>

        <header class="main_header">

            <div class="header_bar bg-front">
                <div class="container">
                    <div class="row">
                        <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                            <i class="icon-location-arrow"></i>
                            <p class="my-auto ml-3">Avenida Pequeno Principe, 0 Campeche</br>Florianópolis/SC</p>
                        </div>

                        <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                            <i class="icon-clock-o"></i>
                            <p class="my-auto ml-3">Seg/Sex: 09:00h - 18:00h</br>Sáb/Dom: Plantão</p>
                        </div> 

                        <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                            <i class="icon-envelope"></i>
                            <p class="my-auto ml-3">contato@minhaimob.com.br</br>+55(48)3322-1234</p>
                        </div>                         
                    </div>                    
                </div>
            </div>

            <nav class="navbar navbar-expand-md navbar-light my-3">
                <div class="container">
                    
                    <div class="navbar-brand">
                        <a href="index.php">
                            <h1 hidden>Imobiliária</h1><!-- HIDDEN SEMANTICA NÃO VAI APARECER NO BROWSER -->
                            <img src="assets/images/logo.png" alt="" class="d-inline-block" width="280">
                        </a>                                                
                    </div>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-front" href="#">Destaque</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Alugar</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Comprar</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                        </ul>                       
                    </div>
                </div>
            </nav>
            
        </header>
        
        <?php
        
        $getApp = filter_input(INPUT_GET, 'app', FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(empty($getApp)){
            require './widget/home.php';
        }elseif (!empty ($getApp) && file_exists('widget/' . $getApp . '.php')){
            require 'widget/' . $getApp . '.php';
        } else {
            echo "Ooops, erro no app informado!";            
        }
        
        ?>

        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="node_modules/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="node_modules/bootstrap-select/dist/js/i18n/defaults-pt_BR.min.js" type="text/javascript"></script>
    </body>
</html>