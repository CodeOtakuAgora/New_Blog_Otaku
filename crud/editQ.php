<?php

// on définit notre balise title
$titleAdminCrud = "Edition Administration";
$title = "Edition Administration";

// on inclut notre package (librairie) qui s'occupe de charger toutes les pages dont on a besoin
require_once("../include/require.php");

// on vérifie si le formulaire à été validé
if (count($_POST) > 0) {
    // on apelle la fonction updateUser qui appartient à la classe User
    // en lui passant en paramettre les valeurs de ce qui a été rentré dans les inputs
    $sql = "UPDATE `quiz` SET `texte` = ?, `role` = ?, 
            `id_categorie` = ?, `reponse` = ?, `id_question` = ?
            WHERE `id` = ?";
    $stmt = Bdd::getInstance()->conn->prepare($sql);
    $stmt->execute([
        $_POST['texte'],
        $_POST['role'],
        $_POST['id_categorie'],
        $_POST['reponse'],
        $_POST['id_question'],
        $_GET['id']
    ]);

	$updatedList = Bdd::getInstance()->conn->query('SELECT * FROM `quiz` WHERE `id` = "' . $_GET['id'] . '"');

    // puis on affiche le message de succès
    $message = "Element Ajouté Avec Succès";

}

$elementList = Bdd::getInstance()->conn->query('SELECT * FROM `quiz` WHERE `id` = "' . $_GET['id'] . '"');

// on inclut la vue (partie visible => front) de la page
require_once("views/editQ.view.php");

// on inclut le footer du site tout à la fin car le but est de le charger en dernier
require_once('../include/footer.php');

?>