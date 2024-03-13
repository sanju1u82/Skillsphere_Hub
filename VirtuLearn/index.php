<?php
include('./maininclude/header.php');
include('./dbConnection.php');

?>
    <!-- video -->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinLine autoplay muted loop>
                <source src="videos/back.mp4" type="">
            </video>
            <div class="vid-overlay"></div>
            
        </div>
        <div class="vid-content">
                <h1 class="mycontent" style="padding: bottom 0px;">Unlocking Your Potential</h1>
                <p class="mycontent" style="padding: bottom 0px; font-size: 22px">Learn and Implement</p>
                <?php    
                if(!isset($_SESSION['is_login'])){
                    echo '<a href="#" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Get Started</a>';

                } else {
                    echo '<a class="btn btn-dark mt-3" href="student/studentProfile.php">My Profile</a>';
              }
          ?> 
            </div>
    </div>
    <!-- video end -->

    <!-- text banner -->
        <div class="container-fluid bg-maroon txt-banner" style="font-family: Garamond">
            <div class="row bottom-banner">
                <div class="col-sm">
                    <h5>
                        <i class="fas fa-book-open mr-3"></i> 100+ Online Courses
                    </h5>
                </div>
                <div class="col-sm">
                    <h5>
                        <i class="fas fa-users mr-3"></i> Expert Instructors
                    </h5>
                </div>
                <div class="col-sm">
                    <h5>
                        <i class="fas fa-keyboard mr-3"></i> Lifetime Access
                    </h5>
                </div>
                <div class="col-sm">
                    <h5>
                        <i class="fas fa-rupee-sign mr-3"></i> Money Return
                    </h5>
                </div>
            </div>
        </div>
    <!-- text banner end -->

    <!-- popular course -->
    <div class="container mt-5" style="font-family: Garamond">
        <h1 class="text-center">Popular Courses</h1>
    <!-- first deck -->
    <div class="card-deck mt-3">
              <?php
              $sql="SELECT * FROM course LIMIT 3";
              $result = $conn->query($sql);
              if($result->num_rows>0){
                while($row = $result-> fetch_assoc()){
                    $course_id= $row['course_id'];
                    echo '
                    <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
                    <div class="card" style="max-height: 300px;">
                        <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">'.$row['course_name'].'</h5>
                            <p class="card-text">'.$row['course_desc'].'</p>
                            <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> 
                            <span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
                            <a class="btn btn-primary text-white font-weight-bolder" style="background-color: black; border-color:black; margin-left: 10px;" href="courseDetails.php?course_id='.$course_id.'">Enroll</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="'.str_replace('..', '.',$row['course_img']).'" class="card-img-top" alt="Guitar" style="width: 100%; height: 170px;">
                        </div>
                        </div>
                    </div>
                    </a>


                    ';
                }
              }
              ?>
       
</div>
<!-- end of first deck      '. $row['course_img'].'   -->


<div class="text-center m-2" style="color: #1c0909">
    <a href="courses.php" class="btn btn-custom btn-lg" style="background-color: #1c0909; border-color: #1c0909;">View All Courses</a>
</div>

</div>
<!-- end of popular courses -->

<!-- contact us -->
<!-- <?php?>  opening and closing tags of php-->
<?php
include('./contact.php');
?>

<!-- student testimonial start -->
<div class="container-fluid mt-5" style="background-color: #335658; font-family: Garamond" id="Feedback">
    <h1 class="text-center testyheading p-4" style="font-family: Garamond"> Student's Feedback </h1>
    <div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
                
            <?php 
              $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
              $result = $conn->query($sql);
              if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                  $s_img = $row['stu_img'];
                  $n_img = str_replace('../','',$s_img);
            ?>

                <div class="testimonial">
                    <p class="description">
                        <?php echo $row['f_content'] ?>
                    </p>
                    <div class="pic">
                        <img src="<?php echo $n_img ?>" alt=""/>
                    </div>
                    <div class="testimonial-prof">
                        <h4 ><?php echo $row['stu_name'] ?></h4>
                        <small><?php echo $row['stu_occ'] ?></small>
                    </div>
                </div>
                
                
                <?php }} ?>
            </div>
        </div>
    </div>
</div>

<!-- student testimonial end -->


<div class="container-fluid bg-black" style="font-family: Garamond"> <!-- Start Social Follow -->
        <div class="row text-white text-center p-1">
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
          </div>
        </div>
    </div> <!-- End Social Follow -->

    
     <!-- Start About Section -->
     <div class="container-fluid p-4" style="background-color:#1c0909; font-family: Garamond">
  <div class="container" style="background-color:#1c0909">
    <div class="row text-center">
      <div class="col-sm">
        <h5 class="text-white">About Us</h5>
        <p class="text-white">SkillSphere provides universal access to the world’s best education, partnering with top universities and organizations to offer courses online.</p>
      </div>
      <div class="col-sm">
        <h5 class="text-white">Category</h5>
        <a class="text-white" href="#">Web Development</a><br />
        <a class="text-white" href="#">Web Designing</a><br />
        <a class="text-white" href="#">Android App Dev</a><br />
        <a class="text-white" href="#">iOS Development</a><br />
        <a class="text-white" href="#">Data Analysis</a><br />
      </div>
      <div class="col-sm">
        <h5 class="text-white">Contact Us</h5>
        <p class="text-white">SkillSphere Pvt Ltd <br>Hyderabad <br>  Telangana <br> Ph. 7671905503 </p>
      </div>
    </div>
  </div>
</div>

<!-- include footer -->
<?php
include('./mainInclude/footer.php');
?>

