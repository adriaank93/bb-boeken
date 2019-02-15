<?php
   require_once 'php/common.php';
   require_once 'php/functions.php';

   $PATH = '/root/Documents/boeken';
   foreach ($categorie_rows as $row):
       mkdir($PATH . '/' . $row['categorie_naam']);
   endforeach;
   if (isset($_GET['page'])) {
           $page = $_GET['page'];
   } else {
      $page = 'private';
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>BB <?php echo $page; ?></title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="generator" content="Geany 1.23.1" />
        <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="balk">
        <br><br>
        <?php
        include 'inc/navbar.inc.php';
        include 'php/greeting.php';
        echo '<div class="container">';
        include 'inc/'. $page .'.inc.php';
        echo '</div>'
        ?>
        <br/>
    </div>
    </body>
</html>

