<?php

require 'config.php';

$tab = $database->select('membres',['id','fonction','prenom','nom','photo']);


$tabfinal = '[{"id" : "CADRE", "parent" : "#", "text" : "Cadres du syndicat", "icon" : "images/logo-cadres.ico"},{"id" : "DELEGUE", "parent" : "#", "text" : "Délégués syndicaux", "icon" : "images/logo-delegues.ico"},{"id" : "MEMBRE", "parent" : "#", "text" : "Simples membres", "icon" : "images/logo-membres.ico"}';

for($i=0 ; $i<sizeof($tab) ; $i++){
    $tabfinal = $tabfinal.',{"id" : "'. $tab[$i]["id"] . '", "parent" : "' . $tab[$i]["fonction"] . '", "text" : "' . $tab[$i]["prenom"] . ' ' . $tab[$i]["nom"] . '", "icon" : "PHP/'. $tab[$i]["photo"] . '"}';
}
$tabfinal = $tabfinal . ']';

?>

<div id="jstree"></div>

<script>
    $(function(){
        $('#jstree').jstree({ 'core' : {
            'data' : <?=$tabfinal ?>
        }});
    });
</script>

 <button id="dismiss" class="btn btn-secondary btn-lg btn-block">Masquer</button>