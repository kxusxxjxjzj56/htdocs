<?php
include './includes/head.php';
include './includes/topNav.php';
include './includes/heroScroll.php';
include './includes/meta.php';
?>

<!-- HTML AND JQUERY CODE GOES HERE -->
<h1 style="text-align:center">Scroll</h1>

<a href="subpage.html#section3">
    <div>
        <p>Go to Section 3</p>
    </div>
</a>

<a href="subpage.html#post">
    <div>
        <p>Go to post section</p>
    </div>
</a>
<script>

$(document).ready(function(){

    var page_url = window.location.href;
    var page_id = page_url.substring(page_url.lastIndexOf("#") + 1);
    if (page_id == "section3") {
        $("html, body").animate({
            scrollTop:  $("#scroll-" + page_id).offset().top
        }, 1000);
    }

});

</script>
<?php
include './includes/bottomNav.php';

