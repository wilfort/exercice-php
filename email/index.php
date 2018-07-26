<?php
    use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;
  

    require './vendor/autoload.php';
    if(isset($_POST['envoie'])){
    $mail = new PHPMailer(true);
    try{
      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $_POST['from'];                 // SMTP username
    $mail->Password = $_POST['password'];                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    $mail->setFrom($_POST['from'], 'wilfort stephane');
    $mail->addAddress($_POST['adres'], 'wilfort stephane');
    $mail->addAttachment('/home/user/Bureau/stephane/projets_AllezCine/img/animaux-fantastiques.jpg', 'animaux-fantastiques.jpg');
    $mail->Subject  = $_POST['tite'];
    // $mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
    $mail->isHTML(true);
    $mail->Body = 'Hello, <b>my friend</b>! This message uses HTML!';
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent.';
    }
  } catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }
  //Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}
unset($mail);
unset($_POST);
  }

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="#" method="post">
  <label for="">From</label>
  <input name="from" type="text">
  <br>
  <label for="">password</label>
  <input type="password" name="password" id="password">
  <br>
  <label for="">Adresse mail</label>
  <input name="adres" type="text">
  <br>
  <label for="">Subject</label>
  <input name="tite" type="text">
  <br>
  <button name="envoie" type="submit">envoie</button>
  <br>
  </form>
</body>
</html>
