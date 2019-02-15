<h1>Edit Account</h1>
<form action="php/edit_account.php" method="post">
    Username:<br />
    <b><?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></b>
    <br /><br />
    E-Mail Address:<br />
    <input type="text" name="email" value="<?php echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8'); ?>" />
    <br /><br />
    Password:<br />
    <input type="password" name="password" value="" /><br />
    <i>(leave blank if you do not want to change your password)</i>
    <br /><br />
    <input type="submit" value="Update Account" />
</form> <br>
<a href="index.php?page=<?php echo $_SESSION['user']['afdeling']; ?> ">Go Back</a><br />