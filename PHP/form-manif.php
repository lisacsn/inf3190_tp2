<?php 

require 'head.php';
require 'config.php';

$idLieux = $database->select('lieux',
    'id'
);

$idMembre = $database->select('membres',
    'id'
);

?>

<form name="lieux" method="post" action="form-manif-post.php" style="padding: 2%">
    <fieldset class="form-group">
        <legend>Entrez les informations pour une nouvelle manifestation</legend>
        
        <label for="selectLieu">Lieu :</label>
        <select class="form-control" id="selectLieu" name="selectLieu">

<?php
        foreach($idLieux as $id){
            echo "<option>$id</option>";
        }
?>     
        </select>
        
        <label for="selectMembre">Membre :</label>
        <select class="form-control" id="selectMembre" name="selectMembre">
<?php
        foreach($idMembre as $id){
            echo "<option>$id</option>";
        }
?>   
        </select>
        <div class="form-group">
            <label for="datemanif">Date de l'évènement :</label>
            <input type="date" name="datemanif" id="datemanif" required>
        </div>
    </fieldset>
    <input type="reset" value="Annuler" class="btn btn-danger" name="annuler">
    <input type="submit" value="Soumettre" name="submit" class="btn btn-primary">
</form>

<?php
require 'tail.php';
?>