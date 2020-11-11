<?php

// on définit notre balise title
$title = "Quiz";

// on inclut notre package (librairie) qui s'occupe de charger toutes les pages dont on a besoin
require_once('include/require.php');

$categories_list = Bdd::getInstance()->conn->query('SELECT * FROM `categorie_quiz`');

// on check l'input pour le login,password
// si il y une erreur on affecte le problème dans la variable d'erreur
// qui s'occupe d'aficher dans une pop-up toutes les erreurs si il y en a
$countSubmitAnswers = count($_POST) - 1;

if ($countSubmitAnswers == 0) {
  $erreur = "Veuillez remplir tous les champs";
}

for ($i = 1; $i <= $countSubmitAnswers; $i++) {
  if (!isset($_POST['question-'. $i . '-answers']) || trim($_POST['question-'. $i .'-answers']) === '') {
    $erreur = "Veuillez remplir tous les champs";
  }
}


if (!isset($erreur) && isset($_POST['bouton'])) {
	$totalCorrect = 0;

  $countSubmitAnswers = count($_POST) - 1;

  foreach ($_POST as $key => $value) {
    if ($value == 1) {
      $totalCorrect++;
    }
  } ?>

	<div class="results">Score : <?php echo $totalCorrect; ?> / <?php echo $countSubmitAnswers; ?></div>
<?php }

    	
// si il y a des erreur et que le formulaire à été validé
// on lance l'animation d'erreur affichant la liste de toute les erreurs
if (isset($erreur) && isset($_POST['bouton'])) {
    echo '
    <script type="text/javascript">
        Swal.fire({
          title: "Erreur",
          icon: "error",
          html: " ' . $erreur . ' ",
        })
    </script>';
}
    
// on inclut la vue (partie visible => front) de la page
require_once('views/quiz.view.php');