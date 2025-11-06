<?php
include './includes/head.php';
include './includes/topNav.php';
include './includes/heroEvent.php';
include './includes/meta.php';
?>

<!-- HTML AND JQUERY CODE GOES HERE -->
<h1 style="text-align:center"> Events</h1>
<section id="Events">
<p id="p1"> Hover Me! </p>
<p id="p2"> Click Me! </p>
<p id="p3"> Double Click Me! </p>
<P id="p4"> Leave me alone! </P>
<p> Press [enter] </p>

<nav>
    <ul>
        <li>Home</li>
        <li>Portfolio</li>
        <li>Contact</li>
    </ul>
</nav>

</section>

<style>
nav ul {
list-style-type: none;
margin-bottom: 10px;
margin: 0;
}
nav {
display:none;
}
</style>

<script>
    $(document).ready(function(){
            $("#p1").hover(function(){
                $(this).hide();
            });
            $("#p2").click(function(){
                $(this).hide();
            });
            $("#p3").dblclick(function(){
                $(this).hide();
            });
            $("#p4").mouseout(function(){
                $(this).hide();
            });
    var menuTrigger = false;
    $(document).keypress(function(e){
        if (e.which == 13) {
            if (menuTrigger === false) {
                $("nav").fadeIn(500);
                menuTrigger = true;
            }
            else if (menuTrigger === true) {
                $("nav").fadeOut(500);
                menuTrigger = false;
            }
        }
    }); 
});
</script>
<?php
include './includes/bottomNav.php';

