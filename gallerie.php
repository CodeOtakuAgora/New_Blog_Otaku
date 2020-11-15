<?php

// on définit notre balise title
$title = "Gallerie";

// on inclut notre package (librairie) qui s'occupe de charger toutes les pages dont on a besoin
require_once('include/require.php');

$id_categorie = 2;
$sous_categories_list = Element::getSpecificSousCategorie($id_categorie);

    
// on inclut la vue (partie visible => front) de la page
require_once('views/gallerie.view.php');

?>