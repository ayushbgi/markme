<?php
session_start();
require("connection.php");
if(isset( $_SESSION['SESS_id'])) {


$uname= $_SESSION['SESS_name'];

	}


else{
?>

<script type="text/javascript">
        	
        window.location="login.html";
        </script>
        <?php


}
	?>


	<html>
<head>
<link rel="stylesheet" type="text/css" href="home.css">
<style>
.slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto
}

.mySlides {
    display: none;
  height: 400px;
  border: solid 1px black;
     
}

.prev,
.next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: #222428;
    font-weight: bold;
    font-size: 30px;
    transition: .6s ease;
    border-radius: 0 3px 3px 0
}

.next {
    right: -50px;
    border-radius: 3px 3px 3px 3px
}

.prev {
    left: -50px;
    border-radius: 3px 3px 3px 3px
}

.prev:hover,
.next:hover {
    color: #f2f2f2;
    background-color: rgba(0, 0, 0, 0.8)
}

.text {
    color: #f2f2f2;
    font-size: 15px;
    padding-top: 12px;
  padding-bottom: 12px;
    position: absolute;
    bottom: 0;
    width: 100%;
    text-align: center;
    background-color: #222428
}

.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0
}

.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color .6s ease
}

.active,
.dot:hover {
    background-color: #717171
}
</style>
</head>
<body>
<ul>
  <li><a href="#home" class="active">Home</a></li>
  <li><a href="mstat.php">My Stats</a></li>
  <li class="dropdown" style="float:right;">
    <a href="javascript:void(0)" class="dropbtn"><?php echo $uname; ?></a>
    <div class="dropdown-content">
      <a href="set.php">Settings</a>
      <a href="cpass.php">Change Password</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>
<div class="slideshow-container">
<div class="slideshow-inner">
  <div class="mySlides fade">

    <img  src='./assets/img/web-crab-compressed.jpg' style='width: 100%;' alt="sally lightfoot crab"/>
    <div class="text">Sally Lightfoot Crab</div>
  </div>

  <div class="mySlides fade">

    <img  src='./assets/img/web-fighting-nazcas.jpg' style='width: 100%;' alt="fighting nazca boobies"/>
    <div class="text">A scuffle between two Nazca Boobies</div>
  </div>

  <div class="mySlides fade">

    <img  src='./assets/img/web-otovalo-waterfall.jpg' style='width: 100%;' alt="otovalo waterfall"/>
    <div class="text">A waterfall discovered on a hike in Otovalo</div>
  </div>

  <div class="mySlides fade">

    <img  src='./assets/img/web-pelican.jpg' style='width: 100%;' alt="pelican"/>
    <div class="text">Pelican</div>
  </div>
  
  </div>


  <a class="prev" onclick='plusSlides(-1)'>&#10094;</a>
  <a class="next" onclick='plusSlides(1)'>&#10095;</a>
</div>
<br/>


<div style='text-align: center;'>
  <span class="dot" onclick='currentSlide(1)'></span>
  <span class="dot" onclick='currentSlide(2)'></span>
  <span class="dot" onclick='currentSlide(3)'></span>
  <span class="dot" onclick='currentSlide(4)'></span>
</div>

</div>
<script>
var slideIndex = 1;

var myTimer;

var slideshowContainer;

window.addEventListener("load",function() {
    showSlides(slideIndex);
    myTimer = setInterval(function(){plusSlides(1)}, 4000);
  
    //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];
  
    //UNCOMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    // slideshowContainer = document.getElementsByClassName('slideshow-container')[0];
  
    slideshowContainer.addEventListener('mouseenter', pause)
    slideshowContainer.addEventListener('mouseleave', resume)
})

// NEXT AND PREVIOUS CONTROL
function plusSlides(n){
  clearInterval(myTimer);
  if (n < 0){
    showSlides(slideIndex -= 1);
  } else {
   showSlides(slideIndex += 1); 
  }
  
  //COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
  
  if (n === -1){
    myTimer = setInterval(function(){plusSlides(n + 2)}, 4000);
  } else {
    myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
  }
}

//Controls the current slide and resets interval if needed
function currentSlide(n){
  clearInterval(myTimer);
  myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
  showSlides(slideIndex = n);
}

function showSlides(n){
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

pause = () => {
  clearInterval(myTimer);
}

resume = () =>{
  clearInterval(myTimer);
  myTimer = setInterval(function(){plusSlides(slideIndex)}, 4000);
}
</script>
</body>
</html>

