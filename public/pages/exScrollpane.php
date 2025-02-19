<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/scrollpane.css">

</head>

<body>



    <div id="ScrollPane">
        <div class="scr pane prt" style="background:#da4236;" data-id="Welcome">
            <div class="ct"><b>Scroll !</b></div>
            <div class="scrolldown">Scroll down<br><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
        </div>
        <div class="scr pane prt an" style="background:#1e1e1e;" data-id="scr02">
            <div class="ct"><b>Fullscreen</b></div>
            <div class="scrolldown">Scroll down<br><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
        </div>
        <div class="scr pane prt an" style="background:#da4236;" data-id="scr03">
            <div class="ct"><b>Fullscreen</b></div>
            <div class="scrolldown">Scroll down<br><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
        </div>
        <div class="scr prt horiz">
            <div class="spane">
                <div class="pane an" style="background:#001f3f;" data-id="Horizontal01">
                    <div class="ct"><span>Horizontal<br><b>Slide A</b></span></div>
                </div>
                <div class="pane an" style="background:#0074D9;" data-id="Horizontal02">
                    <div class="ct"><span>Horizontal<br><b>Slide B</b></span></div>
                </div>
                <div class="pane an" style="background:#7FDBFF;" data-id="Horizontal03">
                    <div class="ct"><span>Horizontal<br><b>Slide C</b></span></div>
                </div>
            </div>
        </div>
        <div class="scr pane prt an" style="background:#da4236;" data-id="scr04">
            <div class="ct"><b>Fullscreen</b></div>
        </div>
        <div class="scr prt tab">
            <div class="left spane">
                <div class="pane an" style="background:#2ECC40;" data-id="Vertical01">
                    <div class="ct"><b>Slide A</b></div>
                </div>
                <div class="pane an" style="background:#01FF70;" data-id="Vertical02">
                    <div class="ct"><b>Slide B</b></div>
                </div>
                <div class="pane an" style="background:#2ECC40;" data-id="Vertical03">
                    <div class="ct"><b>Slide C</b></div>
                </div>
            </div>
            <div class="right scrzone" style="background:#3D9970;">
                <div class="ct"><span>Vertical Split<br><b>Left</b></span></div>
            </div>
        </div>
        <div class="scr pane prt an" style="background:#da4236;" data-id="scr05">
            <div class="ct"><b>Fullscreen</b></div>
        </div>
        <div class="scr prt tab">
            <div class="left scrzone" style="background:#FF4136;">
                <div class="ct"><span>Vertical Split<br><b>Right</b></span></div>
            </div>
            <div class="right spane">
                <div class="pane an" style="background:#85144b;" data-id="Vertical04">
                    <div class="ct"><b>Slide A</b></div>
                </div>
                <div class="pane an" style="background:#F012BE;" data-id="Vertical05">
                    <div class="ct"><b>Slide B</b></div>
                </div>
                <div class="pane an" style="background:#B10DC9;" data-id="Vertical06">
                    <div class="ct"><b>Slide C</b></div>
                </div>
            </div>
        </div>
        <div class="scr pane prt an" style="background:#da4236;" data-id="Conclusion">
            <div class="ct"><span><b>THE END</b><br>Works with Fox, Chrome, Edge, Opera, ...</span></div>
            <div class="scrollup"><i class="fa fa-arrow-up" aria-hidden="true"></i><br>Scroll up</div>
        </div>
    </div>

    <div id="Helper"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/plugins/ScrollToPlugin.min.js"></script>
    <script src="assets/js/scrollpane.js"></script>

</body>

</html>