
<section id="concept" class="container-fluid">
  				<section class="row titleDisplay">
  					<hr class="decoTitle">
  					<h2>
  						Un concept inédit
  					</h2>
  					<hr class="decoTitle">
  				</section>
  				<section class="row">
  					<section class="col-8 essai1">
  						Et si lire devenait un rendez-vous hebdomadaire? Comme une série. Un billet pour l'Alaska est innovant. Chaque mercredi, sur le site vous trouverez la suite de notre romain. Pas toujours évident de devoir patientez!
  					</section>
  					<section class="col-4 essai">
  						<h2> A propos </h2>
  						<p>
  							Jean Forteroche est un écrivain français de romans policiers. Il est originaire de Paris, où il vit avec sa femme et ses quatre enfants. Diplômé en sciences politiques du Amherst College, il a travaillé dans une agence de voyages avant de se consacrer à l'écriture. Depuis ses débuts en 1995, la critique n'a cessé de l'acclamer. Il est notamment le premier auteur à avoir reçu le Edgar Award, le Shamus Award et le Anthony 
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
      		<a href="chapters-<?= $chapters['id'] ?>.html"><?= $chapters['title'] ?></a>
    	</h3>
    
    	<p>
    		<?= nl2br($chapters['content']) ?>
   	 	</p>
	</section>
<?php
}?>


</section>
 </section>	