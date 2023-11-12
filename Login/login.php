<?php
    session_start();

    if(isset($_SESSION['SESSION_NAME'])){
        header("Location: welcome.php");
        die();
    }

    require_once "../databasethings/config.php";
    $msg ="";
    if(isset($_GET['verification'])){
        if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM Users WHERE ver_code='{$_GET['verification']}'"))>0){
            $query = mysqli_query($conn,"UPDATE Users SET ver_code='' WHERE ver_code='{$_GET['verification']}'");
            if($query){
                $msg = "<div class='alert-info'>Account verified :)</div>";
            }
        }
        else{
            header("Location: login.php");
        }
    }

    if(isset($_POST['submit'])){
        $uname = mysqli_real_escape_string($conn,$_POST['Username']);
        $upass= mysqli_real_escape_string($conn,md5($_POST['Password']));

        $sql = "SELECT * FROM Users WHERE Name = '{$uname}' AND password = '{$upass}'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            if(empty($row['ver_code'])){
                $_SESSION['SESSION_NAME'] = $uname ;
                
            }else{
                $msg = "<div class='alert-info'>First verify your account ;)</div>";
            }
        }else{
            $msg = "<div class='alert-danger'>Password or Username don't match :(</div>";
        }
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Sign In</title>
    <link rel="stylesheet" href="../Css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>
    <div class="wrapper">
        <form action="" method="POST" name="loginform" onsubmit="return validate()">
            <h1>Login</h1>
            <p><?php echo $msg; ?></p>
            <p id="result"></p>
            <div class="input-box">
                <input type="text" placeholder="Username" name="Username"required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type = "checkbox">Remember Me</label>
                <a href="forgotpass.php">Forgot Password?</a>
            </div>

            <button type="submit" class="btn" button="btn" onclick="validate()" name="submit" >Login</button>

            <div class="register_link">
                <p>
                    Don't have an account?
                    <a href="signup.php">Register</a>
                </p>
            </div>
        </form>
    </div>
    <script src="../Js/script.js"></script>
</body>
</html>