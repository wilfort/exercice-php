<?php 
    $pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
    foreach ($pronoms_personnels  as $index => $n){
        echo $index." => ".$n." ";
        if($n=='Je'){echo "code";}
        elseif($n=='Tu'){echo "codes";}
        elseif($n=='Il/Elle'){echo "code";}
        elseif($n=='Nous'){echo "codons";}
        elseif($n=='Vous'){echo "codez";}
        elseif($n=='Elles/Ils'){echo "codent";}
        echo "<br>";
    }

    $nombre_de_lignes = 1;

    while ($nombre_de_lignes <= 120)
    {
        echo $nombre_de_lignes ." : Je ne dois pas regarder les mouches voler quand j'apprends le PHP.<br />";
        $nombre_de_lignes++; // équivaut à écrire $nombre_de_lignes = $nombre_de_lignes +1;
    }
    for ($nombre_de_lignes = 1; $nombre_de_lignes <= 120; $nombre_de_lignes++)
    {
        echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
    }
    $pays = array('BE'=>'Belgique','FR'=>'France','CH'=>'Chine','IT'=>'Italy','US'=>'USA','MX'=>'Mexique','JP'=>'Japon','ES'=>'Espagne','PB'=>'Pays-bas','BR'=>'Brésil');
    echo "<select>";
    foreach ($pays  as $index => $nom){
        echo "<option value='".$index."'>".$nom."</option>";
    }
    echo"</select>";
?>