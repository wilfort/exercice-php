<?php
    $excuse="Mot excuse<br><br>Je prieré d'excusée mon enfant ";
    $verif=[];
    if (empty($_POST['NomEnfant'])==false){
        $excuse.=$_POST['NomEnfant'];
        $verif[]=true;
    }
    else{$excuse.="..................";
        $verif[]=false;
    }
    $excuse.=" .<br><br>Pour ne pas pouvoir assitée au cours de Mr/Md/Mme ";
    if (empty($_POST['NomInstitutrice'])==false){
        $excuse.=$_POST['NomInstitutrice'];
        $verif[]=true;
    }
    else{$excuse.="..................";
        $verif[]=false;
    }    
    $excuse.=" .<br><br>Pour la raison suivante :<br>";
    switch ($_POST['Raison']) 
    { 
        case 'maladie': // dans le cas où $note vaut 0
            $excuse.="maladie";
            $verif[]=true;
        break;
        
        case 'deces': // dans le cas où $note vaut 5
            $excuse.="décès d'un membre de la famille";
            $verif[]=true;
        break;
        
        case 'activite': // dans le cas où $note vaut 7
            $excuse.="activité extra-scolaire importante";
            $verif[]=true;
        break;
        
        case 'autre': // etc. etc.
            $excuse.="toute autre excuse de ton choix : ";
            if (empty($_POST['RaisonAutre'])==false){
                $excuse.=$_GET['RaisonAutre'];
                $verif[]=true;}
            else{$excuse.="........";
                $verif[]=false;}
        break;
        
        default:
            $excuse.="..................";
            $verif[]=false;
    }
    $excuse.=" .<br><br>Ce mot est valabe pour la date du ";
    if (empty($_POST['Date'])==false){
        $excuse.=$_POST['Date'];
        $verif[]=true;
    }
    else{$excuse.="..................";
        $verif[]=false;
    }
    $excuse.=" .";

    if (($verif[0]===true)and($verif[1]===true)and($verif[2]===true)and($verif[3]===true))
    {
        {
            ?>
            <style type="text/css">
                #excuse {
                        display: block;
              }
          </style>
        <?php }
    }else{
        {
            ?>
            <style type="text/css">
                #excuse {
                        display: none;
              }
          </style>
        <?php }
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
    <div>
        <form action="excuse.php" method="post">
            <label for="NomEnfant">Le nom de l'enfant : </label><input type="text" name="NomEnfant" id="NomE"><br><br>
            <label for="NomInstitutrice">Le nom de l'institutrice : </label><input type="text" name="NomInstitutrice" id="NomI"><br><br>
            <label for="Raison">La raison de l'absence : </label><br>
            <input type="radio" name="Raison" id="maladie" value='maladie' checked="checked"><label for="Raison">maladie</label><br>
            <input type="radio" name="Raison" id="deces" value='deces'><label for="Raison">décès d'un membre de la famille</label><br>
            <input type="radio" name="Raison" id="activite" value='activite'><label for="Raison">activité extra-scolaire importante</label><br>
            <input type="radio" name="Raison" id="autre" value='autre'><label for="Raison">toute autre excuse de ton choix : </label><input type="text"name="RaisonAutre" id="NomE"><br><br>

            <input type="date" name="Date" id="date"><br><br>
            <button type="submit">Générer le mot d'excuse</button>
        </form>
    </div>
<br><br><br><br>
<div id="excuse">
    <?php
        echo $excuse;
    ?>
</div>

</body>
</html>