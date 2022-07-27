<style>

    /*
    * ##  GENERAL STYLE  ##
    * Edit the follow colors bellow to change this entire page.
    * Some componets needs to be edit properly
    */
    
    :root {
        --primary-color: #32322E;
        --secundary-color: #3d3d384f;
        --text-color: white;
    }

    .contadorSection{
        background-color: #00000023;
        width: 100%;
        border-radius: 15px;
        padding: 10px 0px;
    }

    .contador {
        display: inline-block;
        line-height: 1;
        padding: 10px;
        font-size: 25px;
        text-align: center;
        width: 100%;
        margin: 0;
    }

    .digitosContador{
        color: var(--text-color);
        background-color: var(--secundary-color);
        width: 95px;
        border-radius: 10px;
        font-weight: bold;
    }

    .digitosContador span{
        font-size: 15px !important;
    }

    .timerContador {
        display: block;
        font-size: 20px;
        color: var(--text-color);
        font-weight: 100;
    }
    .espacamentoContador{
        display: none;
    }

    @media (max-width: 768px) {
        .logoContador{
            width: 40px; margin-top: -20px;
            margin-right: 0px;
        }
        .espacamentoContador{
            display: block;
            padding: 55px;
            background-color: var(--primary-color);
        }
        .contadorSection{
            top: 0;
            bottom: unset;
            z-index: 1000;
            width: 100%;
            border-radius: 10px;
            left: unset;
        }
        
        .contador {
            padding: 00px;
            font-size: 20px;
            text-align: center;
            width: 100%;
            padding: 10px 0px;
            border-radius: 15px;
        }
        
        .digitosContador{
            color: var(--text-color);
            background-color: #00000023;
            width: 70px;
            padding:10px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .digitosContador span{
            font-size: 12px !important;
        }
    }
</style>

<!-- ## CONTADOR ## -->
<div class="contadorSection" style="display: block">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 my-auto" style="text-align:center">
            <div class="contador" id="timer">
                <div class="contador digitosContador" id="days"></div>
                <div class="contador digitosContador" id="hours"></div>
                <div class="contador digitosContador" id="minutes"></div>
                <div class="contador digitosContador" id="seconds"></div>
            </div>        
        </div>
    </div>
</div>

<!-- LGPD -->
<?php include 'lgpd-performma/modelos/stockCookies/index.php'; ?>

<script src="<?php echo $cdn; ?>assets/js/jquery.min.js"></script>
<script type="text/javascript">
    //Contador
    function makeTimer() {
        var endTime = new Date("<?php echo $listaEpsodios[basename($_SERVER['REQUEST_URI'])]["liberaçãoJs"]; ?>");			
        endTime = (Date.parse(endTime) / 1000);

        var now = new Date();
        now = (Date.parse(now) / 1000);

        var timeLeft = endTime - now;

        var days = Math.floor(timeLeft / 86400); 
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

        if (hours < "10") { hours = "0" + hours; }
        if (minutes < "10") { minutes = "0" + minutes; }
        if (seconds < "10") { seconds = "0" + seconds; }

        $("#days").html(days + "<span class='timerContador'>Dias</span>");
        $("#hours").html(hours + "<span class='timerContador'>Horas</span>");
        $("#minutes").html(minutes + "<span class='timerContador'>Minutos</span>");
        $("#seconds").html(seconds + "<span class='timerContador'>Segundos</span>");		

    }setInterval(function() { makeTimer(); }, 1000);
</script>