// code from https://codepen.io/mtbroomell/pen/yNwwdv


function increaseValue(){
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0: value;
    value++;
    value = document.getElementById('number').value * document.getElementById('totalprice');
    document.getElementById('number').value = value;
}

function decreaseValue(){

  var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0: value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value =  value;


}
