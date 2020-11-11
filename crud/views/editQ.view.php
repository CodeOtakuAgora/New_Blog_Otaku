<style>
    label {
        display: block;
        padding: 0 100px 0 0;
        font-size: 18px;
    }

    td {
        padding: 10px;
    }

    input[type="number"] {
        background-color: #CBCBCB;
        color: white;
        border-style: none;
        padding: 10px;
    }
</style>

<div class="content">
    <form name="frmUser" method="post" action="">
        <div style="width: 100%;">
            <div class="message"><?php if (isset($message)) {
                    echo $message;
                } ?></div>
            <div style="padding-bottom:5px;">
                <a style="display: flex; justify-content: flex-end; align-items: center;" href="index.php" class="link">
                    <img style="display: block; margin-right: 5px;" alt='List' title='List'
                         src='../ressources/crud/list.png' width='15px' height='15px'/>
                    Liste d'Elements
                </a>
            </div>

            <table border="0" style="width: 100%; text-align: center;"
                   aria-describedby="édition résultats" class="tblSaveForm">
                <tr style="display: none;">
                    <th scope="col"></th>
                </tr>
                <tr class="tableheader">
                    <td colspan="2">Edition Elements</td>
                </tr>
                <?php foreach ($elementList as $value) { ?>
                    
                    <tr>
                        <td><label>Texte</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                            type="text" placeholder="Texte" 
                            name="texte" value="<?php echo $value['texte']; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Rôle</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                            type="text" placeholder="Rôle (Question / Reponse)" 
                            name="role" value="<?php echo $value['role']; ?>">
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
                                foreach (Bdd::getInstance()->conn->query('SELECT * FROM categorie_quiz') as $row) {
                                    echo '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Réponse</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="text" placeholder="Réponse (0 / 1)" 
                                name="reponse" value="<?php echo $value['reponse']; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Id Question</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="text" placeholder="Id Question (1 / 2)" 
                                name="id_question" value="<?php echo $value['id_question']; ?>">
                        </td>
                    </tr>

                <?php } ?>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit" class="btnSubmit">
                    </td>
                </tr>

            </table>
        </div>
    </form>

</div>