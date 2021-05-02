window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50 && screen.width > 770) {
    document.getElementById("navbar").style.height = "6.60vw";
    $('#logo').fadeOut(200, function () {
      $('#logo2').fadeIn(200)
      ;
    });
  } else if ((document.body.scrollTop < 50 || document.documentElement.scrollTop < 50) && screen.width > 770)  {
    document.getElementById("navbar").style.height = "8.6vw";
    $('#logo2').fadeOut(200, function () {
      $('#logo').fadeIn(150)
        ;
    });
  }
  else {
    document.getElementById("navbar").style.height = "5.188rem" ; 
  
}
}