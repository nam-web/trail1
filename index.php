<?php
$con = mysqli_connect('nam-web.github.io/trail1/', 'root', 'nimmo1130', 'my_db');
$txtName = $_POST["txtName"];
$txtBranch = $_POST["txtBranch"];
$txtYear = $_POST["$txtYear"];
$txtQuestion1 = $_POST["txtQuestion1"];

$sql = "INSERT INTO response_tb (name,branch,year,question1) VALUES ('$txtName', '$txtBranch', '$txtYear', '$txtQuestion1')";

$rs = mysqli_query($con, $sql);

if($rs)
{
  echo "Contact Records Inserted";
}
?>
