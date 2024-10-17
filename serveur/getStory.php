<?php

include "../includes/connectionBdd.php";

///////////////////////////////////////////////////

header('Access-Control-Allow-Origin: *');


$stmt = ("SELECT
texte_histoire.contenu_histoire,
texte_histoire.date_ecriture,
utilisateurs.login,
histoire.titre_histoire,
categorie_histoire.nom_categorie_histoire
FROM
texte_histoire
JOIN
utilisateurs ON texte_histoire.id_utilisateur = utilisateurs.id_utilisateur
JOIN
histoire ON texte_histoire.id_histoire = histoire.id_histoire
JOIN
categorie_histoire ON histoire.categorie_histoire = categorie_histoire.categorie_histoire;");



$storiesStatement = $bdd->prepare($stmt);
$storiesStatement->execute();
$stories = $storiesStatement->fetchAll();
echo json_encode($stories);


?>
