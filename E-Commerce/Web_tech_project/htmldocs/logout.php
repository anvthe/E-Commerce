<?php

session_start();

unset($_SESSION['usrnm']);

header("location: Homepage.php");


?>