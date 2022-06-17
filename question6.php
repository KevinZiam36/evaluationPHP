<?php
//Créez un formulaire HTML demandant le nom et le prénom de l’utilisateur. En utilisant 
//la méthode POST, affichez un message de bienvenue remplaçant $prenom et $nom par les
//informations saisies dans le formulaire.

?>

<!--creation du formulaire-->
<form action="" method="post">

    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" id="prenom">

    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">

    <input type="submit" name ="submit" value="envoyer">
</form> 



<?php

 if ( isset( $_POST['submit'] ) ) {
    
     $prenom = $_POST['prenom']; 
     $nom = $_POST['nom']; 
     
     
     echo "Bienvenue $nom $prenom";
     exit;
  }

?>