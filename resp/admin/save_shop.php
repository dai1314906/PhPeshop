<?php
header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
include ("conn.php");
if(isset($_POST['Submit'])){
    $s_shopname=$_POST['add_shopname'];
    $s_detail=$_POST['add_detail'];
    $s_sale=$_POST['add_sale'];
    $s_num=$_POST['add_num'];
    $s_price=$_POST['add_price'];
    $s_pic=$_POST['add_file'];
    $s_cate_name = $_POST['add_cate_name'];
    $createtime=date('Y-m-d H:i:s');

    function getname($exname){
        $dir = "images/";
        $i=1;
        if(!is_dir($dir)){
            mkdir($dir,0777);
        }

        while(true){
            if(!is_file($dir.$i.".".$exname)){
                $name=$i.".".$exname;
                break;
            }
            $i++;
        }

        return $dir.$name;
    }

    $exname=strtolower(substr($_FILES['add_file']['name'],(strrpos($_FILES['add_file']['name'],'.')+1)));
    $uploadfile = getname($exname);

    move_uploaded_file($_FILES['add_file']['tmp_name'], $uploadfile);
    if(trim($_FILES['add_file']['name']!=""))
    {
        $uploadfile="admin/".$uploadfile;
    }
    else
    {
        $uploadfile="";
    }

    $sql = mysqli_query($link, "insert into tb_commodity(cname,cdetail,csale,cnum,cprice,createtime,cpic,category_name) VALUES ('$s_shopname','$s_detail','$s_sale','$s_num','$s_price','$createtime','$s_pic','$s_cate_name')");

    if ($sql) {
        echo "<script language='JavaScript'>alert('商品添加成功！');window.location.href='update.php';</script>";

    } else {
        echo "<script language='JavaScript'>alert('商品添加失败！');window.location.href='admin_center.php';</script>";
    }
}
