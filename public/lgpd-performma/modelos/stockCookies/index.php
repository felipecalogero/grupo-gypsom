<link rel="stylesheet" href="<?php echo $cdn; ?>lgpd-performma/modelos/stockCookies/styles.css">

<?php include("lgpd-performma/config/parameters.php") ?>

<div class="cookie-container box-cookies hide">
    <div class="cookie-row" style="width: 100%;">
        <div class="cookie-column" style="flex: 2%; text-align: center;">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 20 20" height="46px" viewBox="0 0 20 20" width="46px" fill="var(--cookie-primary)"><g><rect fill="none" height="20" width="20" x="0"/></g><g><g><circle cx="8.75" cy="7.25" r="1.25"/><circle cx="6.75" cy="11.25" r="1.25"/><circle cx="12.5" cy="12.5" r=".75"/><path d="M17.96,9.2C16.53,9.17,15,7.64,15.81,5.82c-2.38,0.8-4.62-1.27-4.15-3.65C5.27,0.82,2,6.46,2,10c0,4.42,3.58,8,8,8 C14.71,18,18.43,13.94,17.96,9.2z M10,16.5c-3.58,0-6.5-2.92-6.5-6.5c0-3.2,2.69-6.69,6.65-6.51c0.3,2.04,1.93,3.68,3.99,3.96 c0.05,0.3,0.4,2.09,2.35,2.93C16.31,13.67,13.57,16.5,10,16.5z"/></g></g></svg>
        </div>
        <div class="cookie-column" style="flex: 75%">
            <p class="cookie-contentText">
                Este site armazena dados como cookies para habilitar funcionalidades essenciais do
                site. Entenda mais através de nossa <a class="alert-link" href="./politica-de-privacidade">Política de Privacidade</a>
            </p>
        </div>
        <div class="cookie-column" style="text-align: center; flex: 5%">
            <button class="cookie-btn acceptAll" id="enableAll">ACEITAR</button>
            <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#modalCookieConsent"><button class="cookie-btn">OPÇÕES</button></a>-->
            <!-- <button class="cookie-btn" id="disableAll">RECUSAR</button> -->
        </div>
    </div>
</div>

<?php include('modalConsent.php') ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
<script src="<?php echo $cdn; ?>lgpd-performma/js/lgpd-core.js"></script>
<script src="<?php echo $cdn; ?>lgpd-performma/js/lgpd-main.js"></script>
<script src="<?php echo $cdn; ?>lgpd-performma/js/lgpd-thirdPartScripts.js"></script>