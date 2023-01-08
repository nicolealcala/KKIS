// function showPassword() {
//     // body...
//     var user_password=document.getElementById('user_password');
//     if(user_password.type=='password')
//     {
//         user_password.type='text';
//     }
//     else
//     {
//         user_password.type='password';
//     }
// }

$(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
});

