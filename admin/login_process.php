
<?php

/* =========================================================================================== */
#### Checking User Cridential. if it is false display errors else redirect to dashboard ####
#### Author	: 	K Srinivasa Rao						####

/* =========================================================================================== */
session_start();
//load the db connection;
require_once 'connection.php';


if (isset($_POST['submit'])) {
    //read the login form variables
    $user_email = trim($_POST['uname']);

    $password1 = trim($_POST['pwd']);
    $password = ($password1);

    //check the form validations
    if (empty($user_email) or empty($password)) {
        $errorName = "Please Enter User Name";
        $errorpss = "Please Enter Password";
    } else {
        $sql = "SELECT name1,passowrd FROM admin WHERE name1='$user_email'  and passowrd='$password' ";

        $res = mysqli_query($link, $sql) or die("could not connected" . mysqli_error($link));
        $row = mysqli_fetch_assoc($res);
        //$login_type=$row['login_type'];
        $count = mysqli_num_rows($res);

        if ($count == 1) {
            $_SESSION['user'] = $user_email;
            //redirect the dashboard page
            echo '<script type="text/javascript">
           window.location = "dashboard.php"
      </script>';
        } else {

            print "<script>";
            print "alert('Invalid Username or Password!');";
            print "self.location='index.html';";
            print "</script>";
            // echo $error = '<div class="alert alert-danger" id="success-alert"><strong>Invalid Username or Password!</strong> </div>';
        }
    }
}
?>