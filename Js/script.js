function validate(){
    if(document.loginform.Username.value==""){
        document.getElementById("result").innerHTML="Enter Username"
        return false;
    }

    else if(document.loginform.Password.value==""){
        document.getElementById("result").innerHTML="Enter Password"
        return false;
    }
}