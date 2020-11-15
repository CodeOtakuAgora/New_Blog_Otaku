<style>
    label { 
        display: block;
        padding: 0 100px 0 0;
        font-size: 18px;
    }

    td {
        padding: 5px;
    }

    input[type="number"] {
        background-color: #CBCBCB;
        color: white;
        border-style: none;
        padding: 10px;
    }
</style>

<div class="content">
    <form name="frmUser" method="POST" action="" enctype="multipart/form-data">
        <div style="width: 100%;">
            <div class="message"><?php if (isset($message)) {
                    echo $message;
                } ?></div>
            <div style="padding-bottom:5px;">
                <a style="display: flex; justify-content: flex-end; align-items: center;"
                    href="index.php" class="link">
                    <img style="display: block; margin-right: 5px;" alt='List' title='List' 
                        src='../ressources/crud/list.png' width='15px' height='15px'>
                        Liste des Elements
                </a>
            </div>
            <table border="0" style="width: 100%; text-align: center;"
               aria-describedby="édition résultats" class="tblSaveForm">
               <tr style="display: none;">
                    <th scope="col"></th>
                </tr>
                <tr class="tableheader">
                    <td colspan="2">Ajout Elements</td>
                </tr>
                <tr>
                    <td><label>Image</label></td>
                    <td>
                        <input class="form-control txtField" id="validationServer01" 
                            name="image" type="file" placeholder="Image de l'élément">
                    </td>
                </tr>
                <tr>
                    <td><label>Titre</label></td>
                    <td>
                        <input class="form-control txtField" id="validationServer01" 
                            type="text" placeholder="Titre" 
                            name="titre" value="">
                    </td>
                </tr>
                <tr>
                    <td><label>Lien</label></td>
                    <td>
                        <input class="form-control txtField" id="validationServer01" 
                            type="text" placeholder="Lien" 
                            name="lien" value="">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: right;">
                        Id Categorie
                        <select name="id_categorie">
                            <?php
                            // on boucle afin de récupérer toutes les annee 
                            // afin de proposer à l'utilisateur de choisir l'annee
                            foreach ($categorieList as $row) {
                                echo '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: right;">
                        Id Sous Categorie
                        <select name="id_sous_categorie">
                            <?php
                            // on boucle afin de récupérer toutes les annee 
                            // afin de proposer à l'utilisateur de choisir l'annee
                            foreach ($sousCategorieList as $row) {
                                echo '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: right;">
                        Id Sous Sous Categorie
                        <select name="id_sous_sous_categorie">
                            <?php
                            // on boucle afin de récupérer toutes les annee 
                            // afin de proposer à l'utilisateur de choisir l'annee
                            foreach ($sousSousCategorieList as $row) {
                                echo '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: right;">
                        Id Type
                        <select name="id_type">
                            <?php
                            // on boucle afin de récupérer toutes les annee 
                            // afin de proposer à l'utilisateur de choisir l'annee
                            foreach ($typeList as $row) {
                                echo '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit" class="btnSubmit">
                    </td>
                </tr>
            </table>
        </div>
    </form>
</div>