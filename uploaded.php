
<?php
if(isset($_POST['envoie'])){
if ($_FILES['nom_du_fichier']['error']) {     
    switch ($_FILES['nom_du_fichier']['error']){     
             case 1: // UPLOAD_ERR_INI_SIZE     
             echo"Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";     
             break;     
             case 2: // UPLOAD_ERR_FORM_SIZE     
             echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !"; 
             break;     
             case 3: // UPLOAD_ERR_PARTIAL     
             echo "L'envoi du fichier a été interrompu pendant le transfert !";     
             break;     
             case 4: // UPLOAD_ERR_NO_FILE     
             echo "Le fichier que vous avez envoyé a une taille nulle !"; 
             break;     
    }     
}     
else {     
// $_FILES['nom_du_fichier']['error'] vaut 0 soit UPLOAD_ERR_OK     
// ce qui signifie qu'il n'y a eu aucune erreur     
}   
 if ((isset($_FILES['nom_du_fichier']['tmp_name'])&&($_FILES['nom_du_fichier']['error'] == UPLOAD_ERR_OK))) {     
$chemin_destination = '/var/www/html/exercice%20php/ficher/';
echo basename($_FILES['nom_du_fichier']['name'])."<br>";

if(
move_uploaded_file($_FILES['nom_du_fichier']["tmp_name"], $chemin_destination.(basename($_FILES['nom_du_fichier']['name']))))  
{
    echo 'Upload effectué avec succès !';
}
else //Sinon (la fonction renvoie FALSE).
{
    echo 'Echec de l\'upload !';
}  
} 
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
    <form method="post" action="uploaded.php"
    enctype="multipart/form-data">     
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">     
    <input type="file" name="nom_du_fichier">    
    <input type="submit" name="envoie" value="Envoyer">    
    </form>

    <pre><?php  print_r($_FILES); ?></pre>
</body>
</html>