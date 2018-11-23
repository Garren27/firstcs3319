window.onload = function() {
 prepareListener();
}
function prepareListener() {
 var droppy;
 droppy = document.getElementById("custSelBox");
 droppy.addEventListener("change",getArt);
}
function getArt() {
  this.form.submit();
}
