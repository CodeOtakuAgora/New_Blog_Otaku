<?php

// on définit notre balise title
$titleAdminCrud = "Ajout Administration";
$title = "Ajout Administration";

// on inclut notre package (librairie) qui s'occupe de charger toutes les pages dont on a besoin
require_once("../include/require.php");

// on vérifie si le formulaire à été validé
if (count($_POST) > 0) {	
	// on apelle la fonction setUser qui appartient à la classe User 
    // en lui passant en paramettre les valeurs de ce qui a été rentré dans les inputs

    $sql = "INSERT INTO `quiz` (texte, role, id_categorie, reponse, id_question) VALUES (?, ?, ?, ?, ?)";
    $stmt = Bdd::getInstance()->conn->prepare($sql);
    $stmt->execute([
        $_POST['texte'],
        $_POST['role'],
        $_POST['id_categorie'],
        $_POST['reponse'],
        $_POST['id_question']
    ]);
    $updatedlist = Bdd::getInstance()->conn->query('SELECT * FROM `quiz` ORDER BY id DESC');

    // puis on affiche le message de succès
    $message = "Element Ajouté Avec Succès";
}

// on inclut la vue (partie visible => front) de la page
require_once("views/addQ.view.php");

// on inclut le footer du site tout à la fin car le but est de le charger en dernier
require_once('../include/footer.php');

?>
