var a = document.getElementById("linkshow");
a.value = document.getElementById("linkshow").innerHTML = window.location.href;

const copyBtn = document.getElementById('copyalex')
const copyText = document.getElementById('linkshow')

copyBtn.onclick = () => {
  copyText.select();
  // Selects the text inside the input
  document.execCommand('copy');
  // Simply copies the selected text to clipboard 
  Swal.fire({
    //displays a pop up with sweetalert
    icon: 'success',
    title: 'Text copied to clipboard',
    showConfirmButton: false,
    timer: 1000
  });
}

var b = document.getElementById("linkmore");
b.value = document.getElementById("linkmore").innerHTML = window.location.href;

const copyTombol = document.getElementById('copymore')
const copyTulisan = document.getElementById('linkmore')

copyTombol.onclick = () => {
  copyTulisan.select();
  // Selects the text inside the input
  document.execCommand('copy');
  // Simply copies the selected text to clipboard 
  Swal.fire({
    //displays a pop up with sweetalert
    icon: 'success',
    title: 'Text copied to clipboard',
    showConfirmButton: false,
    timer: 1000
  });
}
