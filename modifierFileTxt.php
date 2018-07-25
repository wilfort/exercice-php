<?php 
/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
  $                                                                     $            
  $                    LIRE le contenue d'un fichier                    $
  $                                                                     $
  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/ 
//  $lines = file("test.txt");
  $contenu="";
//  foreach($lines as $n => $line){
//     $contenu.= $line . "\n";
// }

$handle = @fopen("test.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        $contenu .= $buffer;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}
/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
  $                                                                     $            
  $                  Ecrire le contenue d'un fichier                    $
  $                                                                     $
  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/ 
  if(isset($_POST['envoie'])){
  $contenu .=$_POST['message'].'\n';


  $handle = @fopen("test.txt", "w");

  fwrite($handle, $contenu);

  fclose($handle);
  }


$message=str_replace("\n","<br>",$contenu);

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
    <div >
    <?= $message; ?>
    </div>
    <div>
    <form action="#" method="post">
    <label for="message">Votre message</label><br>
    <textarea name="message" id="message" cols="30" rows="10"></textarea><br>
    <button name="envoie" type="submit">envoie</button>
    </form>
    </div>
</body>
</html>