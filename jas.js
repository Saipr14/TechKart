
function signin(){
    let e=document.forms["sign in"]["email"].value;
    let p=document.forms["sign in"]["pass"].value;
      
    if(e==null || e==""){
        document.getElementById("errorbox").innerHTML="Email is required*\n";
        return false;
    }
    if(p==null || p==""){
        document.getElementById("errorbox").innerHTML="Password is required*\n";
        return false;
    }
    if(p>15){
        document.getElementById("errorbox").innerHTML="*Password should be short\n";
        return false;
    }
        if(e!=""&&p!=""){
            alert("LOGIN SUCCESSFUL");
           }
   
}
function signup(){
    let e=document.forms["signup"]["email"].value;
    let p=document.forms["signup"]["pass"].value;
    let n=document.forms["signup"]["fname"].value;
    let r=document.forms["signup"]["repass"].value;
    if(n==null || n==""){
        document.getElementById("errorbox").innerHTML="Name is required*\n";
        return false;
    }  
    if(e==null || e==""){
        document.getElementById("errorbox").innerHTML="Email is required*\n";
        return false;
    }
    if(p==null || p==""){
        document.getElementById("errorbox").innerHTML="Password is required*\n";
        return false;
    }
    if(r==null || r==""){
        document.getElementById("errorbox").innerHTML="Please confirm password*\n";
        return false;
    }
    if(r!=p){
        document.getElementById("errorbox").innerHTML="Password mismatch*\n";
        return false;
    }
    if(p>15){
        document.getElementById("errorbox").innerHTML="*Password should be short\n";
        return false;
    }
    if(e!="" && p!=""&&n!=""){
        alert("SIGNUP SUCCESSFUL");
    }
    location.replace("https://www.w3schools.com")
}
