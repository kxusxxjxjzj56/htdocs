<?php
include './includes/head.php';
include './includes/topNav.php';
include './includes/heroAppend.php';
include './includes/meta.php';
?>

<!-- HTML AND JQUERY CODE GOES HERE -->
<h1 style="text-align:center">Append</h1>
<meta charset="utf-8">
<div id="container">
    <p id="p-first">The first paragraph</p>
    <p id="p-second">The second paragraph</p>
    <p id="p-third">The third paragraph</p>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        var createEle = document.createElement("p");
        createEle.innerHTML = "A new new paragraph";

        $("#container").append("<p>A new paragraph</p>", "<p>Another paragraph</p>");

    });
</script>
<?php
include './includes/bottomNav.php';

