<?php
foreach ($sous_categories_list as $value) { ?>
	<div style="position: relative;">
		<h2 onclick="showHideContent(<?php echo $value['id']; ?>)" id="categorie-elements-<?php echo $value['id']; ?>"><?php echo $value['nom']; ?></h2>
		<a onclick="showHideContent(<?php echo $value['id']; ?>)" href="#!" title="voir plus" class="arrow" id="arrow-<?php echo $value['id']; ?>"></a>
	</div>

	<?php $id_sous_categorie = $value['id']; ?>

	<div class="elements-list" id="elements-<?php echo $value['id']; ?>">

		<?php $sous_sous_categories_list = Element::getSpecificSousSousCategorie($id_categorie, $id_sous_categorie);
		foreach ($sous_sous_categories_list as $res) { ?>
			<h3><?php echo $res['nom']; ?></h3>
			<?php $id_sous_sous_categorie = $res['id'];

			$element_list_desc = Element::getSpecificElementSortDesc($id_categorie, $id_sous_categorie, $id_sous_sous_categorie);
			$element_list = Element::getSpecificElementSort($id_categorie, $id_sous_categorie, $id_sous_sous_categorie); ?>

			<div class="table-video">
				<?php if ($res['nom'] == 'Animes' || $res['nom'] == 'Mangas') {
					TableVideo::getAllSpecificTableVideo($element_list_desc, $res['nom']);
				} else {
					TableVideo::getAllSpecificTableVideo($element_list, $res['nom']);
				} ?>
			</div>
		<?php } ?>
	</div>
<?php } ?>

<script>
	function showHideContent(id) {
		$('#elements-' + id + '').css('display: block')
		$('#elements-' + id + '').slideToggle('slow');
	}
</script>

<!-- on inclut le footer du site tout à la fin car le but est de le charger en dernier-->
<?php require_once('include/footer.php'); ?>