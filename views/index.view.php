<div class="content">
	<div class="slider">
		<div>
			<img src="ressources/presentation/haikyuu-home.jpg" width="500" height="396" alt="haikyuu illustration">
		</div>
		<div>
			<img src="ressources/presentation/one-piece-home.jpg" width="500" height="396" alt="tableau one piece">
		</div>
		<div>
			<img src="ressources/presentation/naruto-home.jpg" width="500" height="396" alt="tableau naruto">
		</div>
	</div>

	<div class="table-video table-mobile">
		<img src="ressources/presentation/haikyuu-home.jpg" width="500" height="396" alt="haikyuu illustration">
		<img src="ressources/presentation/one-piece-home.jpg" width="500" height="396" alt="tableau one piece">
		<img src="ressources/presentation/naruto-home.jpg" width="500" height="396" alt="tableau naruto">
	</div>

	<div class="block-float">
		<div class="ecart-content">
			<p>
				!!! Attention site otaku !!!<br/><br/>

				Donc, dans <strong>l'ACCUEIL</strong> il y a : une petite présentation du site avec des infos sur moi ainsi que des infos sur le Japon pour les intéressés avec un compteur de visites.<br/><br/>

				Ensuite, dans <strong>les NEWS</strong> il y a : les infos les plus pertinentes de la semaine qui sont regroupés en plusieurs catégories,
				ainsi que des vidéos constructives et intéressantes qui peuvent intéresser beaucoup d'Otakus,
				avec en source des Youtubers Mangas Français d'éxeception,
				et pour finir, dans le à voir aussi il y a : les chaînes de mes potos, et des sites ainsi que des youtubers que j'apprécie beaucoup.
				<br/><br/>

				Et, dans <strong>la GALLERIE</strong> il y a : une présentation des lieux mythiques des otakus,
				ainsi que des vidéos vlogs en rapport avec les lieux mythiques vus précédemment.
				<br/><br/>

				PS (Surtout n'hésitez pas à cliquez sur les images qui contiennent des liens pour des infos supplémentaires et 
				à partager le bon contenu comme moi et Attention pour ceux qui ne lisent pas les scans, ne cliquez pas n'importe où sous peine d'être spoilé, Merci !!!)
			</p>
		</div>
		<div class="ecart-border"></div>
	</div>

	<h2>Sources</h2>

	<div class="table-video">
		<figure>
			<img src="ressources/tokyo-japan-home.jpg" width="300px" height="200px" alt="Présentation Tokyo">
			<figcaption>
				<a href="https://planetemaneki.com/"
				target="_blank" rel="noopener noreferrer" style="text-decoration:none; color:white">Organisation Voyage Japon</a>
			</figcaption>
		</figure>
	</div>

	<div class="table-video">
		<figure>
			<img src="ressources/wiki-home.jpg" 
			width="300px" height="200px" alt="Infos Supplémentaires">
			<figcaption>
				<a href="https://fr.wikipedia.org/wiki/Tokyo" 
				target="_blank" rel="noopener noreferrer" style="text-decoration:none; color:white">Informations Supplémentaires (1)</a>
			</figcaption>
		</figure>

		<figure>
			<img src="ressources/wiki-home.jpg" 
			width="300px" height="200px" alt="Infos Supplémentaires">
			<figcaption>
				<a href="http://desencyclopedie.wikia.com/wiki/Tokyo" 
				target="_blank" rel="noopener noreferrer" style="text-decoration:none; color:white">Informations Supplémentaires (2)</a>
			</figcaption>
		</figure>
	</div>

	<div class="table-video">
		<figure>
			<img src="ressources/fandom-home.webp" width="300px" height="200px" alt="Dico des Otakus">
			<figcaption>
				<a href="http://fr.wikia.com/explore-fr" 
				target="_blank" rel="noopener noreferrer" style="text-decoration:none; color:white">Dico Des Otakus</a>
			</figcaption>

		</figure>

		<figure>
			<img src="ressources/otaku-home.png" width="300px" height="200px" alt="Picture de Présentation">
			<figcaption>
				<a href="http://www.volonte-d.com/" 
				target="_blank" rel="noopener noreferrer" style="text-decoration:none; color:white">Platerforme Super Documentée</a>
			</figcaption>
		</figure>
		</a>
	</div>
	</div>
</div>


<script>

	$(document).ready(function(){
		$('.slider').slick({
			adaptiveHeight: true,
			prevArrow: '<button type="button" class="slick-prev"></button>',
			nextArrow: '<button type="button" class="slick-next"></button>',
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,
			cssEase: 'ease-in-out'
		});
	});
</script>

<!-- on inclut le footer du site tout à la fin car le but est de le charger en dernier-->
<?php require_once('include/footer.php'); ?>