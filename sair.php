<?php

    session_start ();
    //Deslogando usuario
    session_destroy ();
    //Voltando pra home
    header('Location:index.php');

?>