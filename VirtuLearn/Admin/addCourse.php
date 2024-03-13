<?php
include('./admininclude/header.php');



include('../dbConnection.php');

// $_REQUEST['course_name'] capture data written in c-name

if(isset($_REQUEST['courseSubmitBtn'])){
    // Checking for Empty Fields
    if(($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_author'] == "") || ($_REQUEST['course_duration'] == "") || ($_REQUEST['course_price'] == "") || ($_REQUEST['course_original_price'] == "")){
     // msg displayed if required field missing
     $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
    }
    else{
        $course_name = $_REQUEST['course_name'];
        $course_desc = $_REQUEST['course_desc'];
        $course_author = $_REQUEST['course_author'];
        $course_duration = $_REQUEST['course_duration'];
        $course_price = $_REQUEST['course_price'];
        $course_original_price = $_REQUEST['course_original_price'];

        //images

        $course_image = $_FILES['course_img']['name']; //_FILES global variable
        $course_image_temp = $_FILES['course_img']['tmp_name']; //put it in temp folder
        $img_folder = '../images/course-images/'. $course_image; 
        move_uploaded_file($course_image_temp, $img_folder);
            $sql = "INSERT INTO course (course_name, course_desc, course_author, course_img, course_duration, course_price, course_original_price) VALUES ('$course_name', '$course_desc','$course_author', '$img_folder', '$course_duration', '$course_price', '$course_original_price')";
            if($conn->query($sql) == TRUE){  
            //conn---- to establish a connection with the database server
            // below msg display on form submit success
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Course Added Successfully </div>';
            } else {
            // below msg display on form submit failed
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Add Course </div>';
            }
    }
}
?>

<!-- Jumbotrons are commonly found at the top of a webpage, acting as a focal point to grab the user's attention and convey important information. -->
<div class="col-sm-6 mt-5  mx-3 jumbotron" style="background-color: rgb(221, 221, 221); padding-top:60px; border-radius:10px">
  <h3 class="text-center">Add New Course</h3>
  <!-- specify how the form data should be encoded before it is sent to the server during a form submission. -->
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="course_name">Course Name</label><br>
      <input type="text" class="form-control" id="course_name" name="course_name">
    </div>
    <div class="form-group">
      <label for="course_desc">Course Description</label><br>
      <textarea class="form-control" id="course_desc" name="course_desc" row=2></textarea>
    </div>
    <div class="form-group">
      <label for="course_author">Author</label>
      <input type="text" class="form-control" id="course_author" name="course_author">
    </div>
    <div class="form-group">
      <label for="course_duration">Course Duration</label>
      <input type="text" class="form-control" id="course_duration" name="course_duration">
    </div>
    <div class="form-group">
      <label for="course_original_price">Course Original Price</label>
      <input type="text" class="form-control" id="course_original_price" name="course_original_price" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="course_price">Course Selling Price</label>
      <input type="text" class="form-control" id="course_price" name="course_price" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="course_img">Course Image</label><br>
      <input type="file" class="form-control-file" id="course_img" name="course_img">
    </div>
    <div class="text-center" style=" padding-bottom:50px">
      <button type="submit" class="btn btn-dark" id="courseSubmitBtn" name="courseSubmitBtn">Submit</button>
      <a href="courses.php" class="btn btn-dark">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg;}  ?>
  </form>
</div>

</div>
</div>


<?php
include('./admininclude/footer.php');
?>