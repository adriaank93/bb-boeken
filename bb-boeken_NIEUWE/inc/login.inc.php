<?php
    if (empty($submitted_username)) {
        $submitted_username = '';
    } else {
        $submitted_username = $submitted_username;
    }
    if (isset($_SESSION['error'])){
        echo '<script type="text/javascript" src="js/alertbox.js"></script>';
    }
?>
<img width="100%" height="350px" src="img/gimpiesbanner.png" alt="">
<div class="balk">
    <hr>
    <h1><font size="24" face="helvetica">Gimpies.nl</font></h1>
    <hr>
    <br>
    <form action="php/login.php" method="post">
        Username:
        <input type="text" name="username" value="<?php echo $submitted_username; ?>" />
        <br /><br />
        Password:
        <input type="password" name="password" value="" />
        <br /><br />
        <input type="submit" value="Login" />
    </form>
</div>

