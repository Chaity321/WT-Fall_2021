<?php
include('../model/db.php');
?>

<?php

$id=$_POST['text1'];
$name=$_POST['text2'];
$min=$_POST['text3'];
$max=$_POST['text4'];
$searchinfo = new db();
$conn=$searchinfo->OpenCon();   
$Query=$searchinfo->Search($conn,$id,$name,$min,$max);
echo $Query;

?>
