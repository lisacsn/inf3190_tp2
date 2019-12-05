<?php 

require 'config.php';

if(isset($_POST['submit']))
{
    $datemanif = date('Y-m-d', strtotime($_POST['datemanif'])); //Met dans le format attendu peu importe
                                                                //la région ou le navigateur.
    
    $database->insert('manifestations',[
        'lieux'=>$_POST['selectLieu'],
        'membre'=>$_POST['selectMembre'],
        'date'=>$datemanif
    ]);
}

header("Location: ../administration.html");

?>