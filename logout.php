<?php

// on démarre la session
session_start();

$session = $_SESSION['login'];

// si il a une variable de session on la clean puis on détruit sa session
if (isset($session) && $session != "") {
    $_SESSION['login'] = "";
    session_destroy();
}

// puis on le redirige vers la page d'accueil
echo '
	<script type="text/javascript">
		location.href = \'index.php\';
	</script>';

?>