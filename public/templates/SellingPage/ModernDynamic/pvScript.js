//Change menu color on scroll
$(function () {
    $(document).scroll(function () {
        var $nav = $(".menuSection");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});

var acc = document.getElementsByClassName("perguntaFaq");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between hiding and showing the active panel */
    if(this.children[1].children[1].style.display == "none"){
        this.children[1].children[0].style.display = "none"
        this.children[1].children[1].style.display = "block"
    }else{
        this.children[1].children[0].style.display = "block"
        this.children[1].children[1].style.display = "none"
    }
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

//Open checkout popup
$('.openCheckoutPopup').click(function() {
  $('#cookiesPopup').modal();
});

//Contador
function makeTimer() {
  var endTime = new Date("7 Jul 2021 23:59:00 GMT-03:00");			
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