<?php

session_start();
$flag='HACKYNOV{V1v3L35filtr3s!}';

if(!$_SESSION['admin']) {
    header('Location: /admin/dashboard.php');
} else {
    echo 'Find me !!';
}

?>
