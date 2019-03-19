<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link type="text/css" rel="stylesheet" href="createclass-css.css">

    <title>CREATE CLASS</title>
</head>
<body>
  <div class="container">
    <div class="container emp-profile">
      <h1>สร้าง Class</h1>
      <form action="http://10.199.66.227/SoftEn2019/Sec2/Together/create-class/insert-class.php" method="post">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationServer013">รหัสวิชา</label>
                  <input type="text" class="form-control is-valid" id="validationServer013" placeholder="กรุณากรอกรหัสวิชา" name="subId" required >
            </div>
            

           <div class="col-md-4 mb-3">
            <label for="validationServer013">ชื่อวิชา</label>
            <input type="text" class="form-control is-valid" id="validationServer023" placeholder="กรุณากรอกชื่อวิชา" name="subName" required>
           </div>
           <div class="col-md-4 mb-3">
            <label for="validationServer013">section</label>
            <input type="text" class="form-control is-valid" id="validationServer023" placeholder="กรุณากรอก section" name="sec" required>
           </div>
            </div>

            <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationServer013">เวลาเรียน</label>
            <input type="text" class="form-control is-valid" id="validationServer013" placeholder="กรุณากรอกเวลาเรียน" name="time" required >
            </div>
            

           <div class="col-md-4 mb-3">
            <label for="validationServer013">ห้อง</label>
            <input type="text" class="form-control is-valid" id="validationServer023" placeholder="กรุณากรอกห้อง" name="class" required>
           </div>
           <div class="col-md-4 mb-3">
            <label for="validationServer013">ภาคการศึกษา</label>
            <input type="text" class="form-control is-valid" id="validationServer023" placeholder="กรุณากรอกภาคการศึกษา" name="term" required>
           </div>
            </div>
            <button class="btn btn-primary" type="submit">ยืนยัน</button>
      </form>    
    </div>            
  </div>
</body>
</html>
