<?php
require 'head.php';
require 'config.php';

$manif_data = $database->select('manifestations',['membre','lieux','date']);

?>

<table id="datatable" class="display">
    <thead>
        <tr>
            <th> Nom </th>
            <th> Prénom </th>
            <th> Lieu </th>
            <th> Date </th>
        </tr>
    </thead>
    <tbody>
        
<?php
        for($i = 0 ; $i < sizeof($manif_data) ; $i++){
            $nom =    $database->select('membres','nom',['id'=>$manif_data[$i]['membre']])[0];
            $prenom = $database->select('membres','prenom',['id'=>$manif_data[$i]['membre']])[0];
            $lieu =   $database->select('lieux','nom',['id'=>$manif_data[$i]['lieux']])[0];
            $date =   $manif_data[$i]['date'];
            
            ?>
            <tr>
                <td><?=$nom ?></td>
                <td><?=$prenom ?></td>
                <td><?=$lieu ?></td>
                <td><?=$date ?></td>
            </tr>
            <?php
        }
?>
    </tbody>
</table>

<script>
    $(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>

<?php
require 'tail.php';
?>