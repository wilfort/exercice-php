<?php
    $message="";

    if(empty($_POST['Age'])==false)
        {
            
            if(is_numeric($_POST['Age'])==true){
                if(($_POST['Age'])<12){$message="Salut petit!";}
                elseif((12<=$_POST['Age'])and($_POST['Age']<18)){$message="Salut l'ado!";}
                elseif((18<=$_POST['Age'])and($_POST['Age']<115)){ $message="Salut l'adulte!";}
                else{$message="Wow! Toujours vivant?";}
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
<form action="conditions2.php" method="post">
    <label for="Age">Quel est votre âge ?</label><br><br>
    <input type="text" name="Age" id="Age"><br><br>
    <button type="submit">envoie</button>
</form>
<p>
<?php echo $message; ?></p>
</body>
</html>