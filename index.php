<?php
session_start();

if (empty($_SESSION['user_name'])) {
    include_once 'index.html';
}
else{
    echo "Guten tag, ";
    echo $_SESSION['user_name'];
    echo PHP_EOL;
    $url = "exit.php";
    echo "<a href='$url'>Exit</a>";
    session_destroy();
    
}

