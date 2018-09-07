// code from https://codepen.io/mtbroomell/pen/yNwwdv


function increaseValue(){
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0: value;
    value++;
    document.getElementById('number').value = value;
}

function decreaseValue(){

  var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0: value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value =  value;

}
function validation(){
  var x, text;

  x = document.getElementById("number"),value;

  if (isNaN(x) x < 1){
    text = "Enter a quantity greater than zero";
  }
  document.getElementById("demo").innerHTML = text;
}
