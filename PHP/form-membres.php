<?php 

require 'config.php';

if(isset($_POST['submit']))
{
    $bday = date('Y-m-d', strtotime($_POST['datenaissance'])); //Met dans le format attendu peu importe
                                                               //la région ou le navigateur.
    $infoPhoto = $_FILES["photo"];
    $nomPhoto = $infoPhoto['name'];
    $tmpFile=$infoPhoto['tmp_name'];
    $saveDir = "images";
    $path = "$saveDir"."/$nomPhoto";
    
    move_uploaded_file("$tmpFile","$path");
    
    $database->insert('membres',[
        'prenom'=>$_POST['prenom'],
        'nom'=>$_POST['nom'],
        'datenaissance'=>$bday,
        'photo'=>$path,
        'fonction'=>$_POST['fonction']
    ]);
}

header("Location: ../administration.html");

?>