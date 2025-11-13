<?php
include './includes/head.php';
include './includes/topNav.php';
include './includes/heroGetSet.php';
include './includes/meta.php';
?>

<!-- HTML AND JQUERY CODE GOES HERE -->
<h1 style="text-align:center">Get/Set</h1>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {

        $("#btn1").click(function() {
            $("#test1").text("This is the new text!");
        });

        $("#btn2").click(function() {
            $("#test2").html("<i>This is the new text!</i>");
        });

        $("#btn3").click(function() {
            $("#test3").val("New input data!");
        });

    });
</script>

<p id="test1">Lorem ipsum dolor sit amet.<p>
<p id="test2"><b>In feugiat, lectus ut suscipit facilisis.</b><p>
<input type="text" id="test3">

<button id="btn1">Text</button>
<button id="btn2">HTML</button>
<button id="btn3">Input</button>

</br>

<?php
include './includes/bottomNav.php';

