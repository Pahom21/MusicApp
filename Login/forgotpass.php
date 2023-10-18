<?php
    session_start();

    if(isset($_SESSION['SESSION_NAME'])){
    header("Location: welcome.php");
    die();
    }

     //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require '../vendor/autoload.php';
    //Load the database connection
    require_once "../databasethings/config.php";

    $msg="";

    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn,$_POST['Email']);
        $code = mysqli_real_escape_string($conn, md5(rand()));

        if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM Users WHERE email = '{$email}'"))>0){

            $query = mysqli_query($conn,"UPDATE Users SET ver_code = '{$code}' WHERE email = '{$email}'");

            if($query){

                echo "<div style='display: none;'>";
                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'caldwellkibe817@gmail.com';                     //SMTP username
                    $mail->Password   = 'kvgv kaqe otib zlpz';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('caldwellkibe817@gmail.com', 'Vooze_Music');
                    $mail->addAddress($email);     //Add a recipient
                    

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'no reply';
                    $mail->Body = 'Here is the verification link <b><a href="http://localhost/SignInSignUp/Login/changepass.php?reset=' . $code . '">http://localhost/SignInSignUp/Login/changepass.php?reset=' . $code . '</a></b>';

                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                echo "</div>";
                $msg = "<div class = 'alert-info'>$email - A reset link has sent to this email</div>";
            }

            }else{
                $msg = "<div class = 'alert-danger'>$email - This email address can't be found</div>";
        }
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
        <form action="" method="POST" name="fform" onsubmit="return validatep()">
            <h1>Forgot Password</h1>
            <p><?php echo $msg; ?></p>
            <p id="result"></p>

            <div class="input-box">
                <i class='bx bxs-envelope'></i>
                <input type="email" placeholder="Your Email-address" name="Email" required>
                <i class='bx bxs-envelope'></i>
            </div>

            <button type="submit" class="btn" name="submit" onclick="validatep()">Send reset-link</button>

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
