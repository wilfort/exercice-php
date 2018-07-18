<?php
    $pays = array( 'Belgique', 'France' , 'Allemagne', 'Pays-Bas', 'Ukraine' );
    echo $pays[2];
    $famille=array('papa'=>'willy','maman'=>'rina','tonton'=>'jean','papy'=>'henry','cousine'=>'lola');
    print_r("<br>");
    print_r($famille);
    $aliment=array("pizza","hambuger","pain sausise","poulet frite");
    print_r("<br>");
    print_r($aliment);print_r("<br>");
    $filmserie=array("film"=>array("iron man","avenger","perference"=>"harry potter"),"serie"=>array("izombie","merlin","grim","perference"=>"Doctor Who"));
    print_r($filmserie["film"]['perference']." ".$filmserie["serie"]['perference']);
    $papa= array(
        'naissance'	=> 1973 , 
        'prenom' 		=> 'Alexandre' ,
        'nom' 	  		=> 'Plennevaux' ,
        'aime_le_foot'  => true,
        'hobbies' 	=> array("film","serie","anime","animeaux","théatre")
    );
    $moi = array(
        'naissance'	=> 1973 , 
        'prenom' 		=> 'Alexandre' ,
        'nom' 	  		=> 'Plennevaux' ,
        'aime_le_foot'  => true,
        'hobbies' 	=> array("film","serie","anime","animeaux","théatre")
        
    );
    $moi['papa']= $papa;
    echo '<pre>';
    print_r($moi);
    echo '</pre>';
    $web_development=array("frontend"=>array(),"backend"=>array());
    $web_development["frontend"][]="xhtml";
    $web_development["backend"][]="Ruby on Rails";
    $web_development["frontend"][]="CSS";
    $web_development["backend"][]="Flash";
    $web_development["frontend"][]="Javascript";
    $web_development["frontend"][0]="html";
    unset($web_development["backend"][array_search("Flash", $web_development["backend"])]);
    
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
?>