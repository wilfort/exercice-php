<?php
    $message="";
    if($_POST["chambre"]=="dégoutante")
        {
            $message.="Range et Nétoie ta chambre, on dirait la cage d'un bonobo!";
        }   
    elseif ($_POST["chambre"]=="sale")
        {$message.="Nétoie ta chambre, elle est un peu sale";}
    elseif ($_POST["chambre"]=="en ordre")
        {$message.="Ta chambre est rangée";}
    elseif ($_POST["chambre"]=="immaculée")
        {$message.="Ta chambre est trop propre, vis un peu!";}
    elseif ($_POST["chambre"]=="maniaque")
        {$message="Ta chambre est beaucoup trop propre, vis au mois deux semainde!";}
    else
        {$message.="";}

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
<form action="" method="post">
    <label for="chambre">Commant est l'état de votre chambre</label><br><br>
    <input type="radio" name="chambre" id="degoutante" value="dégoutante"><label for="degoutante">dégoutante</label><br>
    <input type="radio" name="chambre" id="sale" value="sale"><label for="sale">sale</label><br>
    <input type="radio" name="chambre" id="enOrdre" value="en ordre"><label for="enOrdre">en ordre</label><br>
    <input type="radio" name="chambre" id="immaculee" value="immaculée"><label for="immaculee">immaculée</label><br>
    <input type="radio" name="chambre" id="maniaque" value="maniaque"><label for="maniaque">maniaque</label><br>
    <button type="submit">envoie</button>
</form>
<p>
<?php echo $message; ?></p>
</body>
</html>