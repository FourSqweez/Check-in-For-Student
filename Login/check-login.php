<?php
  include "connectlogin.php";
  
  session_start();

  $stmt = $pdo->prepare("SELECT  mid,password FROM student_member WHERE mid = ? AND password = ?");
  $stmt->bindParam(1, $_POST["mid"]);
  $stmt->bindParam(2, $_POST["password"]);
  $stmt->execute();
  $row = $stmt->fetch();
  // หาก username และ password ตรงกัน จะมีข้อมูลในตัวแปร $row
  if (!empty($row)) { 
    // นำข้อมูลผู้ใช้จากฐานข้อมูลเขียนลง session 2 ค่า
    $_SESSION["mid"] = $row["mid"];

    header( "location: login-studentvalid.php" );
    exit(0);
  // กรณี username และ password ไม่ตรงกัน
  } 



  $stmt = $pdo->prepare("SELECT  mid,password FROM teacher_member WHERE mid = ? AND password = ?");
  $stmt->bindParam(1, $_POST["mid"]);
  $stmt->bindParam(2, $_POST["password"]);
  $stmt->execute();
  $row = $stmt->fetch();
  // หาก username และ password ตรงกัน จะมีข้อมูลในตัวแปร $row
  if (!empty($row)) { 
    // นำข้อมูลผู้ใช้จากฐานข้อมูลเขียนลง session 2 ค่า
    $_SESSION["mid"] = $row["mid"];

    header( "location: /SoftEn2019/Sec2/Together/create-class/Class.php" );
    exit(0);

  // กรณี username และ password ไม่ตรงกัน
  }



  $stmt = $pdo->prepare("SELECT  mid,password FROM ta_member WHERE mid = ? AND password = ?");
  $stmt->bindParam(1, $_POST["mid"]);
  $stmt->bindParam(2, $_POST["password"]);
  $stmt->execute();
  $row = $stmt->fetch();

  // หาก username และ password ตรงกัน จะมีข้อมูลในตัวแปร $row
  if (!empty($row)) { 
    // นำข้อมูลผู้ใช้จากฐานข้อมูลเขียนลง session 2 ค่า
    $_SESSION["mid"] = $row["mid"];

    header( "location: login-tavalid.php" );
    exit(0);
  // กรณี username และ password ไม่ตรงกัน
  } else {
    header( "location: login-invalid.php" );
    exit(0);

  }
?>
