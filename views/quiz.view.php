<?php
	foreach ($categories_list as $value) { ?>
		<div style="position: relative;">
			<h2 id="categorie-elements-<?php echo $value['id']; ?>"><?php echo $value['nom']; ?></h2>
			<a href="#!" title="voir plus" class="arrow" id="arrow-<?php echo $value['id']; ?>"></a>
		</div>
	<?php $id_categorie = $value['id'];

	echo '<div class="elements-list" id="elements-'. $value['id'] .'">';
	
		$element_list = Bdd::getInstance()->conn->query('SELECT * FROM `quiz` 
			WHERE id_categorie = "' . $id_categorie . '"'); ?>
		<form action="" method="POST" id="myform" enctype="multipart/form-data" class="myquiz">
			<ul>
				<?php foreach ($element_list as $res) { ?>
                	<li>
		   				<?php $role = $res['role'];

		   				if ($role == "Question") { ?>
	                    	<h4><?php echo $res['texte']; ?></h3>
	                    <?php } ?>

	                    <?php if ($role == "Reponse") { ?>
							<div>
		                        <input type="radio" name="question-<?php echo $res['id_question'] ?>-answers" 
		                        	id="question-<?php echo $res['id_question'] ?>-answers"
		                        	value="<?php echo $res['reponse']; ?>" />
		                        <label for="question-<?php echo $res['id_question'] ?>-answers">
		                        	<?php echo $res['texte']; ?>
	                        	</label>
	                    	</div>
						<?php } ?>
                	</li>
				<?php } ?>
    		</ul>
        	<input class="valider" name="bouton" type="submit" value="Valider" 
        		onclick="document.forms[\'myform\'].submit();"/>
		</form>	
	<?php echo '</div>';
} ?>

<script>
	$('#categorie-elements-1, #arrow-1').on('click', function() {
		$('#elements-1').css('display: block');
        $('#elements-1').slideToggle('slow');
    });

    $('#categorie-elements-2, #arrow-2').on('click', function() {
    	$('#elements-2').css('display: block');
        $('#elements-2').slideToggle('slow');
    });

    $('#categorie-elements-3, #arrow-3').on('click', function() {
    	$('#elements-3').css('display: block');
        $('#elements-3').slideToggle('slow');
    });

    $('#categorie-elements-4, #arrow-4').on('click', function() {
    	$('#elements-4').css('display: block');
        $('#elements-4').slideToggle('slow');
    });

    $('#categorie-elements-5, #arrow-5').on('click', function() {
    	$('#elements-5').css('display: block');
        $('#elements-5').slideToggle('slow');
    });
</script>

<!-- on inclut le footer du site tout à la fin car le but est de le charger en dernier-->
<?php require_once('include/footer.php'); ?>