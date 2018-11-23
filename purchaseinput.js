
window.onload = function() {
   prepareCustomerListener();
   prepareProductListener();
}
function prepareCustomerListener() {
   var custBox;
   custBox = document.getElementById("customerSelBox");
}

function prepareProductListener() {
   var productBox;
   productBox = document.getElementById("productSelBox");
}

function prepareQuantityListener() {
   var quantityBox;
   quantityBox = document.getElementById("quantityBox");
   quantityBox.addEventListener("change",getInfo);
   
}
function getInfo() {
   this.form.submit();
}


