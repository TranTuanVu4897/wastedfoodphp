<?php
require "../connection.php";


//get username and password from url parameters
$reporter_id = $_POST["reporter_id"];
$accused_id = $_POST["accused_id"];
$report_text = $_POST["report_text"];
$report_image = $_POST["report_image"];

if($report_image=="") $report_image = NULL;

// $reporter_id = '3001';
// $accused_id = '2002';
// $report_text = 'đồ ăn không ngon';
// $report_image = NULL;

$reporter_id = mysqli_real_escape_string($connect, $reporter_id);
$accused_id = mysqli_real_escape_string($connect, $accused_id);
$report_text = mysqli_real_escape_string($connect, $report_text);
$report_image = mysqli_real_escape_string($connect, $report_image);

$query = "INSERT INTO `report` (`id`, `reporter_id`, `accused_id`, `report_text`, `report_image`, `created_date`, `status`, `modified_date`)
 VALUES (NULL, '$reporter_id', '$accused_id', '$report_text', '$report_image', current_timestamp(), 'UNREAD', current_timestamp())";

//$result = $connect->query($query);
if(mysqli_query($connect, $query)){
        echo "success";
    } else{
        echo"ERROR";
    }

?>