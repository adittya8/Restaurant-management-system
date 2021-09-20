var flag = 0;

function change(x) 
{
    var format = /[@,#,$,%]/;
    var format2 = /^\d{11}$/;
    var format3 = /\S+@\S+\.\S+/;
    var format4 = /^\d{3}$/;
    var a = x.value;
    var d = new Date();

    if(a=="")
    {
        if(x.name=="username"){
            document.getElementById("usernameErr").innerHTML = "Username cannot be empty";
            document.getElementById("usernameErr").style.color = "red";
            document.getElementById("username").style.borderColor = "red";
        }
        
            else
    {
        if(x.name=="username"){
            document.getElementById("usernameErr").innerHTML = "\u2713";
            document.getElementById("usernameErr").style.color = "green";
            document.getElementById("username").style.borderColor = "";
        }



        
        function checkUsername(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("usernameErr").innerHTML = "Username Cannot Be Empty";
    document.getElementById("usernameErr").style.color = "red";
    document.getElementById("username").style.borderColor = "red";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    console.log(this.responseText);
    if (this.readyState == 4 && this.status == 200 && this.responseText!=0) {
       document.getElementById("usernameErr").innerHTML = "Username Already Exist";
       document.getElementById("usernameErr").style.color = "red";
       document.getElementById("username").style.borderColor = "red";
    }
    else{
       document.getElementById("usernameErr").innerHTML = "\u2713";
       document.getElementById("usernameErr").style.color = "green";
       document.getElementById("username").style.borderColor = "";
    }
  };
  xhttp.open("GET", "../model/username_checker.php?q="+str, true);
  xhttp.send();
}