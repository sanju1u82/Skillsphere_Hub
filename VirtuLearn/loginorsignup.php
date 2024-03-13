<?php 
  include('./dbConnection.php');
  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
?>

<div class="container-fluid bg-dark"> <!-- Start Course Page Banner -->
  <div class="row">
    <img src="./images/course-images/course-banner.jpg" alt="courses" style="height:300px; width:100%; object-fit:cover; box-shadow:10px;"/>
  </div> 
</div> <!-- End Course Page Banner -->

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <div class="card bg-light p-4">
        <h5 class="mb-3">Login</h5>
        <form role="form" id="stuLoginForm">
          <div class="form-group">
            <label for="stuLogemail" class="font-weight-bold">Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="stuLogemail" id="stuLogemail">
          </div>
          <div class="form-group">
            <label for="stuLogpass" class="font-weight-bold">Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="stuLogpass" id="stuLogpass">
          </div>
          <button type="button" class="btn btn-primary btn-block" id="stuLoginBtn" onclick="checkStuLogin()" style=" background-color:  #1c0909; border-color: #1c0909;">Login</button>
        </form>
        <small id="statusLogMsg"></small>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card bg-light p-4">
        <h5 class="mb-3">Sign Up</h5>
        <form role="form" id="stuRegForm">
          <div class="form-group">
            <label for="stuname" class="font-weight-bold">Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="stuname" id="stuname">
          </div>
          <div class="form-group">
            <label for="stuemail" class="font-weight-bold">Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="stuemail" id="stuemail">
            <small class="form-text">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="stupass" class="font-weight-bold">Password</label>
            <input type="password" class="form-control" placeholder="Enter a password" name="stupass" id="stupass">
          </div>
          <button type="button" class="btn btn-primary btn-block" id="signup" onclick="addStu()" style=" background-color:  #1c0909; border-color: #1c0909;">Sign Up</button>
        </form>
        <small id="successMsg"></small>
      </div>
    </div>
  </div>
</div>
<hr/>

<?php 
// Contact Us
include('./contact.php'); 
?> 

<?php 
  // Footer Include from mainInclude 
  include('./mainInclude/footer.php'); 
?>
