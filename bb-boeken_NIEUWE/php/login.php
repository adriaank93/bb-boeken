<?php
    require("common.php");
    $submitted_username = '';
    if(!empty($_POST)) {
        $query = "
            SELECT
                Uid,
                username,
                password,
                salt,
                email,
                Aid,
                a.afdeling
            FROM users
            inner join afdelingen a on users.Aid = a.id
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
        $login_ok = false;
        $row = $stmt->fetch();
        if($row) {
            $check_password = hash('sha256', $_POST['password'] . $row['salt']);
            for($round = 0; $round < 65536; $round++) {
                $check_password = hash('sha256', $check_password . $row['salt']);
            }
            if($check_password === $row['password']) {
                $login_ok = true;
            }
        }
        if($login_ok) {
            unset($row['salt']);
            unset($row['password']);
            $_SESSION['user'] = $row;
            $ext = '.inc.php';
            $link = '../index.php?page=';
            $afd = $row['afdeling'];
            $link .= $afd;
            ob_start();
            while (ob_get_status()) {
                ob_end_clean();
            }
            header( "Location: " . $link);
//            header("Location: ../php/redirect.php");
//            die("Redirecting to: ../php/redirect.php");
        }
        else {
            print("Login Failed.");
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
            $_SESSION['error'] = 'Login Failed';
            ob_start();
            while (ob_get_status()) {
                ob_end_clean();
            }
            header( "Location: ../index.php?page=login");
//            echo '<script type="text/javascript" src="../js/alertbox.js" ></script>';
//            header("Location: ../php/wrongpassword.php");
//            die("Redirecting to: ../php/wrongpassword.php");
        }
    }

