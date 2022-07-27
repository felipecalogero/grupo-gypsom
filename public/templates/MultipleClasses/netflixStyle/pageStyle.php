<?php include './pages/cpl/automacaoAulas.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Episódio <?php echo explode("-", explode('?', basename($_SERVER['REQUEST_URI']))[0])[1];?> | Styleflix</title>
    <meta name="description" content="<?php echo $listaEpsodios[explode('?', basename($_SERVER['REQUEST_URI']))[0]]["descricao"]; ?>">
    <link rel="icon" type="image/png" sizes="612x651" href="<?php echo $cdn; ?>assets/img/icon.png">

    <!-- OG Share -->
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://segredosmasterchef.com.br<?php echo $listaEpsodios[explode('?', basename($_SERVER['REQUEST_URI']))[0]]["imagem"]; ?>">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $cdn; ?>assets/bootstrap/icons-1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo $cdn; ?>assets/bootstrap/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- My styles -->
    <link rel="stylesheet" href="<?php echo $cdn; ?>assets/css/fonteStyle.css">
    <link rel="stylesheet" href="<?php echo $cdn; ?>pages/cpl/netflixStyle/pageStyle.css">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TQL4VF3');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQL4VF3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ## VIDEO ## -->
    <div class="headerSection">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-6 videoHeader">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?php echo $listaEpsodios[explode('?', basename($_SERVER['REQUEST_URI']))[0]]["video"]; ?>"  allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-6">
                <p class="tagAula"><?php echo $listaEpsodios[explode('?', basename($_SERVER['REQUEST_URI']))[0]]["tag"]; ?></p>
                <p class="tituloAula"><?php echo $listaEpsodios[explode('?', basename($_SERVER['REQUEST_URI']))[0]]["titulo"]; ?></p>
                <p class="descAula"><?php echo $listaEpsodios[explode('?', basename($_SERVER['REQUEST_URI']))[0]]["descricao"]; ?></p>
                <a href="<?php echo $listaEpsodios[explode('?', basename($_SERVER['REQUEST_URI']))[0]]["hrefBotao"]; ?>"><button class="btnAula"><?php echo $listaEpsodios[explode('?', basename($_SERVER['REQUEST_URI']))[0]]["textoBotao"]; ?></button></a>
            </div>
        </div>
    </div>

    <!-- ## SUBPART ## -->
    <div class="headerSection">

        <div class="row justify-content-center">
            <div class="col-6 col-md-5 col-lg-3 openEps">
                <p class="subpartTitle"><span class="epNumbers"><?php echo count($listaEpsodios); ?></span>Episódios</p>
            </div>
            <div class="col-6 col-md-5 col-lg-3 openComents">
                <p class="subpartTitle">Comentários</p>
            </div>
        </div>
        
        <!-- ## POPULA EPS -->
        <?php 
            foreach($listaEpsodios as $ep){
                $dateNow = new DateTime();
                $dateInit = DateTime::createFromFormat('Y-m-d H:i:s', $ep["liberação"]);
                $dateLimit = DateTime::createFromFormat('Y-m-d H:i:s', $ep["termino"]);
                $epLiberado = $dateNow >= $dateInit && $dateNow <= $dateLimit;

                if($epLiberado){
                    echo '
                        <a href="'.$ep["href"].'" style="text-decoration: none;">
                            <div class="row justify-content-center subpartEps">
                                <div class="col-12 col-md-10 col-lg-6 linhaEp">
                                    <div class="row justify-content-center">
                                        <div class="col-4 col-md-3 col-lg-3 statusOpen">
                                            <img src="'.$ep["imagem"].'" class="img-fluid imgAula">
                                        </div>
                                        <div class="col-7 col-md-9 col-lg-9 my-auto">
                                            <p class="tituloOutrasAulas">'.$ep["titulo"].'</p>
                                            <p class="descOutrasAulas desktopDescText">'.$ep["descricao"].'</p>
                                        </div>
                                        <div class="col-11 col-md-12 col-lg-12" style="padding:0">
                                            <p class="descOutrasAulas mobileDescText">'.$ep["descricao"].'</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }else{
                    echo '
                        <div class="row justify-content-center subpartEps">
                            <div class="col-12 col-md-10 col-lg-6 linhaEp">
                                <div class="row justify-content-center">
                                    <div class="col-4 col-md-3 col-lg-3 statusLock">
                                        <img src="'.$ep["imagem"].'" class="img-fluid imgAula">
                                    </div>
                                    <div class="col-7 col-md-9 col-lg-9 my-auto">
                                        <p class="tituloOutrasAulas">'.$ep["titulo"].'</p>
                                        <p class="descOutrasAulas desktopDescText">'.$ep["descricao"].'</p>
                                    </div>
                                    <div class="col-11 col-md-12 col-lg-12" style="padding:0">
                                        <p class="descOutrasAulas mobileDescText">'.$ep["descricao"].'</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                }
            }
        ?>
        <div class="row justify-content-center subpartComments" style="padding: 15px;">
            <!-- COMENTARIOS -->
            <div class="col-sm-12 col-md-10 col-lg-6" style="background-color: white; border-radius: 10px;">
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v11.0" nonce="vhGpPkBD"></script>
                <div class="fb-comments" data-href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" data-width="100%" data-numposts="5" data-colorscheme="dark"></div>
            </div>
        </div>
    </div>

    <!-- LGPD -->
    <?php include 'lgpd-performma/modelos/stockCookies/index.php'; ?>

</div>
    <script src="<?php echo $cdn; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $cdn; ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $cdn; ?>pages/cpl/netflixStyle/pageStyle.js"></script>
</body>

</html>