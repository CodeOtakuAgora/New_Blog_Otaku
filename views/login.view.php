<div class="content">
    <div class="contenupage">
        <div class="container">
            <div class="row formulaireconnect">
                <table style="width: 100%" aria-describedby="formulaire de connection">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>
                            <div class="connexion">
                                <h2 style="

		                            font-size: 2.5rem; text-align: center;

                                ">
                                    Administration</h2>

                                <form style="margin-top: 20px" action="" id="myform" method="POST"
                                      enctype="multipart/form-data">

                                    <p>Login:</p>
                                    <input name="login" type="text" value="" size="30"/>
                                    <p>Password:</p>
                                    <input name="password" type="password" value="" size="30"/>
                                    <input style="margin-top: 20px" name="bouton" type="submit" id="seconnecter"
                                           value="Connexion" onclick="document.forms[\'myform\'].submit();"/>
                                </form>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <style>
        .copyright {
            position: fixed;
        }
    </style>

</div>
    
<!-- on inclut le footer du site tout à la fin car le but est de le charger en dernier-->
<?php require_once('include/footer.php'); ?>