<?php
if($_SERVER['REQUEST_METHOD'] =='POST')
{
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";
session_start();
$conn = new mysqli($servername, $username, $password, $dbname);

$sql="DELETE FROM article WHERE ArticleID=".$_GET['id'];

$result = mysqli_query($conn, $sql);

header("Location:DeleteNews.php");
}
else
{
	echo "You cannot enter this page directly";
}
?>

