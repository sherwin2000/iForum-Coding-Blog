<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include '_dbconnect.php';
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    // Check whether this email exists
    $existsSql = "select * from `users` WHERE `user_email` = '$user_email'";
    $result = mysqli_query($conn, $existsSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0)
    {
        $showError = "An account with this Email already exists!";
    }
    else
    {
        if($pass == $cpass)
        {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_email`, `user_pass`, `timestamp`) VALUES ( '$user_email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                $showAlert = true;
                header("Location: /iForum/index.php?signupsuccess=true");
                exit();
            }
        }
        else
        {
            $showError = "Passwords do not match";
            
        }
    }
    header("Location: /iForum/index.php?signupsuccess=false&error=$showError");
}
?>
