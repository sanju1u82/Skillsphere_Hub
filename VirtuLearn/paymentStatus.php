<?php
include('./mainInclude/header.php'); // Include header

// Include database connection
include('./dbConnection.php');

// Check if connection is successful
if ($conn) {
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the order ID from the form submission
        $order_id = $_POST['order_id'];

        // Query the database to retrieve data based on the order ID
        $sql = "SELECT * FROM courseorder WHERE order_id = '$order_id'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            // Display the payment status
?>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h2 class="text-center">Payment Status</h2>
                        <table class="table table-bordered">
                            <tbody>
                                <?php
                                $row = $result->fetch_assoc();
                                // Display relevant payment information
                                echo "<tr><td>Order ID:</td><td>{$row['order_id']}</td></tr>";
                                echo "<tr><td>Student Email:</td><td>{$row['stu_email']}</td></tr>";
                                // Add more fields as needed
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
<?php
        } else {
            echo "<div class='alert alert-danger'>No payment record found for the provided order ID.</div>";
        }
    }
} else {
    echo "<div class='alert alert-danger'>Database connection failed.</div>";
}

include('./mainInclude/footer.php'); // Include footer
?>
