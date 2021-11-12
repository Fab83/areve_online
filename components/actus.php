<?php require 'connexion.php';  ?>
<section class="actus">
	<div class="container container-actus">
		<h2 class="greenUp mb-3">Actualités</h2>
	</div>

	<div class="container">
		<div class="row">
			<?php
					$donnees=$idconn->prepare('SELECT NEWS_ID, NEWS_TITLE, NEWS_CAT, NEWS_CONTENT,NEWS_DATE FROM news ORDER BY NEWS_ID DESC LIMIT 0,3');
					
					$donnees->execute();
					$news=$donnees->fetchAll();
					
					foreach($news AS $new) 
					{
						$id = $new['NEWS_ID'];
						$title = $new['NEWS_TITLE'];
						$cat = $new['NEWS_CAT'];
						$date = $new['NEWS_DATE'];
						$content = $new['NEWS_CONTENT'];
						// $content_all = $new['NEWS_CONTENT'];
						?>
				<div class="col-md-4 my-2">
					<div class='card h-100'>
						<div class='card-body'>
							<h5 class='card-title'><?= $title; ?></h5>
							<h6 class='card-subtitle mb-2 text-muted'><?= $date; ?></h6>
							<h6 class='card-subtitle mb-2 text-muted'><?= $cat; ?></h6>
							<p class='card-text'><?= $content; ?></p>
						</div>
					</div>
				</div>
					<?php }; ?>
			</div>
	<!-- </div> -->

		<div class="row">
			<div class="col my-3">
				<a href="all_actus.php" class="btn btn-orange btn-block">Toutes les actualités</a>
			</div>
		</div>
</section>