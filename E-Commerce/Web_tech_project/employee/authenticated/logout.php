<?php
session_start();

    if(isset($_SESSION["usrnm"]))
    {
        session_destroy();
        header("Location: ../index.html");
    }
?>
                         