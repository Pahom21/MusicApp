<?php
    require_once "../databasethings/config.php";
    $msg ="";

    if(isset($_GET['reset'])){
        if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM Users WHERE ver_code='{$_GET['reset']}'"))>0){
            if(isset($_POST['submit'])){
                $password = mysqli_real_escape_string($conn,md5($_POST['Password'])); 
                $cpass = mysqli_real_escape_string($conn,md5($_POST['CPassword'])); 

                if($password === $cpass){
                    $query = mysqli_query($conn , "UPDATE Users SET password = '{$password}',ver_code='' WHERE ver_code ='{$_GET['reset']}'");

                    if($query){
                        header("Location: login.php");
                    }
                }
                else{
                    $msg = "<div class='alert-danger'>Your passwords don't match</div>";
                }
            }
        }else{
            $msg = "<div class='alert-danger'>Reset link doesn't match</div>";
        }
    }
    else{
        header("Location: forgotpass.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../Css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
</head>
<body>
    <div class="wrapper">
        <form action="" method="POST" name="f1form" onsubmit="return validatecp()">
            <h1>Change Password</h1>
            <p><?php echo $msg; ?></p>
            <p id="result"></p>

            <div class="input-box">
                <i class='bx bxs-lock-alt'></i>
                <input type="Password" placeholder="New Password" name="Password" required>
            </div>
            <div class="input-box">
                <i class='bx bxs-lock-alt'></i>
                <input type="Password" placeholder="Confirm Your New Password" name="CPassword" required>
            </div>

            <button type="submit" class="btn" name="submit" onclick="validatecp()">Change Password</button>

            <div class="register_link">
                <p>
                    Already have an account?
                    <a href="login.php">Sign-In</a>
                </p>
            </div>
        </form>
    </div>
    <script src="../Js/forgot.js"></script>
</body>
</html>