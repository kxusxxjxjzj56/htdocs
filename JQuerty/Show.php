<?php
include './includes/head.php';
include './includes/topNav.php';
include './includes/heroShow.php';
include './includes/meta.php';
?>

<!-- HTML AND JQUERY CODE GOES HERE -->
<h1 style="text-align:center">Show</h1>
<meta charset="utf-8"/>
<Title> Page Title </title>
<meta name="viewport" content="width=device-width, initial-scale=1">


<form action="">
    <input type="text" name="uid" placeholder="Username">
    <input id="viewPwdLogin" type="password" name="pwd" placeholder="Password">
    <button onclick="changePwdView()" type="button">View/Hide</button>
    <button>Login</button>
</form>

<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous">
</script>

<script src="main.js"></script>

<script>

    let viewLoginPwd = false;

    function changePwdView ()
    {
        let getPwdView = $("#viewPwdLogin");
    }
        if (viewLoginPwd === false)
    {
        getPwdView.attr("type", "text");
        viewLoginPwd = true;
    }
    else if (viewLoginPwd === true)
    {
        getPwdView.attr("type","password");
        viewLoginPwd = false;
    }
  </script>
  <br>
<?php
include './includes/bottomNav.php';

