<!DOCTYPE html>
<html>
  <head>
    <title>
      <?= isset($title) ? $title : 'Billet pour l Alaska' ?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/style.css" type="text/css" />
    <meta charset="utf-8" />
    
    
  </head>
  
<body class="fadeIn">
		
  		<section id="layout1">
  			<section id="intro">
  				<h1> Un billet pour l'alaska</h1> <br>
  				<p>
  					Par: <br>
  					Jean FORTEROCHE
  				</p>
  				
  			</section>
  			<section id="header">
  				<h2> Un billet pour l'alaska</h2> <br>
  			</section>
  		</section>
  		<section id="navLayout">
  			<nav class="navbar navbar-expand-md nav">
      		<div class="collapse navbar-collapse" id="navbarCollapse">
        		<ul class="navbar-nav">
          			<li class=" active">
            			<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          			</li>
          			<li class="nav-item">
            			<a class="nav-link" href="#concept">Introduction</a>
          			</li>
          			<li class="nav-item">
            			<a class="nav-link" href="#chapitres">Chapitres</a>
          			</li>
 					<?php if ($user->isAuthenticated()) { ?>
          			<li><a href="/admin/">Admin</a></li>
          			<li><a href="/admin/chapters-insert.html">Ajouter une news</a></li>
          			<?php } ?>
        		</ul>
      		</div>
    	</nav>
  		</section>
  		<section id="layout2" class="container-fluid">

  			<section id="main">
          	<?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>
          
          	<?= $content ?>
        	</section>
  			
  			<footer class="footer decoFooter">
      			<div class="container row">
        			<div class="col-8 admin">
        				<a href="/admin/">se connecter </a>
        			</div>
        			<div class="col-4">
        				2018-Jean FORTEROCHE
        			</div>
     			</div>
    		</footer>
  			
  		</section>

		<!-- Scripts -->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/main.js"></script>
	</body>
</html>