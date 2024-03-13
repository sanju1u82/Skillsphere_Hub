<?php
// Start the session if not already started

// Include necessary files
include('./dbConnection.php');
session_start(); 
if(!isset($_SESSION['stuLogEmail'])) {
    echo "<script> location.href='loginorsignup.php'; </script>";
} else {
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-y h:i:s');
    if(isset($_POST['ORDER_ID']) && isset($_POST['TXN_AMOUNT'])){
        $order_id = $_POST['ORDER_ID'];
        $txn_amount = $_POST['TXN_AMOUNT'];
        $stuEmail = $_SESSION['stuLogEmail'];
        $course_id= $_SESSION['course_id'];
        $sql = "INSERT INTO courseorder (stu_email, order_id, txn_amount, order_date, course_id) VALUES ('$stuEmail', '$order_id', '$txn_amount', '$date', '$course_id')";
        
        if ($conn->query($sql) === TRUE) {
            // Redirect to myCourse.php after processing
            echo "Redirecting to My Profile . . .";
            echo "<script> setTimeout(() =>{
                window.location.href='./Student/myCourse.php';
             },1500);
            </script>";
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
}
?>

