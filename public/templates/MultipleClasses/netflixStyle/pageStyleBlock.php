<?php include './pages/cpl/automacaoAulas.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Styleflix</title>
    <meta property="og:type" content="">
    <meta property="og:image" content="https://segredosmasterchef.com.br/<?php echo $cdn; ?>assets/img/icon.png">
    <meta name="description" content="Lorem ipsum dolor sit amet">
    <link rel="icon" type="image/png" sizes="612x651" href="<?php echo $cdn; ?>assets/img/icon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $cdn; ?>assets/bootstrap/icons-1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo $cdn; ?>assets/bootstrap/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- My styles -->
    <link rel="stylesheet" href="<?php echo $cdn; ?>assets/css/fonteStyle.css">
    <link rel="stylesheet" href="<?php echo $cdn; ?>templates/MultipleClasses/netflixStyle/pageStyle.css">

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

    <div class="waitSection">
        <div class="row justify-content-center">
            <div class="col-12" style="text-align:center">
                <img src="<?php echo $cdn; ?>assets/img/icon.png" class="img-fluid mobileDescText" style="width: 80px; margin: auto; padding: 15px 0px">
            </div>
        </div>
    </div>
    <div class="descWaitSection">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-6 colunaBlock">
                <img src="<?php echo $cdn; ?>assets/img/icon.png" class="img-fluid desktopDescText" style="width: 90px; margin: auto; padding: 15px 0px">
                <p class="tagEmBreve"><?php echo $listaEpsodios[explode('?', basename($_SERVER['REQUEST_URI']))[0]]["liberaçãoVisual"]; ?></p>
                <p class="tituloEmBreve"><?php echo $listaEpsodios[explode('?', basename($_SERVER['REQUEST_URI']))[0]]["titulo"]; ?></p>
                <p class="descEmBreve"><?php echo $listaEpsodios[explode('?', basename($_SERVER['REQUEST_URI']))[0]]["descricao"]; ?></p>
                <?php include './pages/cpl/netflixStyle/waitingCounter.php'; ?>
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