<style>
    td {
        padding: 10px;
    }
    a:hover {
        text-decoration: none;
    }
</style>

<div class="content">
    <form name="frmUser" method="post">
        <div style="width: 100%; margin: 0 auto">
            <div class="message"><?php if (isset($message)) {
                    echo $message;
                } ?></div>

             <div class="add">
                <a href="add.php" class="link">
                    <img alt='Add' title='Ajouter' src='../ressources/crud/add.png' 
                        width='25px' height='25px'>Ajouter
                </a>
            </div>

            <table style="width: 100%" border="0"
                   aria-describedby="listes résultats" class="tblListForm">
                <tr style="display: none;">
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>

                <tr class="listheader">
                    <td></td>
                    <td>Images</td>
                    <td>Titres</td>
                    <td>Liens</td>
                    <td>Id</td>
                    <td>Page</td>
                    <td>Catégorie</td>
                    <td>Sous Catégorie</td>
                    <td>Type</td>
                    <td>Actions</td>
                </tr>

                <?php
                $i = 0;
                foreach ($elementList as $value) {
                    if ($i % 2 == 0) {
                        $classname = "evenRow";
                    } else {
                        $classname = "oddRow";
                    }
                    ?>

                    <!-- on affiche toutes les infos des utilisateurs -->
                    <tr class="<?php if (isset($classname)) {
                            echo $classname;
                        } ?>"
                    >
                        <td></td>
                        <td>
        					<?php if ($value['id_type'] == 1) { ?>
                        		<img src="../<?php echo $value["image"]; ?>" width="50" height="50" alt="">
                        	<?php } elseif ($value['id_type'] == 2) { ?>
                        		<iframe width="50" height="50" src="<?php echo $value["lien"]; ?>"
                        			title=""Vidéo youtube allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                        	<?php } ?>
                        </td>
                        <td><?php echo $value["titre"] ?></td>
                        <td><?php echo $value["lien"] ?></td>
                        <td><?php echo $value["theId"] ?></td>
                        <td><?php echo $value["theCat"]; ?> </td>
                        <td><?php echo $value["theSubCat"]; ?></td>
                        <td><?php echo $value["theSubSubCat"]; ?></td>
                        <td><?php echo $value["theType"]; ?></td>

                        <td>
                            <a href="edit.php?id=<?php echo $value["theId"]; ?>" class="link">
                                <img style="margin: 0 auto;" alt='Edit' title='Modifier'
                                     src='../ressources/crud/edit.png'
                                     width='15px' height='15px'/>
                            </a>
                            <a href="delete.php?id=<?php echo $value["theId"]; ?>" class="link">
                                <img alt="Delete" title="Delete" src="../ressources/crud/delete.png" 
                                	width="15px" height="15px">
                            </a>
                        </td>
                    </tr>

                    <?php
                    $i++;
                }
                ?>
            </table>
        </div>
    </form>
</div>

<a style="display: flex; justify-content: center; width: 250px; margin: 0 auto 100px; 
    font-family: 'Lato', sans-serif;" class="btn btn-primary" href="../index.php">
    Retour à l'accueil
</a>

<!-- on inclut le footer du site tout à la fin car le but est de le charger en dernier-->
<?php require_once('../include/footer.php'); ?>