<!doctype php>
<php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="form-login.css">

    <title>Form Login</title>
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Form Login</h2>
      <form>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control col-sm-12 " placeholder="Input Username">
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" placeholder="Input Password">
        </div>

        
        <a href="home.php" button type="submit" class="btn btn-primary">Log in</a>
      </form>
    </div>

  </body>
</php>