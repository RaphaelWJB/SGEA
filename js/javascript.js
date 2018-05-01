function exibeOutros(){
  if (document.getElementById("timetorce").value == "outro")
    document.getElementById("outrotime").visibility = visible;
  else
    document.getElementById("outrotime").visible = hidden;
}

// Efeito e revelação para div cadastro

 $ (document) .ready (function () {
 $(".hidden_div").hide();
 $(".open_div").click(function() {
 $(this).toggleClass ("active").next().slideToggle("slow");
 return false;
 });
 });
                  // Efeito de revelação para Recuperar e-mail

                  $ (document) .ready (function () {
                  $(".hidden2_div").hide();
                  $(".open2_div").click(function() {
                  $(this).toggleClass ("active").next().slideToggle("slow");
                  return false;
                  });
                  });
// -------------------------------------------------------------------
// Abertura da primeira pagina.
// $(window).load(function () {
//     $('.preloader').delay(3900).fadeOut('slow');
// });
