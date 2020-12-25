<?php include('config.php'); ?>
<html>
    <head>
        <title>Projeto 01</title>
        <script src="https://kit.fontawesome.com/290f3f5eab.js" crossorigin="anonymous"></script>
        <link href="estilo/css/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
        <meta name="viwport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Descrição do meu site" />
        <meta name="keywords" content="animes,Projeto01,code">
        <meta charset="utf-8" />
    </head>
       
    <body>
        <base base="<?php echo INCLUDE_PATH; ?>" />
        <?php
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';
            switch ($url) {
                case 'sobre':
                    echo "<target target='sobre' />";
                    break;
            }
        ?>

        <header>
            <div class="center">    
                <div class="logo left">
                    <a href="/Projeto_01">marca</a>
                </div><!--logo-->
                    <nav class="desktop right">
                        <ul>
                            <li><a href="<?php echo INCLUDE_PATH; ?>">home</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>sobre">sobre</a></li>
                            <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">contato</a></li>
                        </ul>
                    </nav><!--desktop-->
                    <nav class="mobile right">
                        <div class="botao-menu-mobile">
                            <i class="fas fa-bars"></i>
                        </div><!--botao-menu-mobile-->
                        <ul>
                            <li><a href="<?php echo INCLUDE_PATH; ?>">home</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>sobre">sobre</a></li>
                            <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">contato</a></li>
                        </ul>
                    </nav><!--mobile-->
                    <div class="clear"></div><!--clear-->
            </div><!--center-->
        </header>

        <div class="container-principal">
        <?php

            if(file_exists('pages/'.$url.'.php')){
                include('pages/'.$url.'.php');
            } else {
                //podemos fazer o que quiser, pois a página não existe.
                if ($url != 'sobre') {
                    $pagina404 = true;
                    include('pages/404.php');
                } else {
                    include('pages/home.php');
                }
                
            }

        ?>

        <?php 
            if(isset($_POST['submit']))
        ?>
        </div><!--container-principal-->

        <footer>
            <div class="center">
                <p>Todos os direitos reservados</p>
            </div><!--center-->
        </footer>
        
        <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4"></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
        <?php
            if($url == 'home' || $url == ''){
        ?>
            <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>    
        <?php } ?>
        <?php
            if($url == 'contato'){
        ?>
            
        <?php } ?>
    </body>

</html>