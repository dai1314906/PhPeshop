
include("conn.php");
if (isset($_POST['Submit'])) {
    $add_comname = $_POST['add_comname'];
    $sql = mysqli_query($link, "insert into tb_commodity_category (category_name) values ('$add_comname')");
    if ($sql) {
        echo "<script language='JavaScript'>alert('添加成功！');window.location.href='category_com.php';</script>";
    } else {
        echo "<script language='JavaScript'>alert('添加失败！');window.location.href='category_com.php';</script>";
    }
}