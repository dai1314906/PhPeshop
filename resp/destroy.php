<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['pwd']);
session_destroy();
header("location:index.php");