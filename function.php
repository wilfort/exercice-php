<?php
    function premierM($mot){
        $mot=ucfirst($mot);
        return $mot;
    }
    function anne(){
        return date('Y');
    }
    function dateComp(){
        return date('j F Y   G:i:s');
    }
    function somme($nb1, $nb2){
        $somme = $nb1 + $nb2;
        return $somme;
    }
    function somme2($nb1, $nb2){
        if((is_int($nb1)==true)AND(is_int($nb2)==true))
        {
            $somme = $nb1 + $nb2;
        }
        else{
            $somme="Erreur, argument non numérique.";}
        return $somme;
    }
    function initiales($mot){
        $n_mot = explode(" ",$mot);
        foreach($n_mot as $lettre){
            $nom_initiale .= $lettre{0};
        }
        return strtoupper($nom_initiale);
    }
    echo initiales("les chat sont petit et blanch");
    function remplace($mot){
        $mot=str_replace("ae","æ",$mot);
        return $mot;
    }
    echo remplace('"caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"');
    function remplace2($mot){
        $mot=str_replace("æ","ae",$mot);
        return $mot;
    }
    echo remplace2('cæcotrophie, chænichthys, microsphæra, sphærotheca');

    function feedback($message,$balise){
        $codehtml="<div class\"".$balise."\">".$message."</div>";
        return $codehtml;
    }
    echo feedback("adresse email incorrecte", "warning");
    function feedback2($message,$balise="info"){
        $codehtml="<div class\"".$balise."\">".$message."</div>";
        return $codehtml;
    }
    echo feedback("adresse email incorrecte");
    function deuxmot(){
        $mot = array("","");
        for($nombre_de_char = 1; $nombre_de_char <= 5; $nombre_de_char++)
        {
            $mot[0].=chr(rand(65,90));
            
        }
        for($nombre_de_char = 1; $nombre_de_char <= rand(7,15); $nombre_de_char++){
            $mot[1].=chr(rand(65,90));
        }
        return $mot;
    }
    $mots=deuxmot();
    echo("<br>le permier mot est : ".$mots[0].", le second mot est : ".$mots[1].".");

    function chaineMaji($chaine)
    {
       return strtoupper($chaine);
    }
    // echo chaineMaji("salu, dsshjd dshds dhjd dsdsj dskdhfdshs  sdhdsdsh ds ds ds dudsidsi.");

    function volume_dun_cone($rayon, $hauteur){
        $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
        $message='Le volume du cône de rayon '.$rayon.' et de hauteur '.$hauteur.' est : ' . $volume . ' cm<sup>3</sup><br />';
        return $message;
    }

    function factorielle($nb){
        if ($nb == 0){return 1;}
        else{
            return $nb *factorielle($nb-1); 
        }
    }
    //echo factorielle(4);


    function NbrPre($n)//fonction pour vérifier qu'un nombre est premier ou non
        {
        for($x=2; $x<$n; $x++)
        {
            if($n %$x ==0)
                {
                return 0;
                }
            }
        return 1;
        }
        // $a = NbrPre(3);
        // if ($a==0)
        // echo 'This is not a Prime Number.....'."\n";
        // else
        // echo 'This is a Prime Number..'."\n";

    function reverse_string($str1)
    {
        $n = strlen($str1);
        if($n == 1)
        {
            return $str1;
        }
        else
        {
            $n--;
            return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);
        }

        // for ($n=0 ; $n < strlen($str1);$n++) {
        //     $mot=$str1[$n].$mot;
        // }
        // return $mot;
    }
    echo ("<br>".reverse_string('1234')."<br>");

    function triTableau($tab){
        for($x=0;$x<count($tab);$x++){
            $min=$x;
            for($y=$x+1;$y<count($tab);$y++){
                if($tab[$y]<$tab[$min])
                {
                    $memo=$tab[$min];
                    $tab[$min]=$tab[$y];
                    $tab[$y]=$memo;
                }
            }
        }
        return $tab;
    }
    $tab1 = array(51,14,1,21,'hj');
    print_r (triTableau($tab1));


    function verifMinuscul($str1)
    {
        for ($sc = 0; $sc < strlen($str1); $sc++) {
            if (ord($str1[$sc]) >= ord('A') && ord($str1[$sc]) <= ord('Z')) 
            {
                return false;
            }
        }
        return true;
    }

    function verifPalindrome($string) 
    {
        if ($string == strrev($string))
            return 1;
        else
            return 0;
    }

    function reverseString($chaineChar)
    {
        return strrev($chaineChar);
    }
    // str_replace("ae","æ",$mot)
$chason="Buvons un coup ma serpette est perdue,
Mais le manche, mais le manche,
Buvons un coup ma serpette est perdue
Mais le manche est revenu.";
echo ("<br><br>".$chason."<br><br>");
function chant($musique, $elementS){
    $substitutions = array( "E", "I", "O", "U", "OU", "É", "È", "OI", "UI", "OUI", "AN", "IN", "ON", "UN", "OIN","AIS","UE","EST","OUP");
    krsort($substitutions);
    foreach ($substitutions  as $index => $valeurSon){
        $valeurSon=strtolower($valeurSon);
        $elementS=strtolower($elementS);
        $musique=str_replace($valeurSon,$elementS,$musique);


    }
    return $musique;
}
echo("A<br><br>".chant($chason,"A")
);
 ?>