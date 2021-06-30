<?php
if (isset($_POST["submit"])){
    $a=$_POST["checkbox"];
    for($i=0;$i<count($a);$i++){
        echo $a[$i];
    }
}

