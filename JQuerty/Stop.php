<?php
include './includes/head.php';
include './includes/topNav.php';
include './includes/heroStop.php';
include './includes/meta.php';
?>

<!-- HTML AND JQUERY CODE GOES HERE -->
<h1 style="text-align:center">Stop</h1>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){

        $(".content-box").click(function(){
           $(".content-box").animate({
            width: '500px', 
            height: '400px'
        }, 3000).animate({
            fontsize: '30px'
        }, 3000);
        });

        $("button").click(function(){
            $(".content-box").stop(true, true);
        });

    });
</script>
<button>Click me to STOP animating.</button>
<div class="content-box">
    <p class ="content-text">Click me to START Animating!.</p>
</div>
<br>
<?php
include './includes/bottomNav.php';

