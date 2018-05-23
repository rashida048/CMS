<?php

require_once('inc/db.php');

require_once('inc/top.php');

?>
  <body>
    <?php require_once('inc/header.php');
    if(isset($_GET['post_id'])){
      $post_id = $_GET['post_id'];

      $views_query = "update 'cms'.'posts' set views = views + 1 where 'posts'.'id' = $post_id";
      mysqli_query($con, $views_query);

      $query = "select * from posts where status = 'publish' and id = $post_id";
      $run = mysqli_query($con, $query);
      if(mysqli_num_rows($run) > 0){
        $row = mysqli_fetch_array($run);
        $id = $row['id'];
        $date = getdate($row['date']);
        $day = $date['mday'];
        $month = $date['month'];
        $year = $date['year'];
        $title = $row['title'];
        $image = $row['image'];
        $author_image = $row['author_image'];
        $author = $row['author'];
        $categories = $row['category'];
        $post_data = $row['post_data'];
      } else {
        header('Location: index.php');
      }
    }

    ?>

    <div class="jumbotron">
      <div class="container">
        <div id="details" class="animated fadeInLeft">
          <h1>Custom<span>Post</span></h1>
          <p>Post something you are passionate about</p>
        </div>
      </div>
      <img src="img/top-image.jpg" alt="top Image">
    </div>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="post">
              <div class="row">
                <div class="col-md-2 post-date">
                  <div class="day"><?php echo $day; ?></div>
                  <div class="month"><?php echo $month; ?></div>
                  <div class="year"><?php echo $year; ?></div>
                </div>
                <div class="col-md-8 post-title">
                  <a href="post.php?post_id=>?php echo $id; ?>"><h2><?php echo $title; ?></h2></a>
                  <p>Written by: <span><?php echo ucfirst($author); ?></span></P>
                </div>
                <div class="col-md-2 profile-picture">
                  <img src="img/<?php echo $author_image; ?>" alt="Profile Picture" class="img-circle">
                </div>
              </div>
              <a href="img/<?php echo $image; ?>"><img src="img/<?php echo $image; ?>" alt="Post Image"></a>
              <p class="desc">
                <?php echo $post_data; ?>
              </p>

              <div class="bottom">
                <span class="first"><a href="#"><i class="fa fa-folder"></i> <?php echo ucfirst($category); ?></a></span> |
                <span class="sec"><a href="#"><i class="fa fa-comment"></i> Comment</a></span>
              </div>
            </div>
            <div class="related-posts">
              <h3>Related Posts</h3><hr>
              <div class="row">
                <?php
                $r_query = "select * from posts where status = 'publish' and
                title like '%$title%' limit 3";
                $r_run = mysqli_query($con, $r_query);
                while($r_row = mysqli_fetch_array($r_run)){
                  $r_id = $r_row['id'];
                  $r_title = $r_row['title'];
                  $r_image = $r_row['image'];

                ?>

                <div class="col-sm-4">
                  <a href="post.php?post_id=<?php echo $r_id; ?>">
                    <img src="img/<?php echo $r_image; ?>" alt="Slider One">
                    <h4><?php echo $r_title ?></h4>
                  </a>
                </div>
                  <?php } ?>
              </div>

            </div>

            <div class="author">
              <div class="row">
                <div class="col-sm-3">
                  <img src="img/<?php echo $author_image; ?>" alt="Profile Image" class="img-circle">
                </div>
                <div class="col-sm-9">
                  <h4><?php echo ucfirst($author); ?></h4>
                  <p>Founded in 1892 and housed since 1932 in a building designed by local luminary Pietro Belluschi, the Portland Art Museum recently opened its largest-ever exhibition devoted to a single architect. That architect was not Belluschi but a man with whose first and best-known building — the landmark Aubrey Watzek House of 1937 — Belluschi was sometimes credited.  1 Quest For Beauty: The Architecture, Landscapes, and Collections of John Yeon, which closed on 3 September, took up much of the museum’s ground floor.</p>
                </div>
              </div>
            </div>
            <?php
            $c_query = "select * from comments where status = 'approve' and post_id = $post_id order by id desc";
            $c_run = mysqli_query($con,$c_query);
            if(mysqli_num_rows($c_run) > 0){


            ?>
            <div class="comment">
              <h3>Comments</h3><hr>
              <?php
              while($c_row = mysqli_fetch_array($c_run)){
                $c_id = $c_row['id'];
                $c_name = $c_row['name'];
                $c_username = $c_row['username'];
                $c_image = $c_row['image'];
                $c_comment = $c_row['comment'];

              ?>
              <div class="row single-comment">
                <div class="col-sm-3">
                  <img src="img/<?php echo $c_image ?>" alt="Profile Picture" class="img-circle">
                </div>
                <div class="col-sm-9">
                  <h4><?php echo ucfirst($c_name); ?></h4>
                  <p><?php echo $c_comment ?></P>
                </div>
              </div>
              <?php } ?>
            </div>
          <?php }

          if(isset($_POST['submit'])){
            $cs_name = $_POST['name'];
            $cs_email = $_POST['email'];
            $cs_website = $_POST['website'];
            $cs_comment = $_POST['comment'];
            $cs_date = time();
            if(empty($cs_name) or empty($cs_email) or empty($cs_comment)){
              $error_msg = "All (*) fields are requied";
            } else {
              $cs_query = "INSERT INTO 'cms'.`comments` (`id`, `date`, `name`, `username`, `post_id`, `email`, `website`, `image`, `comment`, `status`)
              VALUES (NULL, '$cs_date', '$cs_name', 'user', '$post_id', '$cs_email', '$cs_website', 'profile.png', '$cs_comment', 'pending')";
              if(mysqli_query($con,$cs_query)){
                $msg = "Comment submitted and waiting for approval";

                $cs_name = "";
                $cs_email = "";
                $cs_website = "";
                $cs_comment = "";
              } else {
                $error_msg = "Comment has not been submitted";
              }
            }
          }


          ?>

            <div class="comment-box">
              <div class="row">
                <div class="col-xs-12">
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="full-name">Full Name:*</label>
                      <input type="text" value="<?php if(isset($cs_name)){echo $cs_name;} ?>" name="name" id="full-name" class="form-control" placeholder="Full Name">
                    </div>

                    <div class="form-group">
                      <label for="email">Email Address:*</label>
                      <input type="text" value="<?php if(isset($cs_email)){echo $cs_email;} ?>" name="email" id="email" class="form-control" placeholder="Email Address">
                    </div>

                    <div class="form-group">
                      <label for="website">Website:</label>
                      <input type="text" value="<?php if(isset($cs_website)){echo $cs_website;} ?>" name="website" id="website" class="form-control" placeholder="Website">
                    </div>

                    <div class="form-group">
                      <label for="comment">Comment:*</label>
                      <textarea id="comment" name="comment" cols="30" rows="10" placeholder="Your comment here" class="form-control"><?php if(isset($cs_comment)){echo $cs_comment;} ?></textarea>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary" value="submit comment">
                    <?php
                    if(isset($error_msg)){
                      echo "<span style='color:red;' class='pull-right'>$error_msg</span>";
                    } else if(isset($msg)) {
                      echo "<span style='color:red;' class='pull-right'>$msg</span>";
                    }
                    ?>
                  </form>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-4">
            <div class="widgets">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>

                </div><!-- /input-group -->
            </div><!--widgets close-->

            <div class="widgets">
              <div class="popular">
                <h4>Popular Posts</h4>
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/slider-img1.jpg" alt="Image 1"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="#"><h4>Tis is heading for post</h4></a>
                    <p><i class="fa fa-clock-o"></i>8 October, 2017</p>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/slider-img1.jpg" alt="Image 1"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="#"><h4>Tis is heading for post</h4></a>
                    <p><i class="fa fa-clock-o"></i>8 October, 2017</p>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/slider-img1.jpg" alt="Image 1"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="#"><h4>Tis is heading for post</h4></a>
                    <p><i class="fa fa-clock-o"></i>8 October, 2017</p>
                  </div>
                </div>

              </div>
            </div><!--widgets close-->

            <div class="widgets">
              <div class="popular">
                <h4>Recent Posts</h4>
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/slider-img1.jpg" alt="Image 1"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="#"><h4>Tis is heading for post</h4></a>
                    <p><i class="fa fa-clock-o"></i>8 October, 2017</p>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/slider-img1.jpg" alt="Image 1"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="#"><h4>Tis is heading for post</h4></a>
                    <p><i class="fa fa-clock-o"></i>8 October, 2017</p>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/slider-img1.jpg" alt="Image 1"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="#"><h4>Tis is heading for post</h4></a>
                    <p><i class="fa fa-clock-o"></i>8 October, 2017</p>
                  </div>
                </div>

              </div>
            </div><!--widgets close-->

            <div class="widgets">
              <div class="popular">
                <h4>Category</h4>
                <hr>
                <div class="row">
                  <div class="col-xs-6">
                    <ul>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                    </ul>
                  </div>
                  <div class="col-xs-6">
                    <ul>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                    </ul>
                  </div>

              </div>
            </div><!--widgets close-->


            <div class="widgets">
              <div class="categories">
                <h4>Social Icons</h4>
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/facebook.png" alt="Facebook"></a>
                  </div>
                  <div class="col-xs-4">
                    <a href="#"><img src="img/twitter.jpg" alt="Twitter"></a>
                  </div>
                  <div class="col-xs-4">
                    <a href="#"><img src="img/google+.jpg" alt="Google+"></a>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/linkedin.jpg" alt="LinkedIn"></a>
                  </div>
                  <div class="col-xs-4">
                    <a href="#"><img src="img/instagram.png" alt="Instagram"></a>
                  </div>
                  <div class="col-xs-4">
                    <a href="#"><img src="img/pinterest.jpg" alt="Pinterest"></a>
                  </div>
                </div>

                  </div>

              </div>
            </div><!--widgets close-->



          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        Copyright &copy; by
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
