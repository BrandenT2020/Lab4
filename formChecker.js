
function inputCheck(){
    var email =  document.forms["form"]["email"].value;
    //document.getElementById("email").value;
    var password =  document.forms["form"]["password"].value;
    //document.getElementById("password").value;

    if(email == "" || password == ""){
        alert("You must fill input a email and password first");
        return(false);
    }else if(email.search("@") != -1 && email.search(".com") != -1){
        alert("Your must put in a valid email");
        return(false);
    }else if(document.forms["form"]["ship"].value != ""){
      alert("You must choose a shiping option");
      return(false);
    }else{
        return(true);
    }
}
