 <?php

try

{
//chaine de connexion
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'ecodair');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM Test');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

  echo "<p>".$donnees['id']." ".$donnees['pseudo']." ".$donnees['email']."</p>";
}
?>
    <p>
    <strong>Pseudo</strong> : <?php echo $donnees['pseudo']; ?><br />
    Le pseudo est : <?php echo $donnees['email']; ?>
<?php


$reponse->closeCursor(); // Termine le traitement de la requête

echo'Pseudo de l\'utilisateur:'.$_POST['pseudo'];

echo'Mail de l\'utilisateur:'.$_POST['email'];

//echo'Message de l\'utilisateur:'.$_POST['ameliorer'];

$message = $_POST['pseudo'].';'.$_POST['email'].';'.$_POST['message'];
$fichier=fopen('donneesformu', 'a+');

      fputs($fichier, $message);
     
      fclose($fichier);
?>