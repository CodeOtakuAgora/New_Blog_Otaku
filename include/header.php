<!-- on inclut notre package (librairie) qui s'occupe de charger -->
<!-- toutes les pages dont on a besoin-->
<?php require_once('require.php');
?>

<body <?php if (isset($title) && $title == "Accueil") { ?> class="maHome" <?php } ?> >

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#!" title="Otaku Blog">
        <?php if (isset($titleAdminCrud)) { ?>
            <img width="310" height="163" src="../ressources/logo.png" class="d-inline-block align-top" alt="logo">
        <?php } else { ?>
            <img width="310" height="163" src="ressources/logo.png" class="d-inline-block align-top" alt="logo">
        <?php } ?>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">            
            <li class="nav-item <?php if($title == 'Accueil') { ?> active <?php } ?>">
                <?php if (isset($titleAdminCrud)) { ?>
                    <a class="nav-link" href="../index.php">Accueil</a>
                <?php } else { ?>
                    <a class="nav-link" href="index.php">Accueil</a>
                <?php } ?>
            </li>
            <li class="nav-item <?php if($title == 'News') { ?> active <?php } ?>">
                <?php if (isset($titleAdminCrud)) { ?>
                    <a class="nav-link" href="../news.php">News</a>
                <?php } else { ?>
                    <a class="nav-link" href="news.php">News</a>
                <?php } ?>
            </li>
            <li class="nav-item <?php if($title == 'Gallerie') { ?> active <?php } ?>">
                <?php if (isset($titleAdminCrud)) { ?>
                    <a class="nav-link" href="../gallerie.php">Gallerie</a>
                <?php } else { ?>
                    <a class="nav-link" href="gallerie.php">Gallerie</a>
                <?php } ?>
            </li>
            <li class="nav-item <?php if($title == 'Quiz') { ?> active <?php } ?>">
                <?php if (isset($titleAdminCrud)) { ?>
                    <a class="nav-link" href="../quiz.php">Quiz</a>
                <?php } else { ?>
                    <a class="nav-link" href="quiz.php">Quiz</a>
                <?php } ?>
            </li>

            <?php if(!isset($_SESSION['login'])) { ?>
                <li class="nav-item <?php if($title == 'Connexion') { ?> active <?php } ?>">
                    <?php if (isset($titleAdminCrud)) { ?>
                        <a class="nav-link" href="../login.php">Connexion</a>
                    <?php } else { ?>
                        <a class="nav-link" href="login.php">Connexion</a>
                    <?php } ?>
                </li>
            <?php } ?>

            <?php if(isset($_SESSION['login'])) { ?>
                <li class="nav-item">
                    <?php if (isset($titleAdminCrud)) { ?>
                        <a class="nav-link" href="../crud/index.php">Administration</a>
                    <?php } else { ?>
                        <a class="nav-link" href="crud/index.php">Administration</a>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <?php if (isset($titleAdminCrud)) { ?>
                        <a class="nav-link" href="../logout.php">Déconnexion</a>
                    <?php } else { ?>
                        <a class="nav-link" href="logout.php">Déconnexion</a>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>