<?php
/**
 * Created by PhpStorm.
 * User: dl
 * Date: 2019/12/27
 * Time: 23:16
 */
$link=mysqli_connect("localhost","a0921164507","6348981","a0921164507",3306) or die("数据库访问失败！".mysql_error());
mysqli_query($link,"set names utf8");