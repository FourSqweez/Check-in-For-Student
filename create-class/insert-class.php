<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("INSERT INTO class() VALUES ('',?,?,?,?,?,?)");
$stmt->bindParam(1, $_POST["subId"]);
$stmt->bindParam(2, $_POST["subName"]);
$stmt->bindParam(3, $_POST["sec"]);
$stmt->bindParam(4, $_POST["time"]);
$stmt->bindParam(5, $_POST["class"]);
$stmt->bindParam(6, $_POST["term"]);
$stmt->execute(); 

header("location: http://10.199.66.227/SoftEn2019/Sec2/Together/create-class/Class.php");
?>