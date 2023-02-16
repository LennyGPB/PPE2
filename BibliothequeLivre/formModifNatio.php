<!doctype html>
<html lang="en">
 
<?php 
include "header.php";

include "connexionPdo.php";

$num = $_GET['num'];
$req=$monPdo->prepare("select * from nationalite where num = :num");
$req->SetFetchMode(PDO::FETCH_OBJ); // Récupère en objet
$req->bindparam(':num', $num);
$req->execute();
$laNationalite = $req->fetch();
?>

<div class="container mt-5">
<h2 class="mt-3 text-center">Modifier une Nationalité</h2>
<form action="valideModifNatio.php" class="col-md-6 offset-md-3 border-primary" method="post">
<div class="form-group">
  <label for="libelle">Libellé</label>
    <input type="text" class="form-control" id="libelle" placeholder="Saisir le Libellé" name="libelle" value="<?php echo $laNationalite->libelle; ?>">
 </div>
    <input type="hidden" id="num" name="num" value="<?php echo $laNationalite->num; ?>">

<div class="row">
  <div class="col"><a href="listeNatio.php" class="btn btn-warning btn-block">Revenir à la liste</a></div>
  <div class="col"><button type="submit" class="btn btn-success btn-block">Modifier</button></div>
</div>

</form>
</div>

</html>