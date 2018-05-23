<?php
require_once('inc/top.php');

if(!isset($_SESSION['username'])){
  header('Location: login.php');
}
?>
</head>
  <body>
    <div id="wrapper">
    <?php require_once('inc/header.php'); ?>

    <div class="container-fluid body-section">
      <div class="row">
        <div class="col-md-3">
          <?php require_once('inc/sidebar.php'); ?>
        </div>
        <div class="col-md-9">
          <h1><i class="fa fa-folder-open"></i> Categories <small>Different Categories</small> </h1><hr>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-tachometer"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-folder-open"></i> Categories</li>
          </ol>

          <div class="row">
            <div class="col-md-6">
              <form action="">
                <div class="form-group">
                  <label for="category">Category Name:</label>
                  <input type="text" placeholder="Category Name" class="form-control">
                </div>
                <input type="submit" value="Add Category" name="submit" class="btn btn-primary">
              </form>
            </div>
            <div class="col-md-6">
              <table class="table table-hover table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sr #</th>
                    <th>Category Name</th>
                    <th>Posts</th>
                    <th>Edit</th>
                    <th>Del</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Healthy Breakfast Options</td>
                    <td>12</td>
                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                  </tr>

                  <tr>
                    <td>1</td>
                    <td>Healthy Breakfast Options</td>
                    <td>12</td>
                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                  </tr>

                  <tr>
                    <td>1</td>
                    <td>Healthy Breakfast Options</td>
                    <td>12</td>
                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                  </tr>

                  <tr>
                    <td>1</td>
                    <td>Healthy Breakfast Options</td>
                    <td>12</td>
                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                  </tr>

                  <tr>
                    <td>1</td>
                    <td>Healthy Breakfast Options</td>
                    <td>12</td>
                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

    </div>
  <?php require_once('inc/footer.php'); ?>
