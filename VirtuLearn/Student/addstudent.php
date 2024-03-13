
<?php //<!-- communicates with database -->
if(!isset($_SESSION)){  //starts the session if not started
  session_start(); 
}



include_once('../dbConnection.php');
//insert and check if data is set 
if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupass'])){
    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupass'];
    //query
    $sql = "INSERT INTO student(stu_name, stu_email, stu_pass) VALUES ('$stuname', '$stuemail', '$stupass')";
    //call conn object
    if($conn->query($sql) == TRUE){
      echo json_encode("OK");
    } else {
      echo json_encode("Failed");
    }
  }

  // checking Email is registered already
if(isset($_POST['stuemail']) && isset($_POST['checkemail'])){
  $stuemail = $_POST['stuemail'];  //stuemail is the email being typed
  $sql = "SELECT stu_email FROM student WHERE stu_email='".$stuemail."'";
  $result = $conn->query($sql); //execute query
  $row = $result->num_rows; //num_rows is the number of times email is repeated
  echo json_encode($row);
  }
  // Student Login 
  
  if(!isset($_SESSION['is_login'])){
    if(isset($_POST['checkLogemail']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogPass'])){
      $stuLogEmail = $_POST['stuLogEmail'];
      $stuLogPass = $_POST['stuLogPass'];
      $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email='".$stuLogEmail."' AND stu_pass='".$stuLogPass."'";
      $result = $conn->query($sql);
      $row = $result->num_rows;
      
      if($row === 1){
        $_SESSION['is_login'] = true; // indicates that the user is logged in.
        $_SESSION['stuLogEmail'] = $stuLogEmail; // stores the email of the logged-in stu
        echo json_encode($row);
      } else if($row === 0) {
        echo json_encode($row);
      }
    }
  }
?>


