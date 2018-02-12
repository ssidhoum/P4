<?php
foreach ($listeChapters as $chapters)
{
?>
  <h2><a href="chapters-<?= $chapters['id'] ?>.html"><?= $chapters['title'] ?></a></h2>
  <p><?= nl2br($chapters['content']) ?></p>
<?php
}