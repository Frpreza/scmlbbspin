$(document).ready(function() {
  var detik = 00;
  var menit = 37;
  var jam = 19;

  function hitung() {
    setTimeout(hitung, 1000);
    $('#alextimer').html('' + jam + ' : ' + menit + ' : ' + detik + '');
    detik--;
    if (detik < 0) {
      detik = 59;
      menit--;
      if (menit < 0) {
        menit = 0;
        detik = 0;
      }
    }
  }
  hitung();
});