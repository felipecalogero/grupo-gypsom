<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>GradietColor</title>
        <link rel="icon" type="image/png" sizes="612x651" href="<?php echo $cdn; ?>assets/img/iconSite.png">

        <!-- Bootstrap Styles -->
        <link rel="stylesheet" href="<?php echo $cdn; ?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $cdn; ?>assets/bootstrap/icons-1.4.1/font/bootstrap-icons.css">
        <!-- My Styles -->
        <link rel="stylesheet" href="<?php echo $cdn; ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo $cdn; ?>templates/SingleClass/GradientClass/pageStyle.css">

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MXCJ46H');</script>
        <!-- End Google Tag Manager -->
        
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXCJ46H"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- ## VIDEO HEADER ## --> 
        <div class="videoHeader">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-7">
                        <div class="embed-responsive embed-responsive-16by9 videoFrame">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?autoplay=1" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ## AULA ## --> 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7">
                    <p class="classTag">LOREM IPSUM</p>
                    <p class="className">lorem ipsum dolor sit amet consectetur adipiscing elit. lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                    <!--<p class="classDesc">lorem ipsum dolor sit amet consectetur adipiscing elit lorem ipsum dolor sit amet consectetur adipiscing elit. lorem ipsum dolor sit amet consectetur adipiscing elit</p>--> 
                    <a href="https://go.hotmart.com/P57851934Q?src=masterclass"><button type="btn btn-success button" class="btn btn-success btnSingleClass">QUERO GARANTIR MINHA VAGA</button></a>
                </div>
            </div>
        </div>

        <!-- ## COMENTARIOS ## --> 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7">
                    <div class="tituloComments">
                        <p class="classTitleComment">COMENTÁRIOS</p>
                        <!--<p class="classDescComment">lorem ipsum dolor sit amet consectetur adipiscing elit. lorem ipsum dolor sit amet consectetur adipiscing elit</p>--> 
                    </div>
                    <div class="subComments">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v11.0" nonce="vhGpPkBD"></script>
                        <div class="fb-comments" data-href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" data-width="100%" data-numposts="5" data-colorscheme="dark"></div>
                    </div>
                </div>
            </div>
        </div>

       <!-- LGPD -->
       <?php include 'lgpd-performma/modelos/stockCookies/index.php'; ?>                         

    </body>

</html>