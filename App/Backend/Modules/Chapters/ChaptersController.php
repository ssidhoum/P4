<?php
namespace App\Backend\Modules\Chapters;

use \BLOGFram\BackController;
use \BLOGFram\HTTPRequest;
use \Entity\Chapters;
use \Entity\Comment;

class ChaptersController extends BackController
{
	public function executeIndex(HTTPRequest $request)
  	{
    	$this->page->addVar('title', 'Gestion des news');

   		$manager = $this->managers->getManagerOf('Chapters');
		$manager2 = $this->managers->getManagerOf('Comments');

    	$this->page->addVar('listeChapters', $manager->getList());
    	$this->page->addVar('nombreChapters', $manager->count());
		$this->page->addVar('nombreComments', $manager2->count());
	  
  	}
	
	public function executeUpdate(HTTPRequest $request)
	{
    if ($request->postExists('title'))
    {
      $this->processForm($request);
    }
    else
    {
      $this->page->addVar('chapters', $this->managers->getManagerOf('Chapters')->getUnique($request->getData('id')));
    }
 
    $this->page->addVar('title', 'Modification d\'une news');
  }
	
	public function executeDelete(HTTPRequest $request)
  	{
    	$this->managers->getManagerOf('Chapters')->delete($request->getData('id'));
    
    	$this->app->user()->setFlash('La news a bien été supprimée !');
    
    	$this->app->httpResponse()->redirect('.');
  	}

	
	public function executeInsert(HTTPRequest $request)
  	{
    if ($request->postExists('titre'))
    {
      $this->processForm($request);
    }
 
    $this->page->addVar('title', 'Ajout d\'une news');

  }
	
	public function processForm(HTTPRequest $request)
  	{
    $chapters = new Chapters([
      'title' => $request->postData('titre'),
      'content' => $request->postData('contenu')
    ]);
 
    // L'identifiant de la news est transmis si on veut la modifier.
    if ($request->postExists('id'))
    {
      $chapters->setId($request->postData('id'));
    }
 
    if ($chapters->isValid())
    {
      $this->managers->getManagerOf('Chapters')->save($chapters);
 
      $this->app->user()->setFlash($chapters->isNew() ? 'La news a bien été ajoutée !' : 'La news a bien été modifiée !');
    }
    else
    {
      $this->page->addVar('erreurs', $chapters->erreurs());
    }
 
    $this->page->addVar('news', $chapters);
  }
	
	
}
	
	
	
	