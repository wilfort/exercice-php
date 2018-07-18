<?php
    $message="";

    if(empty($_POST['Age'])==false)
        {
            
            if(is_numeric($_POST['Age'])==true){
                if((($_POST['Age'])<12)and($_POST['Genre']=="M")){$message="Salut petit garçon!";}
                elseif((($_POST['Age'])<12)and($_POST['Genre']=="F")){$message="Salut petite fille!";}
                elseif(((12<=$_POST['Age'])and($_POST['Age']<18))and($_POST['Genre']=="M")){$message="Salut l'adolescent!";}
                elseif(((12<=$_POST['Age'])and($_POST['Age']<18))and($_POST['Genre']=="F")){$message="Salut l'adolescente!";}
                elseif(((18<=$_POST['Age'])and($_POST['Age']<115))and($_POST['Genre']=="M")){$message="Salut monsieur !";}
                elseif(((18<=$_POST['Age'])and($_POST['Age']<115))and($_POST['Genre']=="F")){$message="Salut madame !";}
                elseif(($_POST['Age']>=115)and($_POST['Genre']=="M")){$message="Wow! Toujours vivant ?";}
                elseif(($_POST['Age']>=115)and($_POST['Genre']=="F")){ $message="Wow! Toujours vivante ?";}
            }
            else{
                $message="Votre age doit etre ecrite en chiffre pas en mot";
            }
        }
    else{
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
<form action="conditions3.php" method="post">
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