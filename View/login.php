<html>
<head>
<title> Login & Regristration </title>
<link rel="stylesheet" type="text/css" 
 href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
  <body>

    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <h2> Login Here </h2>
            <form action="login.php" method="post">
              <div class="form-group">
                <label> Username </label>
                <input type="text" name="user" class="form-control" required>
              </div>

              <div class="form-group">
                <label> Password </label>
                <input type="Password" name="Password" class="form-control" required>
              </div>

              <button type="submit" class="btn btn-primary"> Login </button>
                
                <br>
                <br>
              
                <!--registration form -->
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <h2> Register  Here </h2>
                    <div class="form-group">
                        <label> Username </label>
                      <input type="text" name="user" class="form-control">
                    </div>

              <div class="form-group">
                <label> Password </label>
                <input type="Password" name="Password" class="form-control">
              </div>

              <button type="submit" class="btn btn-primary"> Register </button>

    </div>

  </body>

</html>