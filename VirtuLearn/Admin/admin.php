
<?php //<!-- communicates with database -->
if(!isset($_SESSION)){  //starts the session if not started
  session_start(); 
}
include_once('../dbConnection.php');


if(!isset($_SESSION['is_admin_login'])){
    if(isset($_POST['checkLogemail']) && isset($_POST['adminLogEmail']) && isset($_POST['adminLogPass'])){
      $adminLogEmail = $_POST['adminLogEmail'];
      $adminLogPass = $_POST['adminLogPass'];
      $sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email='".$adminLogEmail."' AND admin_pass='".$adminLogPass."'";
      $result = $conn->query($sql);
      $row = $result->num_rows;
      
      if($row === 1){
        $_SESSION['is_admin_login'] = true; // indicates that the user is logged in.
        $_SESSION['adminLogEmail'] = $adminLogEmail; // stores the email of the logged-in admin
        echo json_encode($row);
      } else if($row === 0) {
        echo json_encode($row);
      }
    }
  }
  ?>