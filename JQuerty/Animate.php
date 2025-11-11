<?php
include './includes/head.php';
include './includes/topNav.php';
include './includes/heroAnimate.php';
include './includes/meta.php';
?>

<!-- HTML AND JQUERY CODE GOES HERE -->
<h1 style="text-align:center">Animate</h1>

<style>

.content-box {
    width: 240px;
    height: 60px;
    background-color: blue;
    padding: 20px;
}
.content-before {
    font-size: 22px;
    font-family: arial;
    color: #fff;
    text-align: center;
    line-height: 60px;
}

.content-after {
    display: none;
    font-size: 14px;
    font-family: arial;
    color: #fff;
    text-align: left;
    line-height: 16px;
    opacity: 0;
}
</style>

<section id="Animate">
<div class="content-box">
<p class="content-before"> Click me to see more! </p>
<p class="content-after">
Lorem Ipsum is simply dummy text of 
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
</section>

<script>
$(document).ready(function() {

$(".content-box").click(function() {
    $(".content-box").animate({
        width: '500px',
        height: '+=200px'
    }, 1000); 
// "Fast" "slow" or millisecond number ex. 1000
    $(".content-after").show().animate({
        opacity: 1
    }, 3300);
});
});
</script>
<br>
<?php
include './includes/bottomNav.php';

