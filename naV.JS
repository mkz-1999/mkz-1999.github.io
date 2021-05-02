
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
  document.getElementById("logo").style.display = "none";
  document.getElementById("logo2").style.display = "block";
}
else {
  document.getElementById("logo2").style.display = "none";
  window.onscroll = function () { scrollFunction() };}


  function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50 ) 
     {
      document.getElementById("navbar").style.height = "6.60vw";
      $('#logo').fadeOut(200, function () {
        $('#logo2').fadeIn(200)
        ;
      });
    } else if ((document.body.scrollTop < 50 || document.documentElement.scrollTop < 50))  {
      document.getElementById("navbar").style.height = "8.6vw";
      $('#logo2').fadeOut(200, function () {
        $('#logo').fadeIn(150)
          ;
      });
    }
  }


