<?php 

require 'config.php';

if(isset($_POST['submit']))
{
    $database->insert('lieux',[
        'nom'=>$_POST['nomLieu'],
        'commentaire'=>$_POST['Commentaire']
    ]);
}

header("Location: ../administration.html");

?>