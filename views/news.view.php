<?php
	foreach ($sous_categories_list as $value) { ?>
	<h2 id="categorie-elements-<?php echo $value['id']; ?>"><?php echo $value['nom']; ?></h2>
	<?php $id_sous_categorie = $value['id']; ?>

	<div class="elements-list" id="elements-<?php echo $value['id']; ?>">
	
		<?php $sous_sous_categories_list = Bdd::getInstance()->conn->query('SELECT * FROM `sous_sous_categorie` 
			WHERE id_categorie = "' . $id_categorie . '" AND id_sous_categorie = "' . $id_sous_categorie . '"');
		foreach ($sous_sous_categories_list as $res) { ?>
			<h3><?php echo $res['nom']; ?></h3>
			<?php $id_sous_sous_categorie = $res['id'];

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
		} ?>
	</div>
<?php } ?>

<script>
	$('#categorie-elements-1').on('click', function() {
		$('#elements-1').css('display: block')
        $('#elements-1').slideToggle('slow');
    });

    $('#categorie-elements-2').on('click', function() {
    	$('#elements-2').css('display: block')
        $('#elements-2').slideToggle('slow');
    });

    $('#categorie-elements-3').on('click', function() {
		$('#elements-3').css('display: block')
        $('#elements-3').slideToggle('slow');
    });

    $('#categorie-elements-4').on('click', function() {
		$('#elements-4').css('display: block')
        $('#elements-4').slideToggle('slow');
    });
</script>

<!-- on inclut le footer du site tout à la fin car le but est de le charger en dernier-->
<?php require_once('include/footer.php'); ?>