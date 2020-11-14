<?php
	foreach ($sous_categories_list as $value) { ?>
		<div style="position: relative;">
			<h2 onclick="showHideContent(<?php echo $value['id']; ?>)" 
				id="categorie-elements-<?php echo $value['id']; ?>"><?php echo $value['nom']; ?></h2>
			<a onclick="showHideContent(<?php echo $value['id']; ?>)"
				href="#!" title="voir plus" class="arrow" id="arrow-<?php echo $value['id']; ?>"></a>
		</div>
	
	<?php $id_sous_categorie = $value['id']; ?>

	<div class="elements-list" id="elements-<?php echo $value['id']; ?>">
	
		<?php $sous_sous_categories_list = Bdd::getInstance()->conn->query('SELECT * FROM `sous_sous_categorie` 
			WHERE id_categorie = "' . $id_categorie . '" AND id_sous_categorie = "' . $id_sous_categorie . '"');
		foreach ($sous_sous_categories_list as $res) { ?>
			<h3><?php echo $res['nom']; ?></h3>
			<?php $id_sous_sous_categorie = $res['id'];

			

			$element_list = Bdd::getInstance()->conn->query(sprintf('
				SELECT * FROM `element` WHERE id_categorie = %d 
				AND id_sous_categorie = %d AND id_sous_sous_categorie = %d 
				ORDER BY id DESC', 
				$id_categorie, $id_sous_categorie, $id_sous_sous_categorie)); ?>

			<div class="table-video">
				<?php foreach ($element_list as $result) {
					if ($result['id_type'] == 1) { ?>
						<figure <?php if($res['nom'] == 'Mangas') { ?> 
							class="little-table-video" <?php } ?> >
				            <img src="<?php echo $result['image'] ?>" width="300px" height="200px" 
				            	alt="dernier épisode">
				            <figcaption>
				                <a href="<?php echo $result['lien'] ?>" target="_blank">
				                	<?php echo $result['titre'] ?>
				                </a>
				            </figcaption>
				        </figure>
					<?php }
					elseif ($result['id_type'] == 2) { ?>
					    <iframe width="300px" height="200px" src="<?php echo $result['lien'] ?>" frameborder="0" 
					    	allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
					<?php }
				} ?>
			</div>
		<?php } ?>
	</div>
<?php } ?>

<script>
	function showHideContent(id) {
		$('#elements-'+ id + '').css('display: block')
        $('#elements-'+ id + '').slideToggle('slow');
	}
</script>

<!-- on inclut le footer du site tout à la fin car le but est de le charger en dernier-->
<?php require_once('include/footer.php'); ?>