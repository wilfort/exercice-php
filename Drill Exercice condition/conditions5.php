<?php
    $message="";

    if(empty($_POST['Note'])==false)
        {
            
            if(is_numeric($_POST['Note'])==true){
                
                if ((($_POST['Note'])<4)and($_POST['Note']>0)) {
                    $message="Ce travail est nul.";
                }
                elseif ((($_POST['Note'])<10)and($_POST['Note']>5)) {
                    $message="Ce travail n'est pas terrible.";
                }
                elseif (($_POST['Note'])==10) {
                    $message="Tout juste!";
                }
                elseif ((($_POST['Note'])<15)and($_POST['Note']>10)) {
                    $message="C'est pas mal.";
                }
                elseif ((($_POST['Note'])<19)and($_POST['Note']>14)) {
                    $message="Bravo!";
                }
                elseif ((($_POST['Note'])<21)and($_POST['Note']>18)) {
                    $message="Police! Arrêtez ce tricheur!";
                }

            }
            else{
                $message="Vous deviez ecrite en chiffre pas en mot";
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
<form action="conditions5.php" method="post">
    <label for="Note">Quel est votre Note ?</label><br><br>
    <input type="number" name="Note" id="Note"><br><br>
    <button type="submit">envoie</button>
</form>
<p>
<?php echo $message; ?></p>
</body>
</html>