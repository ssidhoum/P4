<?php
namespace Model;
 
use \Entity\Chapters;
 
class ChaptersManagerPDO extends ChaptersManager
{
  public function getList($debut = -1, $limite = -1)
  {
    $sql = 'SELECT id, title, content, addDate, updateDate FROM chapters ORDER BY id DESC';
 
    if ($debut != -1 || $limite != -1)
    {
      $sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
    }
 
    $requete = $this->dao->query($sql);
    $requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Chapters');
 
    $listeChapters = $requete->fetchAll();
 
    foreach ($listeChapters as $chapters)
    {
      $chapters->setAddDate(new \DateTime($chapters->addDate()));
      $chapters->setUpdateDate(new \DateTime($chapters->updateDate()));
    }
 
    $requete->closeCursor();
 
    return $listeChapters;
  }
 
  public function getUnique($id)
  {
    $requete = $this->dao->prepare('SELECT id, title, content, addDate, updateDate FROM chapters WHERE id = :id');
    $requete->bindValue(':id', (int) $id, \PDO::PARAM_INT);
    $requete->execute();
 
    $requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Chapters');
 
    if ($chapters = $requete->fetch())
    {
     $chapters->setAddDate(new \DateTime($chapters->addDate()));
     $chapters->setUpdateDate(new \DateTime($chapters->updateDate()));
 
      return $chapters;
    }
 
    return null;
  }
}