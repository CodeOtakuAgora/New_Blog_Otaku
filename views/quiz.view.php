<?php
	foreach ($categories_list as $value) { ?>
		<div style="position: relative;">
			<h2 onclick="showHideContent(<?php echo $value['id']; ?>)" 
				id="categorie-elements-<?php echo $value['id']; ?>"><?php echo $value['nom']; ?></h2>
			<a onclick="showHideContent(<?php echo $value['id']; ?>)" 
				href="#!" title="voir plus" class="arrow" id="arrow-<?php echo $value['id']; ?>"></a>
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
	function showHideContent(id) {
		$('#elements-'+ id + '').css('display: block')
        $('#elements-'+ id + '').slideToggle('slow');
	}
</script>

<!-- on inclut le footer du site tout à la fin car le but est de le charger en dernier-->
<?php require_once('include/footer.php'); ?>