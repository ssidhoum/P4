<section class="container-fluid">
	<section class="col-4 preview">
		<section class="serviceTitle">
			Coup d'oeil
		</section>
		<section>
			<p>
				<span>
					<i class="material-icons">book</i>
					<?= $nombreChapters ?>chapitres
				</span>
				
			</p>
			<p>
				<span>
					<i class="material-icons">comment</i>
				</span>
				Commentaires
			</p>
		</section>
	</section>
	
	<section class="row displayChapters">
	<section class="col-8 displayIndexChapters">
			<h2>
				Vos chapitres:
			</h2>
			<table>
  				<tr>
  					<th>Titre</th>
  					<th>Date d'ajout</th>
  					<th>Dernière modif</th>
  					<th>Action</th>
  				</tr>
<?php
foreach ($listeChapters as $chapters)
{
  echo '<tr><td>', $chapters['title'], '</td><td>le ', $chapters['addDate']->format('d/m/Y'), '</td><td>', ($chapters['addDate'] == $chapters['updateDate'] ? '-' : 'le '.$chapters['updateDate']->format('d/m/Y')), '</td><td><a href="news-update-', $chapters['id'], '.html"><i class="material-icons">create</i></a> <a href="news-delete-', $chapters['id'], '.html"><i class="material-icons">delete_sweep</i></a></td></tr>', "\n";
}
?>
			</table>	
		</section>
	
	<section class="col-2 displayAddChapters">
		<a href="http://localhost:8888/admin/news-insert.html">
		<span>
			<i class="material-icons">add_circle</i>
		</span> <br>
		Ajouter un chapitre</a>
	</section>
	
</section>

	
	
</section>