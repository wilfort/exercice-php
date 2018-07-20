<?php 
$genre=$_POST['Genre'];
$message = (empty($genre)==false) ? (
    (
        ($genre == "humain") ? '<IMG SRC="./humain.gif">' : (
            ($genre == "chat") ? '<IMG SRC="./chat.gif">' :'<IMG SRC="./licorne.gif">'
        )
        )
    ) : "";

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
<form action="licorne.php" method="post">
    <label for="Genre">Es-tu un humain, un chat ou une licorne ?</label><br>
    <input type="radio" name="Genre" id="humain" value="humain">
    <label for="humain">humain</label><br>
    <input type="radio" name="Genre" id="chat" value="chat">
    <label for="chat">chat</label><br>
    <input type="radio" name="Genre" id="licorne" value="licorne">
    <label for="licorne">licorne</label><br><br>
    <button type="submit">envoie</button>
</form>
<p>
<?php echo $message; ?></p>
</body>
</html>