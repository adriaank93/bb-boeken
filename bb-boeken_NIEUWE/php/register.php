<?php
    require("common.php");

    if(!empty($_POST)) {
        if(empty($_POST['username'])) {
            die("Please enter a username.");
        }
        if(empty($_POST['password'])) {
            die("Please enter a password.");
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            die("Invalid E-Mail Address");
        }
        $query = "
            SELECT
                1
            FROM users
            WHERE
                username = :username
        ";
        $query_params = array(
            ':username' => $_POST['username']
        );
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex) {
            die("Failed to run query: " . $ex->getMessage());
        }
        $row = $stmt->fetch();
        if($row) {
            die("This username is already in use");
        }
        $query = "
            SELECT
                1
            FROM users
            WHERE
                email = :email
        ";
        $query_params = array(
            ':email' => $_POST['email']
        );
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex) {
            die("Failed to run query: " . $ex->getMessage());
        }
        $row = $stmt->fetch();
        if($row) {
            die("This email address is already registered");
        }
        $query = "
            INSERT INTO users (
                username,
                password,
                salt,
                email,
                Achternaam,
                Voornaam,
                Aid,
                Admin_status
            ) VALUES (
                :username,
                :password,
                :salt,
                :email,
                :voornaam,
                :achternaam,
                :Aid,
                :admin_status       
            )
        ";
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
        $password = hash('sha256', $_POST['password'] . $salt);
        for($round = 0; $round < 65536; $round++) {
            $password = hash('sha256', $password . $salt);
        }
        if ($_POST['status']) {
            $admin = 1;
        } else {
            $admin = 0;
        }
        $query_params = array(
            ':username' => $_POST['username'],
            ':password' => $password,
            ':salt' => $salt,
            ':email' => $_POST['email'],
            ':voornaam' => $_POST['vn'],
            ':achternaam' => $_POST['an'],
            ':Aid' => $_POST['afd'],
            ':admin_status' => $admin
        );
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex) {
            die("Failed to run query: " . $ex->getMessage());
        }
        header("Location: login.php");
        die("Redirecting to login.php");
    }
