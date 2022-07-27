/*
 _____ _____ _____ _____ 
|     |  _  |   __|   | |
|  |  |   __|   __| | | |
|_____|__|  |_____|_|___|

*/

/* No mobile adiciona margin video fixo */
if($( window ).width() <= 768){
   $('.tagAula').css('margin-top', jQuery('.videoHeader').height()+15+'px') 
}

/* Esconde seção comentarios */
$(".subpartComments").hide();
$(".openComents .subpartTitle")[0].style="border-bottom: 3px solid #424242";

/*
 _____ _____ _____ _____ __    _____ _____ 
|_   _|     |   __|   __|  |  |   __|   __|
  | | |  |  |  |  |  |  |  |__|   __|__   |
  |_| |_____|_____|_____|_____|_____|_____|
                                                   
*/

$( ".openEps" ).click(function() {
    $(".subpartEps").show();
    $(".subpartComments").hide();
    $(".openEps .subpartTitle")[0].style="border-bottom: 3px solid #BE1D37";
    $(".openComents .subpartTitle")[0].style="border-bottom: 3px solid #424242";
});
$( ".openComents" ).click(function() {
    $(".subpartEps").hide();
    $(".subpartComments").show();
    $(".openComents .subpartTitle")[0].style="border-bottom: 3px solid #BE1D37";
    $(".openEps .subpartTitle")[0].style="border-bottom: 3px solid #424242";
});

/* Detecta resize de tela */
$( window ).resize(function() {
    if($( window ).width() <= 768){
        $('.tagAula').css('margin-top', jQuery('.videoHeader').height()+15+'px') 
    }else{
        $('.tagAula').css('margin-top', '15px') 
    }
});