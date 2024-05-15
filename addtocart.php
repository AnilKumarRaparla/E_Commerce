<?php
$page = $_GET['page'];
$id = $_GET['pid'];
if(isset($_COOKIE['cart']))
{
    $data = $_COOKIE['cart'];
    $data = $data.",".$id;
    setcookie("cart",$data);
}
else
{
    setcookie("cart",$id);
}
if($page =="mobile")
    header("location:mobile_desc.php?pid=$id");
else
    header("location:tv_desc.php?pid=$id");
?>

