<footer id="footer" class="bg-light">
    <!--<img src="./images/cookie.svg" class="cookie-alert" data-bs-toggle="modal" data-bs-target="#modalCookieConsent" />-->
    <!--<a class="alert-link" href="./politica-de-privacidade.php">Política de Privacidade</a>-->
    
       
    <div class="alert bg-dark text-white box-cookies minusTextContent">
        <small class="msg-cookies">Este site armazena dados como cookies para habilitar funcionalidades essenciais do
            site. Entenda mais através de nossa <a class="alert-link" href="./politica-de-privacidade">Política de Privacidade</a> e 
        <a class="alert-link" href="./termo-de-uso">Termos de Uso</a></small>
                     
        
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            
        <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalCookieConsent">
            Preferências
        </a>
        
            <button class="btn btn-success text-nowrap active btn-sm acceptAll" id="enableAll">Aceitar Todos</button>
            <button class="btn btn-success text-nowrap btn-sm" id="disableAll">Desabilitar Todos</button>
            
        </div>
           
    </div>
    <!-- O arquivo modalConsent.ejs contém os detalhes do componente modal que é 
        chamado para o usuário selecionar os cookies de seu interesse
        Para mais detalhes acesse o projeto no github
    -->
    <?php include('modalConsent.php') ?>
   
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
<script src="<?php echo $cdn; ?>/lgpd-performma/js/lgpd-core.js"></script>
<script src="<?php echo $cdn; ?>/lgpd-performma/js/lgpd-main.js"></script>
<script src="<?php echo $cdn; ?>/lgpd-performma/js/lgpd-thirdPartScripts.js"></script>

</html>