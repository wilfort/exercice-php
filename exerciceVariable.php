<?php
    $prenom="stephane";
    $age=26;
    $faim= true;
    $eyesColor="brun";
    $menFamille= array('0' =>'Rina', '1' =>'Willy');
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
    <p>
        Je m'appelle <?php echo $prenom; ?>,<br>
        je suis agée de <?php echo $age; ?> ans,<br>
        <?php if ($faim === true){echo "j'ai faim";}else{echo "je n'ai pas faim";}?>,<br>
        la couleur de mes eyes sont <?php echo $eyesColor;?>,<br>
        les menbres de ma famille sont : <?php echo($menFamille['0']." et ".$menFamille['1']);?>. 
    </p>
</body>
</html>