function showPassword() {
    // body...
    var user_password=document.getElementById('user_password');
    if(user_password.type=='password')
    {
        user_password.type='text';
    }
    else
    {
        user_password.type='password';
    }
}