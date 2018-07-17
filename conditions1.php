<?php
    $heure=((date('H'))*60)+(date('i'));
    $message;
    if((300<=$heure)and($heure<=540)){$message="Bonjour!";}
    elseif((540<$heure)and($heure<=720)){$message="Bonne journée!";}
    elseif((720<$heure)and($heure<=960)){$message="Bon après-midi!";}
    elseif((960<$heure)and($heure<=1260)){$message="Bonne soirée!";}
    else{$message="Bonne nuit!";}
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

<?php echo $message; ?>
</body>
</html>