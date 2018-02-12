<?php
namespace Entity;

use \BLOGFram\Entity;

class Chapters extends Entity
{
  protected $title,
            $content,
            $addDate,
            $updateDate;

  const TITRE_INVALIDE = 2;
  const CONTENU_INVALIDE = 3;

  public function isValid()
  {
    return !(empty($this->title) || empty($this->content));
  }


  // SETTERS //

  public function setTitre($title)
  {
    if (!is_string($title) || empty($title))
    {
      $this->erreurs[] = self::TITRE_INVALIDE;
    }

    $this->title = $title;
  }

  public function setContent($content)
  {
    if (!is_string($content) || empty($content))
    {
      $this->erreurs[] = self::CONTENU_INVALIDE;
    }

    $this->content = $content;
  }

  public function setAddDate(\DateTime $addDate)
  {
    $this->addDate = $addDate;
  }

  public function setUpdateDate(\DateTime $updateDate)
  {
    $this->updateDate = $updateDate;
  }

  // GETTERS //

  public function title()
  {
    return $this->title;
  }

  public function content()
  {
    return $this->content;
  }

  public function addDate()
  {
    return $this->addDate;
  }

  public function updateDate()
  {
    return $this->updateDate;
  }
}