

<!-- Créez un lien dans la page passant en paramètre une commande et utilisez SWITCH
 pour afficher un message différent :
 Le lien : « q5.php ?command= 1 »
  Command=1 : « Bonne matinée »
  Command=2 : « Bon appétit »
  Command=3: « Bonne après-midi »
  Command=4 : « Bonne soirée » -->
<a href="$lien1">Commande 1</a>
<a href="$lien2">Commande 2</a>
<a href="$lien3">Commande 3</a>
<a href="$lien4">Commande 4</a>

 <?php 
// echo '<a href="q5.cmd1.php> Commande 1</a>';
// echo '<a href="$command === 2">Commande 2</a>';
// echo '<a href="q5.php?command=3">Commande 3</a>';
// echo '<a href="q5.php?command=4">Commande 4</a>';

$lien1 = 'bonne matinée';
$lien2 = 'bon appétit';
$lien3 = 'bonne après-midi';
$lien4 = 'bonne soirée';

switch($command)
{
    case 1:
        echo 'bonne matinée';
    break;
    case 2:
        echo 'bon appétit';
    break;
    case 3:
        echo ' bonne après-midi';
    break;
   
    default:
        echo 'bonne soirée';
        
    break;
}

?>