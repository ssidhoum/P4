<form action="" method="post">
  <p>
   
    <label>Auteur</label>
    <input type="text" name="auteur" value="<?= isset($chapters) ? $chapters['auteur'] : '' ?>" /><br />
 
    <?= isset($erreurs) && in_array(\Entity\Chapters::TITRE_INVALIDE, $erreurs) ? 'Le titre est invalide.<br />' : '' ?>
    <label>Titre</label><input type="text" name="titre" value="<?= isset($chapters) ? $chapters['title'] : '' ?>" /><br />
 
    <?= isset($erreurs) && in_array(\Entity\Chapters::CONTENU_INVALIDE, $erreurs) ? 'Le contenu est invalide.<br />' : '' ?>
    <label>Contenu</label><textarea rows="8" cols="60" name="contenu"><?= isset($chapters) ? $chapters['content'] : '' ?></textarea><br />
<?php
if(isset($chapters) && !$chapters->isNew())
{
?>
    <input type="hidden" name="id" value="<?= $chapters['id'] ?>" />
    <input type="submit" value="Modifier" name="modifier" />
<?php
}
else
{
?>
    <input type="submit" value="Ajouter" />
<?php
}
?>
  </p>
</form>



  </p>
</form>