<?php
    require ('../db/db.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/OAuth.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/POP3.php';
    require '../PHPMailer/src/SMTP.php';

    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $code = md5($email.date('Y-m-d'));

    $sql = "SELECT * FROM users where email='$email'";
    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query) > 0){
        echo '<script>alert("Email sudah terdaftar");</script>';
    }else {
        $sql = "INSERT INTO users (name,email,username,nomor_telepon,password,verif_code)VALUES('$name','$email','$username','$nomor_telepon','$password','$code')";
        $query = mysqli_query($con,$sql);

        //Create a new PHPMailer instance
        $mail = new PHPMailer;

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // SMTP::DEBUG_OFF = off (for production use)
        // SMTP::DEBUG_CLIENT = client messages
        // SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = SMTP::DEBUG_OFF;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'candrapointblank123@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'selangfour030900';

        //Set who the message is to be sent from
        $mail->setFrom('no-reply@yourwebsite.com', 'MAC-Resto');

        //Set an alternative reply-to address
        //$mail->addReplyTo('replyto@example.com', 'First Last');

        //Set who the message is to be sent to
        $mail->addAddress($email, $name);

        //Set the subject line
        $mail->Subject = 'Verification Account - nama website';

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $body = "Hi, ".$name."<br>Plase verif your email before access our website : <br> http://localhost:8080/Project_UTS_PW/process/confirmEmail.php?code=".$code;
        $mail->Body = $body;
        //Replace the plain text body with one created manually
        $mail->AltBody = 'Verification Account';

        //send the message, check for errors
        if (!$mail->send()) {
            echo 'Mailer Error: '. $mail->ErrorInfo;
        } else {
            echo '
                <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
                <title>Register</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <link rel="stylesheet" href="../css/styleRegisterSukses.css">
            </head>

            <body>
                <div class="text-center d-md-flex justify-content-md-center align-items-md-center">
                    <h1>Register Berhasil, silahkan Verifikasi Email anda terlebih dahulu!&nbsp;
                        <a href="https://mail.google.com/mail">Disini</a>
                    </h1>
                </div>
            </body>
            </html>
            ';
            //Section 2: IMAP
            //Uncomment these to save your message in the 'Sent Mail' folder.
            #if (save_mail($mail)) {
            #    echo "Message saved!";
            #}
        }

    }





?>