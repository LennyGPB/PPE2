<?php 
include "header.php";
include "connexionPdo.php";
$libelle = $_POST['libelle']; // Récupère le "libelle" du formulaire
$num = $_POST['num']; 

$req=$monPdo->prepare("update nationalite set libelle = :libelle where num = :num");
$req->bindparam(':num', $num);
$req->bindparam(':libelle', $libelle);
$nb=$req->execute();

echo '<div class="container mt-5">';

if ($nb == 1)
{
    echo '<div class="alert alert-sucess" role="alert">
    La Nationalité à été ajoutée
    </div>';
} else
{
    echo ' <div class="alert alert-warning" role="alert">
    La Nationalité n\'a pas été ajoutée
    </div> ';
}
echo '<a href="listeNatio.php" class="btn btn-primary">Revenir à la liste des Nationalités</a>';
echo '</div>';

?>

<?php include "footer.php" ?>