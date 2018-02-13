<?php
namespace App\Backend\Modules\Chapters;

use \BLOGFram\BackController;
use \BLOGFram\HTTPRequest;

class ChaptersController extends BackController
{
  public function executeIndex(HTTPRequest $request)
  {
    $this->page->addVar('title', 'Gestion des news');

    $manager = $this->managers->getManagerOf('Chapters');

    $this->page->addVar('listeChapters', $manager->getList());
    $this->page->addVar('nombreChapters', $manager->count());
  }
}