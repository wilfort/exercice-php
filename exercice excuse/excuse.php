<?php
    
    $verif=true;
    $maladie=['la gripe','les orilions','la variselle','une pharyngite','une neuro-pharyngite'];
    $deces=['mort du grand-pere','mort de la grand-mere','mort du tonton','mort de la tantine','mort du mo-oncle'];
    $activite=['compétition de judo','compétition de natation','compétition de foot-ball','compétition de basket-ball','compétition de tenis'];
    $autre=['nous sommes parties en voyage','nous sommes aller chez le dentiste','nous sommes aller chez le démartologue',"nous sommes aller chez l'eyeculite","nous sommes aller à la pédiatrie de l'hopital"];
    $excuse="";
    $jour=["dimanche",'lundi','mardi','mecredi','jeudi','vendredi','samedi'];
    $mois = array("01" => "Janvier", "02" => "Février", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Août", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "Decembre");

    if (empty($_POST['Genre'])==false){
        if($_POST['Genre']=="garçon"){$eleve="L’élève, ";
        $genre="il";}else{$eleve="L’élèvee, ";$genre="elle";} 
    }
    else{
        $verif=false;
    }

    if (empty($_POST['NomEnfant'])==false){
        $nomEnfa=$_POST['NomEnfant'];
    }
    else{$excuse.="..................";
        $verif=false;
    }
    if (empty($_POST['NomInstitutrice'])==false){
        $nomInst=$_POST['NomInstitutrice'];  
    }
    else{$excuse.="..................";
        $verif=false;
    }
    $date =$jour[date(w)].", le".date('d'). " ".$mois[date('m')]." ".date('Y');
    switch ($_POST['Raison']) 
    { 
        case 'maladie': // dans le cas où $note vaut 0
            $excuse.="car ".$genre." a attrappée ";
            $rand_keys = array_rand($maladie, 1);
            $excuse.=$maladie[$rand_keys]." qui justifie cette absence.<br>
            Le docteur prévoir une reprise des courspour la fin de semaine.";
            
        break;
        
        case 'deces': // dans le cas où $note vaut 5
            $excuse.="due à la ";
            $rand_keys = array_rand($deces, 1);
            $excuse.=$deces[$rand_keys]." qui justifie cette absence de 3 jours.";
            
        break;
        
        case 'activite': // dans le cas où $note vaut 7
            $excuse.="car ".$genre." va participé à une ";
            $rand_keys = array_rand($activite, 1);
            $excuse.=$activite[$rand_keys]." qui justifie cette absence de 2 à 3 jours.";
            
        break;
        
        case 'autre': // etc. etc.
            $rand_keys = array_rand($autre, 1);
            $excuse.=$autre[$rand_keys]." qui justifie cette absence.";
            
        break;
        
        default:
            $excuse.="..................";
            $verif=false;
    }
    if ($verif===true)
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
    <link rel="stylesheet" href="excuse.css">
    <link rel="icon" type="image/jpeg" href="logo.jpeg" />
</head>
<body>
    <div>
        <form action="excuse.php" method="post">
            <label for="NomEnfant">Le nom de l'enfant : </label><input type="text" name="NomEnfant" id="NomE"><br><br>
            <label for="Genre">Genre de l'enfant </label><br>
            <input type="radio" name="Genre" id="garcon" value='garçon' checked="checked"><label for="Raison">Garçon</label>
            <input type="radio" name="Genre" id="fille" value='fille'><label for="Raison"></label>Fille<br><br>
            <label for="NomInstitutrice">Le nom de l'institutrice : </label><input type="text" name="NomInstitutrice" id="NomI"><br><br>
            <label for="Raison">La raison de l'absence : </label><br>
            <input type="radio" name="Raison" id="maladie" value='maladie' checked="checked"><label for="Raison">maladie</label><br>
            <input type="radio" name="Raison" id="deces" value='deces'><label for="Raison">décès d'un membre de la famille</label><br>
            <input type="radio" name="Raison" id="activite" value='activite'><label for="Raison">activité extra-scolaire importante</label><br>
            <input type="radio" name="Raison" id="autre" value='autre'><label for="Raison">toute autre excuse de ton choix </label><br><br>

            <button type="submit">Générer le mot d'excuse</button>
        </form>
    </div>
<br><br><br><br>
<div id="excuse">
    
    Monsieur le Proviseur ou Madame la dérétrice,<br><br>
    <?php echo $eleve;?><?php echo $nomEnfa?>
    , scolarisé dans votre établissement en classe  de Mr/Md/Mme <?php echo $nomInst?> est autorisé pas ses parents à ne pas assister aux cours scolaires de la journée du <?php echo $date;?>.
    <br>Notre enfant rencontre un problème, <?php echo $excuse?>
    <br><br>Vous remerciant pas avance pour votre compréhension, nous vous prions de bien vouloir accepter nos salutations.
    
</div>

</body>
</html>