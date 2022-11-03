function validate(){

var a = document.getElementById("password").value;
var b = document.getElementById("confirmPassword").value;
if (a!=b) {
   alert("Passwords do no match");
   return false;
}
}