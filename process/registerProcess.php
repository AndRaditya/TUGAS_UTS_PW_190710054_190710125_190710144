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
        echo '<script>alert("Email sudah terdaftar");window.location = "../Login_Register/registerPage.php"</script>';
    }else {
        $sql = "INSERT INTO users (name,email,username,nomor_telepon,password,verif_code)VALUES('$name','$email','$username','$nomor_telepon','$password','$code')";
        $query = mysqli_query($con,$sql);

        //Create a new PHPMailer instance
        $mail = new PHPMailer;

        //Tell PHPMailer to use SMTP
        // $mail->isSMTP();
        
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
        $mail->Username = 'mac.restoo@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'macresto123';

        //Set who the message is to be sent from
        $mail->setFrom('no-reply@mac-resto.com', 'MAC-Resto');
        //Set an alternative reply-to address
        //$mail->addReplyTo('replyto@example.com', 'First Last');

        //Set who the message is to be sent to
        $mail->addAddress($email, $name);

        //Set the subject line
        $mail->Subject = 'Verification Account - MAC-Resto';

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $body = "Hi, ".$name."<br>Please verification your email before access our website : <br> http://mac-resto.com/process/confirmEmail.php?code=".$code;

        // http://mac-resto.com/process/confirmEmail.php?code=".$code;
        // http://localhost:8080/uts/process/confirmEmail.php?code=".$code;
        // http://mac-resto.com/process/confirmEmail.php?code=".$code;
       
        $mail->Body = $body;
        //Replace the plain text body with one created manually
        $mail->AltBody = 'Verification Account';

        //send the message, check for errors
        if (!$mail->send()) {
            echo 'Mailer Error: '. $mail->ErrorInfo;
        } else {
             echo '<script>alert("Register Sukses, Silahkan Verifikasi Email terlebih dahulu!"); window.location = "../Login_Register/loginPage.php"</script>';
            //Section 2: IMAP
            //Uncomment these to save your message in the 'Sent Mail' folder.
            #if (save_mail($mail)) {
            #    echo "Message saved!";
            #}
        }

    }


?>