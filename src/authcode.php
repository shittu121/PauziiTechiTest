<?php 

session_start();
include("dbcon.php");
include("redirect.php");

if (isset($_POST['register_btn']))
{
     $username=mysqli_real_escape_string($conn, $_POST['username']);
     $email=mysqli_real_escape_string($conn, $_POST['email']);
     $phone_no=mysqli_real_escape_string($conn, $_POST['phone_no']);
     $password=mysqli_real_escape_string($conn, $_POST['password']);

    $check_name_query = "SELECT username FROM users WHERE username='$username' ";
    $check_name_query_run = mysqli_query($conn, $check_name_query);

    if(mysqli_num_rows($check_name_query_run) > 0)
    {
        redirect("register.php", "Username Exist Already");
    }
    else
    {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $insert_query = "INSERT INTO users (username, email, phone_no, password) VALUES ('$username', '$email', '$phone_no', '$hashed_password')";
        $insert_query_run = mysqli_query($conn, $insert_query);
        if($insert_query_run)
        {
            redirect("login.php", "Registered Successfully.");
        }
        else
        {
            redirect("register.php", "Something went wrong");
        }
    }
}

// Login
if (isset($_POST['login_btn']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE username='$username'";
    $login_query_run = mysqli_query($conn, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        $userdata = mysqli_fetch_array($login_query_run);
        if (password_verify($password, $userdata['password']))
        {
            $_SESSION['auth'] = true;
            $_SESSION['auth_user'] = [
                'username'=> $username
            ];
            redirect("index.php", "Logged in Successful");
        }
        else
        {
            redirect("login.php", "Invalid Password");
        }
    }
    else
    {
        redirect("login.php", "User Not Found");
    }
}



//Change Password reset



if (isset($_POST['reset_password_btn'])) {

    if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
        redirect("login.php", "Please login first.");
    }

    $new_password = mysqli_real_escape_string($conn, $_POST['npassword']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['cpassword']);

    if (empty(trim($new_password)) || empty(trim($confirm_password))) {
        redirect("createNewPassword.php", "Please enter both new password and confirm password");
    } elseif ($new_password !== $confirm_password) {
        redirect("createNewPassword.php", "Passwords do not match");
    }

    $username = $_SESSION['auth_user']['username'];

    $check_user_query = "SELECT * FROM users WHERE username='$username'";
    $check_user_query_run = mysqli_query($conn, $check_user_query);

    if (mysqli_num_rows($check_user_query_run) > 0) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $update_query = "UPDATE users SET password='$hashed_password' WHERE username='$username'";
        $update_query_run = mysqli_query($conn, $update_query);
        if ($update_query_run) {
            redirect("login.php", "Password reset successfully. Please login with your new password.");
        } else {
            redirect("createNewPassword.php", "Failed to reset password. Please try again later.");
        }
    } else {
        redirect("createNewPassword.php", "User not found.");
    }
}


//Forget Password reset


if (isset($_POST['forget_password_btn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $new_password = mysqli_real_escape_string($conn, $_POST['npassword']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['cpassword']);

    if (empty(trim($new_password)) || (empty(trim($new_password)) || empty(trim($confirm_password)))) {
        redirect("createNewPassword.php", "Please enter both new password, confirm password and your Email");
    } elseif ($new_password !== $confirm_password) {
        redirect("createNewPassword.php", "Passwords do not match");
    }


    $check_user_query = "SELECT * FROM users WHERE email='$email'";
    $check_user_query_run = mysqli_query($conn, $check_user_query);

    if (mysqli_num_rows($check_user_query_run) > 0) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $update_query = "UPDATE users SET password='$hashed_password' WHERE email='$email'";
        $update_query_run = mysqli_query($conn, $update_query);
        if ($update_query_run) {
            redirect("login.php", "Password reset successfully. Please login with your new password.");
        } else {
            redirect("forgetPassword.php", "Failed to reset password. Please try again later.");
        }
    } else {
        redirect("forgetPassword.php", "Something Went Wrong.");
    }
}


?>
