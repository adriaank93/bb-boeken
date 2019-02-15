<?php
    function greet(){
        $name = '<i>' . htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8') . '</i>';
        $t = date("H");
        if ($t < "12") {
            $greet = "Goedemorgen, ";
        } elseif ($t < "18") {
            $greet = "Goedemiddag, ";
        } else {
            $greet = "Goedenavond, ";
        }
        $msg = $greet . $name;
        echo $msg;
    }
    if (isset($_SESSION['user']['username'])){
        greet();
    }
