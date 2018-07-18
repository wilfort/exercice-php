<?php
    $message="";

    if(empty($_POST['Age'])==false)
        {
            
            if(is_numeric($_POST['Age'])==true){
                
                if ((($_POST['Age'])<12)and($_POST['Genre']=="M")and($_POST['Langue']=="Yes")) {
                    $message="Hello boy!!";
                }
                elseif ((($_POST['Age'])<12)and($_POST['Genre']=="M")and($_POST['Langue']=="Non")) {
                    $message="Salut petit garçon!";
                }
                elseif ((($_POST['Age'])<12)and($_POST['Genre']=="F")and($_POST['Langue']=="Yes")) {
                    $message="Hello Girl!";
                }
                elseif ((($_POST['Age'])<12)and($_POST['Genre']=="F")and($_POST['Langue']=="Non")) {
                    $message="Salut petite fille!";
                }
                elseif (((12<=$_POST['Age'])and($_POST['Age']<18))and($_POST['Genre']=="M")and($_POST['Langue']=="Yes")) {
                    $message="Hello Teenage boy!";
                }
                elseif (((12<=$_POST['Age'])and($_POST['Age']<18))and($_POST['Genre']=="M")and($_POST['Langue']=="Non")) {
                    $message="Salut l'adolescent!";
                }
                elseif (((12<=$_POST['Age'])and($_POST['Age']<18))and($_POST['Genre']=="F")and($_POST['Langue']=="Yes")) {
                    $message="Hello Teenage girl!";
                }
                elseif (((12<=$_POST['Age'])and($_POST['Age']<18))and($_POST['Genre']=="F")and($_POST['Langue']=="Non")) {
                    $message="Salut l'adolescente!";
                }
                elseif (((18<=$_POST['Age'])and($_POST['Age']<115))and($_POST['Genre']=="M")and($_POST['Langue']=="Yes")) {
                    $message="Hello Sir!";
                }
                elseif (((18<=$_POST['Age'])and($_POST['Age']<115))and($_POST['Genre']=="M")and($_POST['Langue']=="Non")) {
                    $message="Salut monsieur !";
                }
                elseif (((18<=$_POST['Age'])and($_POST['Age']<115))and($_POST['Genre']=="F")and($_POST['Langue']=="Yes")) {
                    $message="Hello Lady!";
                }
                elseif (((18<=$_POST['Age'])and($_POST['Age']<115))and($_POST['Genre']=="F")and($_POST['Langue']=="Non")) {
                    $message="Salut madame !";
                }
                elseif (($_POST['Age']>=115)and($_POST['Genre']=="M")and($_POST['Langue']=="Yes")) {
                    $message="Wow! Still alive, old man?";
                }
                elseif (($_POST['Age']>=115)and($_POST['Genre']=="M")and($_POST['Langue']=="Non")) {
                    $message="Wow! Toujours vivant ?";
                }
                elseif (($_POST['Age']>=115)and($_POST['Genre']=="F")and($_POST['Langue']=="Yes")) {
                    $message="Wow! Still alive, old lady?";
                }
                elseif (($_POST['Age']>=115)and($_POST['Genre']=="F")and($_POST['Langue']=="Non")) {
                    $message="Wow! Toujours vivante ?";
                }

                

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
<form action="conditions4.php" method="post">
    <label for="Age">Quel est votre âge ?</label><br><br>
    <input type="text" name="Age" id="Age"><br><br>
    <label for="Genre">Homme ou Femme?</label><br>
    <input type="radio" name="Genre" id="homme" value="M">
    <label for="homme">Homme</label><br>
    <input type="radio" name="Genre" id="femme" value="F">
    <label for="femme">Femme</label><br><br>
    <label for="Langue">Parles-tu anglais?</label><br>
    <input type="radio" name="Langue" id="Yes" value="Yes">
    <label for="Yes">Yes</label>
    <input type="radio" name="Langue" id="Non" value="Non">
    <label for="Non">non</label><br><br>
    <button type="submit">envoie</button>
</form>
<p>
<?php echo $message; ?></p>
</body>
</html>