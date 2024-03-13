
<!-- Start Footer -->
<footer class="container-fluid bg-dark text-center p-2" style="background-color: black;">
    <small class="text-white">
        Copyright &copy; 2019 || Designed By E-Learning || 
        <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter"style="color: white;">Admin Login</a>
    </small> 
</footer>  <!-- End Footer -->
<!-- End About Section -->

<!-- modal, also known as a modal window or lightbox, is a web page element that displays in front of and deactivates all other page content. To return to the main content, the user must engage with the modal by completing an action or by closing it.  -->
<!-- Start Student Registration Modal -->
<!-- Button trigger modal -->
      

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="stuRegModalCenterLabel" style="font-weight: bold">Student Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      
        <!-- registration student start -->
        <?php include('studentRegistration.php'); ?>
        <!-- end -->


      </div>
      <div class="modal-footer">
      <span id="successMsg"></span>
      <button type="button" class="btn btn-primary" style="background-color: #335658" onClick="addStu()" id="signup">Signup</button>

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #335658">close</button>
      </div>
    </div>
  </div>
</div>
<!-- end -->

<!-- Login modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="stuLoginModalCenterLabel" style="font-weight: bold">Student Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Login form for student -->
                <form role="form" id="stuLoginForm">
                    
                    <div class="form-group">
                        <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label><small id="statusMsg2"></small>
                        <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label><small id="statusMsg3"></small>
                        <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
                    </div>
                </form>
                <!-- end of form -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="stuLoginBtn" data-bs-dismiss="modal" style="background-color: #335658; color: white;" onclick="checkStuLogin()">Login</button>
                <button type="button" class="btn btn-primary"  style="background-color: #335658; color: white;">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- end -->


<!-- Login admin modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="adminLoginModalCenterLabel" style="font-weight: bold">Admin Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Login form for admin -->
                <form role="form" id="adminLoginForm">
                    
                    <div class="form-group">
                        <i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 font-weight-bold">Email</label><small id="statusMsg2"></small>
                        <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold">Password</label><small id="statusMsg3"></small>
                        <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
                    </div>
                </form>
                <!-- end login form -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="adminLoginBtn" data-bs-dismiss="modal" style="background-color: #335658; color: white;" onclick="checkAdminLogin()">Login</button>
                <button type="button" class="btn btn-primary"  style="background-color: #335658; color: white;">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- end -->

    <!-- jquery and boostrap js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- fontawesome js -->
    <script src="js/all.min.js"></script>


    <!-- student testimonial js -->
    <script type="text/javascript" src="js/owl.min.js"></script>
    <script type="text/javascript" src="js/testyslider.js"></script>
    <script type="text/javascript" src="js/testyslider.js"></script>

    <!-- ajax -->
    <script type="text/javascript"  src="js/ajaxrequest.js"></script>
    

    <!-- ajax admin-->
    <script type="text/javascript"  src="js/adminajaxrequest.js"></script>
</body>
</html>
