<?php
include './includes/head.php';
include './includes/topNav.php';
include './includes/heroSlide.php';
include './includes/meta.php';
?>

<!-- HTML AND JQUERY CODE GOES HERE -->
<h1 style="text-align:center">Slide</h1>

<!-- Slide Menu CSS CODE -->
<style>

#side-nav ul li a,#side-nav ul li {
text-decoration: none;
list-style-type: none;
} 
nav {
width: 240px;
height: 40vh;
background-color: #000;
display: none;
}
#side-nav a, #side-nav p {
color: #ffffff;
font-size: 20px;
text-decoration: none;
padding: 10px 20px;
margin: 0 5px;
position: relative;
}

#side-nav a::before {
content: '';
position: absolute;
bottom: 0;
left: 0;
width: 0;
height: 4px;
background: linear-gradient(90deg, #F1C40F, 
        #E74C3C); /* Tweak the color if needed */
border-radius: 0;
transition: all 0.5s ease-in-out;
}

#side-nav a:hover::before {
width: 100%;
border-radius: 50%;
} 
/* info-title and info-content */
.info-box{
background-color: red;
}
.info-title{
padding: 5px 5px 0px 5px;
}
.info-content{
background-color: #F1C40F;
padding: 5px;
}
</style>
<!-- END OF SLIDE MENU CSS CODE -->

<section id="Slide">
    <p id="menu-toggle"> <img src="img/Hamburger-Icon.jpg" width="25px"></p>    
<nav id="side-nav">
 <ul>
  <li> <a href="#">Home</a></li>
  <li> <a href="#">My channel</a></li>
  <li> <a href="#">Trending</a></li>
  <li> <a href="#">Subscriptions</a></li>
 </ul>
 <ul>
  <li><p>LIBRARY</p></li>
  <li><a href="#">History</a></li>
  <li><a href="#">Watch Later</a></li>
  <li><a href="#">Purchases</a></li>
  <li><a href="#">jQuery</a></li>
 </ul>
</nav>

<div class="info-box">
 <div class="info-title">
  <p>Info Title!</p>
 </div>
 <div class="info-content">
  <p>Lorem Ipsum is simply dummy text of 
    the printing and typesetting industry. 
    Lorem Ipsum has been the industry's 
    standard dummy text ever since the 1500s,
    when an unknown printer took a galley of 
    type and scrambled it to make a type 
    specimen book. It has survived not only 
    five centuries,but also the leap into 
    electronic typesetting, remaining 
    essentially unchanged. It was 
    popularised in the 1960s with the release 
    of Letraset sheets containing Lorem Ipsum 
    passages, and more recently with desktop 
    publishing software like Aldus PageMaker 
    including versions of Lorem Ipsum.</p>
 </div>
</div>
</section>

<script>
$(document).ready(function(){
    $("#menu-toggle").click(function(){
        $("#side-nav").slideToggle(1000);
    });
    $(".info-title").click(function(){
        $(".info-content").slideToggle(500);
    });
});
</script>
<br>
<?php
include './includes/bottomNav.php';

