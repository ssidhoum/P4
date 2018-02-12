<html>
	<head>
		<title>
			<?= isset($title) ? $title : 'Mon super site' ?>
		</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/style2.css" type="text/css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
	  	  <script>
  tinymce.init({
    selector: '.mytextarea'
  });
  </script>

	</head>
	
	<body>
				
		<nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 navBack">
      			<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Un billet pour l'Alaska</a>
      			<ul class="navbar-nav px-3">
        			<li class="nav-item text-nowrap">
          				<a class="nav-link" href="#">Sign out</a>
        			</li>
      			</ul>
    		</nav>
    		
    	<section class="container-fluid">
    		
    		<section  class="row mainRow">
    			<nav id="sideBack" class="col-3 d-none d-md-block sidebar ">
          			<div  class="sidebar-sticky">
            			<ul class="nav flex-column">
              				<li class="nav-item">
                				<a class="nav-link active" href="http://localhost:8888/admin/">
                  				<span>
                  					<i class="material-icons">dashboard</i>
                  				</span>
                  				Tableau de Bord <span class="sr-only">(current)</span>
                				</a>
             				</li>
              				<li class="nav-item">
                				<a class="nav-link" href="http://localhost:8888">
                  					<span>
                  						<i class="material-icons">visibility</i>
                  					</span>
              						Voir mon site
                				</a>
              				</li>
              				<li class="nav-item">
                				<a class="nav-link active" href="#">
                  				<span>
                  					<i class="material-icons">book</i>
                  				</span>
                  				Les chapitres
                				</a>
             				</li>
              				<li class="nav-item">
                				<a class="nav-link" href="#">
                  					<span>
                  						<i class="material-icons">comment</i>
                  					</span>
              						Les commentaires
                				</a>
              				</li>
            			</ul>
          			</div>
        		</nav>
        		<section class="col-9 dashboard">
        			<h1>
        				Bienvenue
        			</h1>
        			<?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>
          			<?= $content ?>
        		</section>
    		</section>
    		
 		</section>
  		
		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
	</body>
</html>