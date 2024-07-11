<?php include("header.html")?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <div id="preloader"></div>
        <div class="contact">
        <h1>Contact us</h1>
        <hr>
        <div class="email">
        <img src="email.jpg" width="70px" height="50px">
        <h3>Email</h3><h4>saiprasanth67890@gmail.com</h4>
        </div>
        <div class="twitter">
        <a href="https://twitter.com/SaiPr14?t=uDIKQAwlkqH9iZZ2pOqWpQ&s=08">
            <img src="twitter.png"  width="70px" height="60px">
            <h3>Twitter</h3></a>
        </div>
        <div class="facebook" >
            <img src="facebook.png"  width="70px" height="60px">
            <h3>facebook</h3><h4>https://www.facebook.com/mspradeep.don.5</h4>
        </div>
        </div>
    </div>
<style>
body{
    margin: 0;
    padding: 0;
    font-family: 'Times New Roman', Times, serif;
    background-color: black;
}
.contact{
    background-color: black;
    color: white;
    padding-bottom: 100px;
    z-index: -3;
}
.email{
    position: relative;
    top: 10px;
}
.contact hr{
   padding-right :10px;
}
.email h4,h3{
    position: relative;
    left: 80px;
    bottom: 150px;
    font-weight: lighter;
    
}
.twitter h3,h4{
    position: relative;
    left: 80px;
    bottom: 50px;
    font-weight: lighter;
    
}

.facebook h4,h3{
    position: relative;
    left: 80px;
    bottom: 50px;
    font-weight: lighter;
}

map{
   position: relative;
   bottom: 10px;
   padding-bottom: 200px;
   z-index: 1;
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
</style>
    </body>
    <br><br>
</html>
<?php include("footer.html")?>