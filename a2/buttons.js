// code from https://codepen.io/mtbroomell/pen/yNwwdv


function increaseValue(){
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0: value;
    value++;
    document.getElementById('number').value = value;
}

funtion decreaseValue(){

  var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0: value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value =  value;

}
