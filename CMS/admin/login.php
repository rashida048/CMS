<?php

require_once('inc/db.php');
require_once('inc/top.php');

if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($con,strtolower($_POST['username']));
  $password = mysqli_real_escape_string($con,$_POST['password']);

  $check_username_query = "select * from users where username = '$username'";
  $check_username_run = mysqli_query($con, $check_username_query);
  if(mysqli_num_rows($check_username_run) > 0){
    $row = mysqli_fetch_array($check_username_run);

    $db_username = $row['username'];
    $db_password = $row['password'];
    $db_role = $row['role'];

    $password = crypt($password, $db_password);

    if($username == $db_username && $password == $db_password){
      header('Location:index.php');
      $_SESSION['username'] = $db_username;
      $_SESSION['role'] = $db_role;
    } else {
      $error = "Wrong Username or Password";
    }

  } else {
    $error = "Wrong Username or Password";
  }
}
?>
  </head>

  <body>

    <div class="container">

      <form class="form-signin animated shake" action="" method="post">
        <h2 class="form-signin-heading">CMS48 Login</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <?php
            if(isset($error)){
              echo "$error";
            }
            ?>
          </label>
        </div>
        <input type="submit" name="submit"
        value="Sign In" class="btn btn-lg btn-primary btn-block">
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
