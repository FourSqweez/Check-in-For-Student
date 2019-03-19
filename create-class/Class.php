<?php include "connect.php"; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MY CLASS</title>
    
    <!-- Google Fonts -->
   
    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="Class-css.css">

  </head>
   
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <!--<h2>My Class</h2>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--
<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container" id = "example">
            <div class="row">
                <?php
                $data = array();
                $results_per_page = 12;
                if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
                $start_from = ($page-1) * $results_per_page;
                $next = ($_GET["page"] + $results_per_page)-1;
                $stmt = $pdo -> prepare("SELECT * FROM class");

                $stmt->bindParam(1, $_GET["page"]  );
                $stmt ->execute();
                $count= 0;
                while($row = $stmt -> fetch()){
                    $count= $count+1;


                    ?>

                <?php

                } ?>

                <?php
                $stmt = $pdo -> prepare("SELECT * FROM class LIMIT $start_from,$results_per_page  ");
                $stmt->bindParam(1, $_GET["classId"]);
                $stmt ->execute();
                while($row = $stmt -> fetch()){
                    ?>


               <table width="1302" border="1" align="center" cellpadding="0" cellspacing="0" class="font">
                    <tr>
                        <td height="31" align="center"><?=$row["subId"]?></td>
                        <td align="center">   <?=$row["subName"]?></td>
                        <td height="26">  <?=$row["sec"]?></td>
                    </tr>
                </table>

                <!--</div>
                </div>
            <?php

            } ?>-->



<!--<a href="http://www.google.com"><input type="button" value="ปุ่มนี้สร้าง class นะจ๊ะ"></a>
-->
<body bgcolor="#ABE7EB">
      <main class="container pt-5">
        <div class="card mb-5">
            <div class="card-header">
                <h1>MY CLASS</h1>
            </div>
            <div class="card-block p-0">
                <table class="table table-bordered table-sm m-0">
                    <thead class="">
                        <tr>
                            
                            <th>รหัส class</th>
                            <th>รหัสวิชา</th>
                            <th>ชื่อวิชา</th>
                            <th>Sec</th>
                            <th>เวลาเรียน</th>
                            <th>ห้อง</th>
                            <th>ภาคเรียน</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                $stmt = $pdo -> prepare("SELECT * FROM class LIMIT $start_from,$results_per_page  ");
                $stmt->bindParam(1, $_GET["classId"]);
                $stmt ->execute();
                while($row = $stmt -> fetch()){
                    ?>

                    <tr>
                            <td><?=$row["classId"]?></td>
                            <td><?=$row["subId"]?></td>
                            <td><?=$row["subName"]?></td>
                            <td><?=$row["sec"]?></td>
                            <td><?=$row["time"]?></td>
                            <td><?=$row["class"]?></td>
                            <td><?=$row["term"]?></td>
                        </tr>
                        <?php

            } ?>

                        </tbody>
                </table>
            </div>

<?php
                $total = ceil($count/$results_per_page);
//                echo $total;
                ?>
            <div class="card-footer p-0">
                <nav aria-label="...">
                    <ul class="pagination justify-content-end mt-3 mr-3">
                        <li class="page-item disabled">
                           <li>
                                    


                                <?php
                                for ($i=1; $i<=$total; $i++) {
                                    echo "<li><a href='Class.php?page=".$i."'>".$i."</a></li> ";
                                };
                                ?> 

                            </li>

                        </li>
                    </ul>
                </nav>
            </div>
            <div class="container">
            <div class="form-group">
                <input type="button" class="btn btn-primary" value="สร้าง class" onclick="window.location.href='http://10.199.66.227/SoftEn2019/Sec2/Together/create-class/createclass.php'">
            </div>
            </div>
    </div>
    </main>
</body>
       