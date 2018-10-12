// code from https://codepen.io/mtbroomell/pen/yNwwdv


function increaseValue(){
  var total  = 25.50;
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0: value;
    value++;
    total = total * 2;
    document.getElementById('number').value = value;
}

function decreaseValue(){
  var total = 25.50;
  var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0: value;
    value < 1 ? value = 1 : '';
    value--;
    total = total - total;
    document.getElementById('number').value =  value;


}
