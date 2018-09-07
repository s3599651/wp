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
  var num = document.getElementById('number').value;
  submitOk = "true";
  if (num == 0){
    alert("Quantity must be greater than zero");
    submitOk = "false";
    else (num > 0){
      submitOk = "true";
    }
  }
}
