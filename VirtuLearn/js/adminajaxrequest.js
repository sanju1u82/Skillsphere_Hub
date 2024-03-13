//login

function checkAdminLogin() {
    var adminLogEmail = $("#adminLogemail").val();
    var adminLogPass = $("#adminLogpass").val();
    $.ajax({
      url: "Admin/admin.php",
      type: "POST",
      data: {
        checkLogemail: "checklogmail", //string to check if email came or not
        adminLogEmail: adminLogEmail,
        adminLogPass: adminLogPass,
      },
      success: function(data) {
        console.log(data);
        if (data == 0) {
          $("#statusAdminLogMsg").html(
            '<small class="alert alert-danger"> Invalid Email ID or Password ! </small>'
          );
        } else if (data == 1) {
          $("#statusAdminLogMsg").html(
            '<small class="alert alert-success"> Sucess Loading. . . </small>' 
          );
          // Empty Login Fields
          
          setTimeout(() => {
            window.location.href = "Admin/adminDashboard.php";//redirecting to main page after 1s
          }, 1000);
        }
      
      },
    });
  }
  