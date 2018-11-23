window.onload = function() {
   prepareListener();
}
function prepareListener() {
   var prodBox;
   prodBox = document.getElementById("productBox");
   prodBox.addEventListener("change",getProduct);
}
function getProduct() {
  this.form.submit();
}

