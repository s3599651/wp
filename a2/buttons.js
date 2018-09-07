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
    if (isNaN(value) value < 1){
        text = "Enter a quantity greater than zero";
    }
    document.getElementById('number').value =  value;
    document.getElementById("demo").innerHTML = text;
}
