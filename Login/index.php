<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
    <script src="login-js.js"></script>
    <link type="text/css" rel="stylesheet" href="login-css.css">
</head>

<body class="hm-gradient">
    <body class="hm-gradient">
    
    <main>
        <div id="login">
            <div class="row">
                <div class="container">
                  <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                      <div id="login-box" class="col-md-12">
                        <div class="card">
                        <form action="check-login.php" method="POST">
                          <div class="card-body">
                            <h3 class="text-center default-text py-3">LOGIN</h3>
                            <!--Body-->
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" name="mid" id="defaultForm-email" class="form-control">
                                <label for="defaultForm-email">Your userID</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" name="password" id="defaultForm-pass" class="form-control">
                                <label for="defaultForm-pass">Your password</label>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default waves-effect waves-light" type="submit">next</button>
                            </div>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </main>
    
        <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
</body>
</html>
 