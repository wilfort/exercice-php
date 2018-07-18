<?php
    $message="";
    $age=$_POST['Age'];
    $sexe=$_POST['Genre'];
    if(empty($age)==false)
        {
            
            if(is_numeric($age)==true){
                if(($age<40)and($age>21)and($sexe=="F")){$message="Bonjour, bienvenue parmi nous!";}
                if ((($age<40)and($age>21)and($sexe=="F"))==false)
                {$message="Désolé, vous ne remplissez pas les critères de sélection.";}
            }

            if(is_numeric($age)==false){
                $message="Votre age doit etre ecrite en chiffre pas en mot";
            }
        }
    if(empty($age)==true){
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
<form action="conditions8.php" method="post">
    <label for="Age">Quel est votre âge ?</label><br><br>
    <input type="text" name="Age" id="Age"><br><br>
    <label for="Genre">Homme ou Femme?</label><br>
    <input type="radio" name="Genre" id="homme" value="M">
    <label for="homme">Homme</label><br>
    <input type="radio" name="Genre" id="femme" value="F">
    <label for="femme">Femme</label><br><br>
    <button type="submit">envoie</button>
</form>
<p>
<?php echo $message; ?></p>
</body>
</html>