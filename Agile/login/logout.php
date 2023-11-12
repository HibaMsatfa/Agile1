<?php 
    include('../config/constants.php');

    session_destroy();//unset SESSION

    header('location:'.SITEURL);
?>