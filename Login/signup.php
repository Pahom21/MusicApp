<?php
    session_start();

    if(isset($_SESSION['SESSION_NAME'])){
    header("Location: welcome.php");
    die();
}
    include "../databasethings/config.php";
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require '../vendor/autoload.php';

    $msg='';
    if(isset($_POST['submit'])){
        
        $name = mysqli_real_escape_string($conn,$_POST['Username']);
        $Usermail = mysqli_real_escape_string($conn,$_POST['mail']);
        $password = mysqli_real_escape_string($conn,md5($_POST['Password']));
        $confPass = mysqli_real_escape_string($conn,md5($_POST['CPassword']));
        $code = mysqli_real_escape_string($conn,md5(rand()));

        if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM Users WHERE email='{$Usermail}'"))>0){
            $msg ="<div class='alert-danger'>{$Usermail} - This e-mail already exists.</div>";
        }else{

            if($password===$confPass){
                $sql = "INSERT INTO Users (Name,email,password,ver_code)
                VALUES('{$name}','{$Usermail}','{$password}','{$code}')";
                $result = mysqli_query($conn,$sql);

                if($result){
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
                            $mail->Password   = 'kvgv ka777qe ot7777ib 7777zlpz';                               //SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                            //Recipients
                            $mail->setFrom('caldwellkibe817@gmail.com', 'Vooze_Music');
                            $mail->addAddress($Usermail, $name);     //Add a recipient
                           

                            //Content
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = 'no reply';
                            $mail->Body = 'Here is the verification link <b><a href="http://localhost/SignInSignUp/Login/login.php?verification=' . $code . '">http://localhost/SignInSignUp/Login/login.php?verification=' . $code . '</a></b>';

                            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                            $mail->send();
                            echo 'Message has been sent';
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                        echo "</div>";
                        $msg = "<div class='alert-info'>An email has been sent to $Usermail with a verification-link</div>";
                }
                else{
                    $msg = "<div class='alert-danger'>Something went wrong:( </div>";
                }
            }else{
                $msg = "<div class='alert-danger'>Passwords don't match</div>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../Css/signupcss.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
</head>
<body>
    <div class="container">
        <div class="form-box">
            <form action="" method="POST" autocomplete="
            off" onsubmit="return validate()" name="formfilled">
                <h2>Register</h2>
                <p><?php echo $msg; ?></p>
                <p id="result"></p>
                <div class="input-box">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="Username" placeholder="Username">
                </div>
            
                <div class="input-box">
                    <i class='bx bxs-envelope'></i>
                    <input type="email" name="mail" placeholder="Email">
                </div>

                <div class="input-box">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="Password" placeholder="Password">
                </div>

                <div class="input-box">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="CPassword" placeholder="Confirm Password">
                </div>
                <input type="submit" name="submit" class="btn" onclick="validate()" value="Register">


                <div class="group">
                    <!--<span><a href="#">Forget-Password</a></span>-->
                </div>
            </form>
        </div>
        <div class="pop-up" id="popup">
            <ion-icon name="checkmark-circle-outline"></ion-icon>
            <h2>Thank you!!</h2>
            <p>Your were registered succesfully</p>
            <p>An email validation was sent to your email :)</p>
            <a href="#"><button onclick="CloseSlide()">OK</button></a>
        </div>
    </div>
    <script src="../Js/signin.js"></script>
</body>
</html>
