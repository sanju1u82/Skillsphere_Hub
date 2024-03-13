 
$(document).ready(function() {
  // Ajax Call for Already Exists Email Verification
  //blur: This event is triggered when an element loses focus.
  //keypress: This event is triggered when a key on the keyboard is pressed and released

  $("#stuemail").on("keypress blur", function() {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuemail = $("#stuemail").val();
    $.ajax({
      url: "Student/addstudent.php",
      type: "post",
      data: {
        checkemail: "checkmail", //string to check if data really came or not
        stuemail: stuemail
      },
      success: function(data) {
        console.log(data);
        if (data != 0) {
          $("#statusMsg2").html(
            '<small style="color:red;"> Email ID Already Registered ! </small>'
          );
          $("#signup").attr("disabled", true);
        } else if (data == 0 && reg.test(stuemail)) {
          $("#statusMsg2").html(
            '<small style="color:green;"> There you go ! </small>'
          );
          $("#signup").attr("disabled", false);
        } else if (!reg.test(stuemail)) {
          $("#statusMsg2").html(
            '<small style="color:red;"> Please Enter Valid Email e.g. example@mail.com </small>'
          );
          $("#signup").attr("disabled", false);
        }
        if (stuemail == "") {
          $("#statusMsg2").html(
            '<small style="color:red;"> Please Enter Email ! </small>'
          );
        }
      }
    });
  });
  });






function addStu(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname=$("#stuname").val();
    var stuemail=$("#stuemail").val();
    var stupass=$("#stupass").val();
    if (stuname.trim() == "") {
        $("#statusMsg1").html(
          '<small style="color:red;"> Please Enter Name ! </small>'
        );
        $("#stuname").focus();
        return false;
      } else if (stuemail.trim() == "") {
        $("#statusMsg2").html(
          '<small style="color:red;"> Please Enter Email ! </small>'
        );
        $("#stuemail").focus();
        return false;
      } else if (stuemail.trim() != "" && !reg.test(stuemail)) {
        $("#statusMsg2").html(
          '<small style="color:red;"> Please Enter Valid Email e.g. example@mail.com </small>'
        );
        $("#stuemail").focus();
        return false;
      } else if (stupass.trim() == "") {
        $("#statusMsg3").html(
          '<small style="color:red;"> Please Enter Password ! </small>'
        );
        $("#stupass").focus();
        return false;
      }
      else{
        $.ajax({
            url: "Student/addstudent.php",
            type: "post",
            dataType: "json",
            data: {
              // assigned stusignup value just to check all iz well
              stusignup: "stusignup",
              stuname: stuname,
              stuemail: stuemail,
              stupass: stupass
            },
            success: function(data) {
              console.log(data);
              if (data == "OK") {
                $("#successMsg").html(
                  '<span class="alert alert-success"> Registration Successful ! </span>'
                );
                // making field empty after signup
                clearStuRegField();
              } else if (data == "Failed") {
                $("#successMsg").html(
                  '<span class="alert alert-danger"> Unable to Register ! </span>'
                );
              }
            },
        });
      }
}

// Empty All Fields and Status Msg
function clearStuRegField() {
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
  }
  
  function clearAllStuReg() {
    $("#successMsg").html(" ");
    clearStuRegField();
  }


//login

  function checkStuLogin() {
    var stuLogEmail = $("#stuLogemail").val();
    var stuLogPass = $("#stuLogpass").val();
    $.ajax({
      url: "Student/addstudent.php",
      type: "POST",
      data: {
        checkLogemail: "checklogmail", //string to check if email came or not
        stuLogEmail: stuLogEmail,
        stuLogPass: stuLogPass,
      },
      success: function(data) {
        console.log(data);
        if (data == 0) {
          $("#statusLogMsg").html(
            '<small class="alert alert-danger"> Invalid Email ID or Password ! </small>'
          );
        } else if (data == 1) {
          $("#statusLogMsg").html(
            '<div class="spinner-border text-success" role="status"></div>' //loads for sometime and directs to diff page (spinner)
          );
          // Empty Login Fields
          clearStuLoginField();
          setTimeout(() => {
            window.location.href = "index.php";//redirecting to main page after 1s
          }, 1000);
        }
      
      },
    });
  }
  