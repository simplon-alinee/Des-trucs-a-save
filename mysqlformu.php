<?php 
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'ecodair');

$req = $bdd->prepare('INSERT INTO Test(pseudo, email, message) VALUES(:pseudo, :email, :message)');
$req->execute(array(
'pseudo' => $_POST['pseudo'],
'email' => $_POST['email'],
'message' => $_POST['message'],
));

DELETE FROM 'email' WHERE email='a.elwert@hotmail.fr';
//echo 'Cette p**** de bdd a été mise à jour !';
?> 