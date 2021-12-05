<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "FTLab Exam";
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
 
 return $conn;
 }

 function Search($conn,$id,$name,$min,$max)
 {
$result = $conn->query("SELECT * FROM 'employee' WHERE Id='$id' AND Name='$name' AND Salary='$min' AND Salary='$max' ");
 return $result;
 }






function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
