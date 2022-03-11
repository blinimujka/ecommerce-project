function validateForm(form) {
    
    //var loginEmail = document.querySelectorAll("input").item(0);
    //var loginPass = document.querySelectorAll("input").item(1);
    var regName =document.querySelectorAll("input").item(0);
    var regEmail =document.querySelectorAll("input").item(1);
    var regPassword = document.querySelectorAll("input").item(2);


    
    /*if(form == 0){  
        if(loginEmail.value == "" || loginEmail.value == null || loginPass.value =="" ||loginPass.value == null){
            loginPass.style.border = "2px solid red";
            loginEmail.style.border = "2px solid red";
            alert("Email and Password fields are empty");
      
    }
}

Validimi per login
*/

    if (form ==1){
        if(regName.value =="" ||regName.value == null){
            regName.style.border = "2px solid red";
            return false;
           }
           if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(regEmail.value)){
             regEmail.style.border = "2px solid red";
             return false;
        }
        if(!/(?=.*[a-z])(?=.*[0-9])(?=.*[A-Z])(?=.{8,})/.test(regPassword.value)){
            document.getElementById("pwd-req-display").style.visibility = "visible";
            regPassword.style.border = "2px solid red";
            return false;
        }
    }
    return true;

}