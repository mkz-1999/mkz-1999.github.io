if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
  x=true; 
}
else x=false ; 
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50 && x==false) 
   {
    document.getElementById("navbar").style.height = "6.60vw";
    $('#logo').fadeOut(200, function () {
      $('#logo2').fadeIn(200)
      ;
    });
  } else if ((document.body.scrollTop < 50 || document.documentElement.scrollTop < 50) && screen.width > 50 && x==false)  {
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
