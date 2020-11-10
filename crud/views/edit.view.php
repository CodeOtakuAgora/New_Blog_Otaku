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
        <div style="width:500px;">
            <div class="message"><?php if (isset($message)) {
                    echo $message;
                } ?></div>
            <div style="padding-bottom:5px;">
                <a style="display: flex; justify-content: flex-end; align-items: center;" href="index.php" class="link">
                    <img style="display: block; margin-right: 5px;" alt='List' title='List'
                         src='../ressources/crud/list.png' width='15px' height='15px'/>
                    Liste des Résultats
                </a>
            </div>

            <table border="0" style="width: 500px; text-align: center;"
                   aria-describedby="édition résultats" class="tblSaveForm">
                <tr style="display: none;">
                    <th scope="col"></th>
                </tr>
                <tr class="tableheader">
                    <td colspan="2">Edition Résultats</td>
                </tr>
                <?php foreach ($user as $value) { ?>
                    
                    <tr>
                        <td><label>Victoires</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="number" placeholder="Moyenne E4" step="1" 
                                name="victoires" min="0" max="9999" 
                                value="<?php echo $value['victoires']; ?>"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td><label>Defaites</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="number" placeholder="Moyenne E4" step="1" 
                                name="defaites" min="0" max="9999" 
                                value="<?php echo $value['defaites']; ?>"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td><label style="width: inherit; padding: 0;">Sets Gagnés</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="number" placeholder="Moyenne E4" step="1" 
                                name="nb_sets_gagnes" min="0" max="9999" 
                                value="<?php echo $value['nb_sets_gagnes']; ?>"
                            >
                        </td>

                    </tr>

                    <tr>
                        <td><label style="width: inherit; padding: 0;">Points Total</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="number" placeholder="Moyenne E4" step="1" 
                                name="nb_points_total" min="0" max="9999" 
                                value="<?php echo $value['nb_points_total']; ?>"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td><label style="width: inherit; padding: 0;">Matchs</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="number" placeholder="Moyenne E4" step="1" 
                                name="nb_matchs" min="0" max="9999" 
                                value="<?php echo $value['nb_matchs']; ?>"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td><label style="width: inherit; padding: 0;">Année</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="number" placeholder="Moyenne E4" step="1" 
                                name="annee" min="2000" max="9999" 
                                value="<?php echo $value['annee']; ?>"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td style="text-align: right;">
                            Id Equipe
                            <select name="equipe_id">
                                <?php
                                // on boucle afin de récupérer toutes les annee 
                                // afin de proposer à l'utilisateur de choisir l'annee
                                foreach (Bdd::getInstance()->conn->query('SELECT * FROM volley_resultats') as $row) {
                                    echo '<option value="' . $row['id'] . '">' . 
                                        $row['id_equipe'] . '</option>';
                                }
                                ?>
                            </select>
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