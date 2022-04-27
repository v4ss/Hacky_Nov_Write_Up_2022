<?php

session_start();

if(!$_SESSION['admin']) {
    header('Location: /admin/dashboard.php');
} else {
    exec('tail access.log', $logs);

    foreach($logs as $log) {
       echo "</br>".$log;
    }
}

?>
