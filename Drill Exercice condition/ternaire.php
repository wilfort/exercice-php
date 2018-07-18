<?php
    $bonjour="";
    $genre=$_POST['Genre'];
    if(empty($genre)==false)
        {
            $bonjour = ($genre == "M") ? "Monsieur" : "Madame";
            $bonjour = "Bonjour ".$bonjour.".";
        }
    if(empty($genre)==true){
        $message="";
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
<form action="ternaire.php" method="post">
    <label for="Genre">Homme ou Femme?</label><br>
    <input type="radio" name="Genre" id="homme" value="M">
    <label for="homme">Homme</label><br>
    <input type="radio" name="Genre" id="femme" value="F">
    <label for="femme">Femme</label><br><br>
    <button type="submit">envoie</button>
</form>
<p>
<?php echo $bonjour; ?></p>
</body>
</html>