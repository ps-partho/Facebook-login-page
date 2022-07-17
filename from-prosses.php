<?php
include("confi.php");
extract($_POST);
$sql = "INSERT INTO `facebook`(`firstname`, `lastname`) VALUES ('".$firstname."','".$lastname."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
header("Location: home.php");
$mysqli->close();
?>