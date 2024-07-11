<?php include("header.html") ?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body> 
<div id="preloader"></div> 
      <div class="bgg">  <img src="needed.jpg" height="600px" ></div>      
     
        <div class="help">
           <form name="help" onSubmit="return help()" action="#"  method="POST">
              <h1>Help us improve</h1><br>
        <label>How often do you use our app?</label><br>
       <select width="100px">
        <option>1 day</option>
        <option>1 month</option>
        <option>1 year</option>
        <option>above 1 year</option>
        <option>above 2 year</option>
       </select>
       <br><br>      
        <label>From where you heard about our website?</label><br>
        <select>
        <option>advertisement</option>
        <option>referal by friend</option>
        <option>social media</option>
        <option>others</option>
       </select>
      <br><br>  <label>Did our discounts satisfy you?</label><br>
      <select>
        <option>Somewhat</option>
        <option>100% yes</option>
        <option>No</option>
       </select>
      <br><br>  <label>Did something seems negative in our website?</label><br>
               <input type="text" name="negative" id="negative" placeholder="Review Here" required="" size="42">
               <br>
               <br>
               <div class="errorbox" id="errorbox"></div>
               <input type="submit" name="" value="Sign  Up" size="40">
               <br>
               <br><br>
          <h5>by TECHKART  &#174; </h5> 
               
           </form>
              </div>






<style>
body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-repeat: no-repeat;
    background-size:cover ;
    background-color: black;
}
.logo{
    position: relative;
    left: 40%;
    width: 60px;
}
.bgg{
    position: absolute;
    left: 700px;
    bottom: 16px;
    animation-name: fade-away;
    animation-duration: 10s;
    animation-fill-mode: forwards;
}
@media all and (max-width:800px) {
    .bgg{
        position: absolute;
        left: 350px;
        bottom: 16px;
    }
}
.bgg2{
    transform: rotate(90deg);
    position: absolute;
    float: right;
    bottom: 16px;
    opacity: 0;
    animation-name: fade-in;
    animation-duration: 10s;
   animation-fill-mode: forwards;
}

@media all and (max-width:800px) {
    .bgg2{
        transform: rotate(90deg);
        position: absolute;
        left: -500px;
        bottom: 16px;
        opacity: 0;
       
    }
}
  

.help {
    background-color: black;
    width: 350px;
    justify-content:center ;
    position: absolute;
    top: 150px;
    left: 35%;
    color: white;
    padding: 14px 18px;
    padding-right: 10px;
    font-family:'Times New Roman', Times, serif;
    box-shadow: 0.2px 0.2px 8px rgb(63, 63, 63);
}

.help h5{
    color: rgb(81, 80, 80);
    text-align: center;
}
@media all and (max-width:800px) {
    .help{
      position: absolute;
      top: 20%;
      left: 30%;
    }
}



input[type="email"],input[type="password"]{
    padding-top:10px ;
    padding-bottom:10px ;
    border-radius: 4px;
    display: inline-block;
}
input[type=text]{
    padding-bottom: 70px;
}
input[type="text"]:hover{ box-shadow: 2px 2px 8px rgb(63, 63, 63);
    background-color: black;color: white;}
 input[type="email"]:hover{ box-shadow: 2px 2px 8px rgb(63, 63, 63);
        background-color: black;color: white;} 
input[type="password"]:hover{  box-shadow: 2px 2px 8px rgb(63, 63, 63);
    background-color: black;color: white;
}


input[type="submit"]{
position: relative;
top: 10px;
padding: 10px;
width: 320px;
}
input[type="submit"]:hover{
    transform: translateY(-0.5px);
    box-shadow: 2px 2px 8px rgb(63, 63, 63);
    color: white;
    background-color: black;
}


    #preloader{
   height: 100vh;
   width: 100%;
   z-index: 100;
   background: url("preloader.gif") no-repeat;
}
</style>

        <script>
  var loader = document.getElementById("preloader")
  window.addEventListener("load",function(){
   loader.style.display="none";
  })

   </script>


    </body>
</html>