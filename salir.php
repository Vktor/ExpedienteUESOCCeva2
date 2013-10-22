<?php
session_start();
unset($_SESSION['carnet']); 
header("Location: index.html");
session_destroy();
exit;
?>