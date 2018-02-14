
<section id="concept" class="container-fluid">
  				<section class="row titleDisplay">
  					<hr class="decoTitle">
  					<h2>
  						Un concept inédit
  					</h2>
  					<hr class="decoTitle">
  				</section>
  				<section class="row">
  					<section class="col-8 description">
  						<p>
  							Et si lire devenait un <span class="bold">rendez-vous hebdomadaire</span>? <br/></br/>Un billet pour l'Alaska est un roman innovant, il brise les codes de la lecture. Après ces ouvrages à succès, Jean Forteroche nous emmene dans les pénombres de l'Alaska. Mais ca ne s'arrete pas là! Notre auteur, toujours à l'écoute de ses lecteurs choisit une nouvelle façon d'éditer. <br/> <br/> Desormais,<span class="bold">chaque mercredi </span>,un nouveau chapitre sera publié. Pas toujours évident de devoir patienter!
  						</p>
  					</section>
  					<section class="col-3 about">
  						<h3> A propos </h3>
  						<p>
  							Jean Forteroche est un écrivain français de romans policiers. Il est originaire de Paris, où il vit. Diplômé en sciences politiques du Amherst College, il a travaillé dans une agence de voyages avant de se consacrer à l'écriture. Depuis ses débuts en 1995, la critique n'a cessé de l'acclamer. Il est notamment le premier auteur à avoir reçu le Edgar Award.
  						</p>
  					</section>
  				</section>
  				
</section> 
  			
<section id="chapitres" class="container-fluid">
 	
	<section class="row titleDisplay">
	  <hr class="decoTitle">
		<h2>
		Les dernières sorties
		</h2>
	  <hr class="decoTitle">
	</section>

	<section id="displayNews" class="row">
<?php
foreach ($listeChapters as $chapters)
{
?>
	<section id="news" class="col-6">
		<h3>
     		<span class="bold"><a class="lienTitleChapter" href="chapters-<?= $chapters['id'] ?>.html"><?= $chapters['title'] ?></a></span>
      		
    	</h3>
    
    	<p>
    		<?= nl2br($chapters['content']) ?>
   	 	</p>
	</section>
<?php
}?>


</section>
</section>	