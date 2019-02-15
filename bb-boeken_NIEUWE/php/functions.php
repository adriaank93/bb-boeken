<?php
require_once 'common.php';
$get_categorie_sql = 'SELECT * FROM categorien';
try {
    $stmt = $db->prepare($get_categorie_sql);
    $result = $stmt->execute();
}
catch(PDOException $ex) {
    die("Failed to run query: " . $ex->getMessage());
}
$categorie_rows = $stmt->fetchAll();