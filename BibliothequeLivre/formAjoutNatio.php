<!doctype html>
<html lang="en">
 
<?php 
include "header.php";
?>

<div class="container mt-5">
<h2 class="mt-3 text-center">Ajouter une Nationalité</h2>
<form action="valideAjoutNatio.php" class="col-md-6 offset-md-3 border-primary" method="post">
<div class="form-group">
  <label for="libelle">Libellé</label>
  <input type="text" class="form-control" id="libelle" placeholder="Saisir le Libellé" name="libelle">
</div>

<div class="row">
  <div class="col"><a href="listeNatio.php" class="btn btn-warning btn-block">Revenir à la liste</a></div>
  <div class="col"><button type="submit" class="btn btn-success btn-block">Ajouter</button></div>
</div>

</form>
</div>


<?php include "footer.php" ?>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f7c161e92f.js" crossorigin="anonymous"></script>
      
  </body>
</html>
