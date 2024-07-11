
<?php

session_start();

if(!isset($_SESSION["email"])){
header("Location:signin.html");}
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
<body>
    <div id="preloader"></div>
    <div class="header">
         <div class="logooo">
             <a href="#"><img src="techkart.png" width="160" height="56"></a>
         </div>
         <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
      <i class="fa-solid fa-magnifying-glass"></i>
     </button>
   </div>
</div>
         <div class="nav">
          <ul>
          <li><h5 style="color: white;">Welcome,<br> <?php echo $_SESSION["fname"]; ?></h5></li>
        <li><img src="user.jpg" width="40px" height="30px"></li> 
            </ul></div>

   </div>
 
   <section id="image-carousel" class="splide" aria-label="Beautiful Images">
  <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide">
				<img src="SLIDES/main slide3.png" alt="">
			</li>
			<li class="splide__slide">
				<img src="SLIDES/main slide2.jpg" alt="">
			</li>
			<li class="splide__slide">
				<img src="SLIDES/Screenshot (50).jpg" alt="">
			</li>
		</ul>
  </div>
</section>

<style>
    *{
   margin: 0;
   padding: 0;
   font-family: 'Times New Roman', Times, serif;
   font-size: 14px;
   font-weight: lighter;
}
body{
  width: 100%;
  height: 100%;
  background-color:black;
}
.header{
      display: flex;
      flex-direction: row;
      align-items: center;
      background-color: black;
      padding-bottom: 20px;
     box-shadow: 2px 0px 8px gray;
  }
  .nav{
      flex: 1;
      text-align: right;
  }
  
  .nav ul{
      display: inline-block;
      list-style-type: none;
  }
  
  .nav ul li{
      display: flex;
      display: inline-block;
      margin-right:20px;
      margin-top: 29px; 
      color: white; 
      font-family:sans-serif;
      font-size: 18px;
  }
  .logooo img{
      align-items: center;
      position: relative;
      top: 10px;
      left: 10px;
  }
  .search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid grey;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: black;
}

.searchButton {
  width: 40px;
  height: 34.5px;
  border: 1px solid grey;
  background: grey;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 6%;
  left: 50%;
  transform: translate(-50%, -50%);
}
    #preloader{
   height: 100vh;
   width: 100%;
   z-index: 100;
   background: url("preloader.gif") no-repeat;
}

.splide__slide img {
  width: 100%;
  height: auto;
}
</style>

        <script>
  var loader = document.getElementById("preloader")
  window.addEventListener("load",function(){
   loader.style.display="none";
  })

   </script>
   <script>
  document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#image-carousel' ).mount();
  } );
</script>
  <script>
  new Splide( '#image-carousel' ).mount();
</script>
    </div>
</body>
</html>