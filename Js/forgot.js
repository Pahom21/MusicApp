function validatep(){
    if(document.fform.Email.value==""){
    document.getElementById("result").innerHTML="Enter Your Email"
    return false;
  }
}
function validatecp(){
    if(document.f1form.Password.value==""){
    document.getElementById("result").innerHTML="Enter a password"
    return false;
  }
    else if(document.f1form.CPassword.value==""){
    document.getElementById("result").innerHTML="Enter a password to confirm the new one "
    return false;
  }

  else if(document.f1filled.Password.value!==document.f1filled.CPassword.value){
    document.getElementById("result").innerHTML="Your Passowrds Don't Match :(";
    return false;
 }
}
