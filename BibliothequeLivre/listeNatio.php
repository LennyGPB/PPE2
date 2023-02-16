<!doctype html>
<html lang="en">
 
<?php 
include "header.php";
include "connexionPdo.php";

$req=$monPdo->prepare("select * from nationalite");
$req->SetFetchMode(PDO::FETCH_OBJ); // Récupère en objet
$req->execute();

$lesNationalite = $req->fetchAll();

?>

<div class="container mt-5">
<div class="row">
    <div class="col-9"><h2>Liste des nationalités</h2></div>
  <div class="col-3"><a href="formAjoutNatio.php" class="btn btn-success"><i class="fas fa-plus-circle"></i> Creer une nationalité</a></div>
</div>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col" class="col-md-2">Numéro</th>
      <th scope="col" class="col-md-8">Libellé</th>
      <th scope="col" class="col-md-2">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($lesNationalite as $nationalite)
  {
    
    echo "<tr>";
    echo "<td class='col-md-2'>$nationalite->num</td>"; // Numero
    echo "<td class='col-md-8'>$nationalite->libelle</td>";
    echo "<td class='col-md-2'>
    <a href='formModifNatio.php?num=$nationalite->num'class='btn btn-primary'><i class='fas fa-plus-circle'></i></a>
    <a href=''class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
    </td>";
    echo "</tr>";

  } ?>
    
</table>

</div>


<?php include "footer.php" ?>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f7c161e92f.js" crossorigin="anonymous"></script>
      
  </body>
</html>
