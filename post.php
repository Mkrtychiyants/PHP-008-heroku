<?php

session_start();
function redirect() {
    header("Location: index.php");
}
if (empty($_POST['user_name'])) {
    redirect();
}
$usName = $_POST['user_name'];
$_SESSION['user_name'] = $usName;

redirect();
