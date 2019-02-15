<?php
    if (empty($_SESSION['user'])){
        $_SESSION['user'] = '';
    }
    $menuItems = array(
        array('private', 'Home'),
        array('alle_boeken', 'Alle Boeken'),
        array('categorie', 'Categorieen'),
        array('login', 'Log in')
    );
    ?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">BB-Boeken</a>
        </div>
        <ul class="nav navbar-nav">
            <?php foreach ($menuItems as $menuItem ) {
                echo ' <li><a href="index.php?page='.$menuItem[0].'">'.$menuItem[1].'</a></li>';
            } ?>
        </ul>
        <form class="navbar-form navbar-left" action="/action_page.php">
            <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</nav>
