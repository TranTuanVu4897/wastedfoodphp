<?php
require "../connection.php";
//123
$seller_id = $_POST["seller_id"];
$id = $_POST["id"];
$name = $_POST["name"];
$originalPrice = $_POST["originalPrice"];
$sellPrice = $_POST["sellPrice"];
$openTime = $_POST["openTime"];
$closeTime = $_POST["closeTime"];

$query = "update Product set 
name = '$name',
original_Price = '$originalPrice',
sell_Price = '$sellPrice'
where seller_id = '$seller_id'
and id = '$id'";

if(mysqli_query($connect,$query))aa
{

echo " Succesfully update";

}
else
{
echo "Try again Later ..." ;
echo $connect->error;
}

?>