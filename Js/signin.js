function validate(){
    if(document.formfilled.Username.value==""){
        document.getElementById("result").innerHTML="Enter Username";
        return false;
    }

    else if(document.formfilled.mail.value==""){
        document.getElementById("result").innerHTML="Enter Email";
        return false;
    }

    else if(document.formfilled.Password.value==""){
        document.getElementById("result").innerHTML="Enter Password";
        return false;
    }

    else if(document.formfilled.CPassword.value==""){
        document.getElementById("result").innerHTML="Enter Your Password Confirmation";
        return false;
    }

    else if(document.formfilled.Password.value.length<=4){
        document.getElementById("result").innerHTML="Enter Password With more than 4 characters ;)";
        return false;
    }

    else if(document.formfilled.Password.value!==document.formfilled.CPassword.value){
        document.getElementById("result").innerHTML="Your Passowrds Don't Match :(";
        return false;
     }

    else if(document.formfilled.Password.value==document.formfilled.CPassword.value){
       popup.classList.add("open-slide")
       return true;
     }

}
var popup=document.getElementById('popup');

function CloseSlide(){
    popup.classList.remove('open-slide')
}