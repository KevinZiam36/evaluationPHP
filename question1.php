<form action="" method="post">

    <label for="heure">Quelle heure est-il ?</label>
    <input type="number" name="heure" id="heure">

    
    <input type="submit" name ="submit" value="envoyer">
</form> 
<style>
    body{
        background-image: url(https://c8.alamy.com/compfr/rxckny/afficher-horloge-murale-sur-7-heures-en-texture-horloge-de-bureau-afficher-19h-ou-7h-rxckny.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        text-align: center;
        font-size: 20px;
    }
</style>
<?php


if ( isset( $_POST['submit'] ) ) {
    
    $heure = $_POST['heure']; 
    
};

if($heure < 12){
    echo 'Vu qu\'il est ' .$heure. 'h bonne matinée';
}
else if($heure >= 12 && $heure < 14){
    echo 'Vu qu\'il est ' .$heure. 'h bon appetit';
}

else if($heure >= 14 && $heure < 18)
{
    echo 'Vu qu\'il est ' .$heure. 'h bon après-midi';
}
else 
{
    echo 'Vu qu\'il est ' .$heure. 'h bonne soirée';
}


?>