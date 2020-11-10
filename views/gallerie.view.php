<?php
	foreach ($sous_categories_list as $value) {
	echo '<h2 id="categorie-elements-'. $value['id'] .'">' . $value['nom'] . '</h2>';
	$id_sous_categorie = $value['id'];

	echo '<div class="elements-list" id="elements-'. $value['id'] .'">';
	
		$sous_sous_categories_list = Bdd::getInstance()->conn->query('SELECT * FROM `sous_sous_categorie` 
			WHERE id_categorie = "' . $id_categorie . '" AND id_sous_categorie = "' . $id_sous_categorie . '"');
		foreach ($sous_sous_categories_list as $res) {
			echo '<h3>'. $res['nom'] . '</h3>';
			$id_sous_sous_categorie = $res['id'];

			$element_list = Bdd::getInstance()->conn->query('SELECT * FROM `element` 
				WHERE id_categorie = "' . $id_categorie . '" AND id_sous_categorie = "' . $id_sous_categorie . 
				'" AND id_sous_sous_categorie = "' . $id_sous_sous_categorie . '"');
			foreach ($element_list as $result) {
				if ($result['id_type'] == 1) { ?>
					<div class="tablevideo">
						<figure>
				            <img src="<?php echo $result['image'] ?>" width="300px" height="200px" alt="dernier épisode">

				            <figcaption>
				                <a href="<?php echo $result['lien'] ?>" target="_blank">
				                	<?php echo $result['titre'] ?>
				                </a>
				            </figcaption>
				        </figure>
					</div>
				<?php }
				elseif ($result['id_type'] == 2) { ?>
					<div class="tablevideo">
					    <iframe width="300px" height="200px" src="<?php echo $result['lien'] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
					</div>
				<?php }
			}
		}
	echo '</div>';
} ?>

<script>
	$('#categorie-elements-5').on('click', function() {
		$('#elements-5').css('display: block')
        $('#elements-5').slideToggle('slow');
    });

    $('#categorie-elements-6').on('click', function() {
    	$('#elements-6').css('display: block')
        $('#elements-6').slideToggle('slow');
    });
</script>

<!-- on inclut le footer du site tout à la fin car le but est de le charger en dernier-->
<?php require_once('include/footer.php'); ?>