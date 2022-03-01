function validIDalex() {
  var playid = $("#playid").val();
  var nick = $("#nickname").val();
  $(".respon").show();
  if (playid == "" || playid == null || nick == "" || nick == null) {
    $(".wrong").show();
    $(".respon").hide();
    $(".tidakada").hide();
    $(".respon").hide();
    return false;
  } else {
    $(".respon").hide();
    $("#popupalex").fadeOut();
    $("#toastnick").text(nick);
    $("input#ressplayid").val(playid);
    $("input#ressnick").val(nick);
    $(".welcomealexmltf").show();
    setTimeout(() => {
      $('.welcomealexmltf').fadeOut();
      $('.alex-login').fadeIn();
    }, 2000)
  }
}
