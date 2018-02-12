<?php
namespace Model;
 
use \Entity\Comment;
 
class CommentsManagerPDO extends CommentsManager
{
  protected function add(Comment $comment)
  {
    $q = $this->dao->prepare('INSERT INTO comments SET chapters = :chapters, author = :author, content = :content, date = NOW()');
 
    $q->bindValue(':chapters', $comment->chapters(), \PDO::PARAM_INT);
    $q->bindValue(':author', $comment->author());
    $q->bindValue(':content', $comment->content());
 
    $q->execute();
 
    $comment->setId($this->dao->lastInsertId());
  }
 
  public function getListOf($chapters)
  {
    if (!ctype_digit($chapters))
    {
      throw new \InvalidArgumentException('L\'identifiant de la chapters passé doit être un nombre entier valide');
    }
 
    $q = $this->dao->prepare('SELECT id, chapters, author, content, date FROM comments WHERE chapters = :chapters');
    $q->bindValue(':chapters', $chapters, \PDO::PARAM_INT);
    $q->execute();
 
    $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Comment');
 
    $comments = $q->fetchAll();
 
    foreach ($comments as $comment)
    {
      $comment->setDate(new \DateTime($comment->date()));
    }
 
    return $comments;
  }
}