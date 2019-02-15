<?php
echo " hoi";
//require_once 'common.php';
//require_once 'functions.php';
////echo 'hello';
//$titel = $_POST['titel'];
//$schrijver = $_POST['schrijver'];
//$categorie = $_POST['cat'];
//$beschrijving = $_POST['beschrijving'];
//$link = $_POST['pad'];
//$get_cat_sql_params = array(
//    ':id' => $categorie
//);
//$get_cat_sql = 'SELECT categorie_naam FROM categorien WHERE categorie_id = :id';
//
//try {
//    $stmt = $db->prepare($get_cat_sql);
//    $stmt->execute($get_cat_sql_params);
//} catch(PDOException $ex) {
//    die("Failed to run query: " . $ex->getMessage());
//}
//
//$cat = $stmt->fetch();
//
//$path_db = "/root/Documents/boeken" . $cat['categorie_naam'] . "$titel";
//
//$query_params = array(
//    ':titel' => $_POST['titel'],
//    ':schrijver' => $_POST['schrijver'],
//    ':cat' => $_POST['cat'],
//    ':beschrijving' => $_POST['beschrijving'],
//    ':pad' => $path_db
//);
//$query = 'INSERT INTO boeken (
//                    naam, beschrijving, schrijver, fk_categorie, link
//                    ) VALUES (:titel, :beschrijving, :schrijver, :cat, :pad)';
//
////var_dump($_POST['titel'], $_POST['schrijver'], $_POST['cat'], $_POST['beschrijving'], $path_db);
////exit();
//
//try {
//    $stmt = $db->prepare($query);
//    $stmt->execute($query_params);
//    copy("$link", "$path_db");
//} catch(PDOException $ex) {
//    die("Failed to run query: " . $ex->getMessage());
//}
//
//header('Location: ../index.php?page=boeken_toevoegen');
//die('Redirecting to: ../index.php?page=boeken_toevoegen');
?>