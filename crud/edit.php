<?php

// on définit notre balise title
$titleAdminCrud = "Edition Administration";
$title = "Edition Administration";

// on inclut notre package (librairie) qui s'occupe de charger toutes les pages dont on a besoin
require_once("../include/require.php");

$categorieList = Element::getAllCategorie();
$sousCategorieList = Element::getAllSousCategorie();
$sousSousCategorieList = Element::getAllSousSousCategorie();
$typeList = Element::getAlltype();

// on vérifie si le formulaire à été validé
if (count($_POST) > 0) {

    // fonction qui retourne le fichier en sécurisant les données envoyées
    function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }

    // on définit le chemin du dossier pour stocker l'image
    // puis on stocke le nom, l'extension de l'image ainsi que le chemin relatif de l'endroit ou l'image doit etre stocké
    $image = '';
    $imagePath = '';
    $imageExtension = '';

    if (isset($_POST['submit'])) {
        $image = checkInput($_FILES["image"]["name"]);
        $imagePath = '../ressources/test/' . basename($image);
        $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
    }

    if ($image != '') {
        // on vérifie l'extension,taille,nom du fichier envoyé pour l'image
        $isUploadSuccess = true;
        if ($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif") {
            $erreur = "Les fichiers autorises sont: .jpg, .jpeg, .png, .gif";
            $isUploadSuccess = false;
        }

        if (file_exists($imagePath)) {
            $erreur = "Le fichier existe deja";
            $isUploadSuccess = false;
        }

        if (!empty($_FILES["image"]) && $_FILES["image"]["size"] > 500000) {
            $erreur = "Le fichier ne doit pas depasser les 500KB";
            $isUploadSuccess = false;
        }

        // on vérifie si le fichier à bien été déplacé dans le chemin spécifié
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {
            $erreur = "Il y a eu une erreur lors de l'upload pour l'image";
            $isUploadSuccess = false;
        }

    }

    // je récupère le chemin relatif de l'image (ressources/test/nom_image.jpg) 
    $imageAtRemoved = Element::getSpecificElement($_GET['id']);
    // je parcours mon tbleau avec tout ce qui à été trouvé en base de donnée
    foreach ($imageAtRemoved as $value) {
        // je tronque le chemin relatif pour garder uniquement le nom du fichier (nom_image.jpg)
        $imageRelativePath = substr($value['image'], strpos($value['image'], 'test/') + 5);
        // je récupère le chemin absolu de mon fichier (C:\wamp64\www\nom_projet\dossier_actuel\)
        // puis je remonte de plusieurs dossiers en lui ajoutant aussi le nom de mon fichier à supprimé
        // ce qui donne le chemin final (C:\wamp64\www\nom_projet\images\nom_image.jpg)
        $baseUrl = realpath(__DIR__ . '/../ressources/test/'. $imageRelativePath);
        // je vérifie si le fichier est accessible en écriture
        if (is_writable($baseUrl)) {
            // si il est accessible je supprimme le fichier du répertoire
            unlink($baseUrl);
        } 
        // sinon je déclenche une erreur
        else {
            $erreur = "L'image à supprimer n'existe pas";
        }
    }

    // si il n'y a pas d'erreur et que le formulaire a été validé 
    if (!isset($erreur) && isset($_POST['submit'])) {
        // on passe dans des variables les valeurs rentré dand les input
        $image = 'ressources/test/' . basename($image) . '';

        // on apelle la fonction updateUser qui appartient à la classe User
        // en lui passant en paramettre les valeurs de ce qui a été rentré dans les inputs
        Element::updateElement($image, $_POST['titre'], $_POST['lien'], $_POST['id_categorie'], $_POST['id_sous_categorie'],
            $_POST['id_sous_sous_categorie'], $_POST['id_type'], $_GET['id']);

        // puis on affiche le message de succès
        $message = "Element Ajouté Avec Succès";
    }

    // si il y a des erreur et que le formulaire à été validé
    // on lance l'animation d'erreur affichant la liste de toute les erreurs
    if (isset($erreur) && isset($_POST['submit'])) {
        echo '
        <script type="text/javascript">
            Swal.fire({
              title: "Erreur",
              icon: "error",
              html: " ' . $erreur . ' ",
            })
        </script>';
    }

}

$elementList = Element::getSpecificElement($_GET['id']);

// on inclut la vue (partie visible => front) de la page
require_once("views/edit.view.php");

// on inclut le footer du site tout à la fin car le but est de le charger en dernier
require_once('../include/footer.php');

?>