<?php
require_once('inc/db.php');
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">
      <div class="col-xs-3"><img src="img/headerlogo.png" alt="Logo" width="30px"></div>
      <div class="col-xs-9">CMS48</div>
    </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list" aria-hidden="true"></i>Categories<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php
                $query = "select * from categories order by id desc";
                $run = mysqli_query($con, $query);
                if(mysqli_num_rows($run) > 0){
                  while($row = mysqli_fetch_array($run)){
                    $category = ucfirst($row['category']);
                    $id = $row['id'];
                    echo "<li><a href='index.php?cat=".$id."'>$category</a></li>";
                  }
                } else {
                  echo "<li><a href='#'>No Ctegories Yet</a></li>";
                }
                ?>

          </ul>
        </li>
        <li><a href="contactus.html"><i class="fa fa-connectdevelop" aria-hidden="true"></i>Contact Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
