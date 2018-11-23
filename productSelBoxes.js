window.onload = function() {
   prepareTypeListener();
   prepareOrderListener();
}
function prepareTypeListener() {
   var typeBox;
   typeBox = document.getElementById("typeSelBox");
}   

function prepareOrderListener() {
   var orderBox;
   orderBox = document.getElementById("orderSelBox");
   orderBox.addEventListener("change",getInfo);
}
function getInfo() {
   this.form.submit();
}


