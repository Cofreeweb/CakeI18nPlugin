<?php
App::uses('L10n', 'I18n');
App::uses('I18nAppController', 'I18n.Controller');
/**
 * Locales Controller
 *
 */
class LocalesController extends I18nAppController 
{
  public $components = array( 'Paginator');
  
  public $uses = array( 'I18n.Language');
  
  public function beforeFilter()
  {
    parent::beforeFilter();
    $this->L10n = new L10n;
  }
  
  public function admin_index() 
	{
		$this->Language->recursive = 0;
		$this->set( 'contents', $this->Paginator->paginate());
	}

	public function admin_add() 
	{
	  $this->__setCatalog();
	  
		if( $this->request->is('post')) 
		{
			$this->Language->create();
			
			if( $this->Language->save( $this->request->data)) 
			{
				$this->redirect( array(
				    'action' => 'edit',
				    $this->Language->id
				));
			} 
			else 
			{
				$this->Session->setFlash( __('The article could not be saved. Please, try again.'));
			}
		}
	}

	public function admin_edit($id = null) 
	{
	  $this->__setCatalog();
	  
		if( !$this->Language->exists( $id)) 
		{
			throw new NotFoundException( __('Invalid article'));
		}
		
		if( $this->request->is( array( 'post', 'put'))) 
		{
			if( $this->Language->save($this->request->data)) 
			{
				$this->redirect( array(
				    'action' => 'edit',
				    $this->Language->id
				));
			} 
			else 
			{
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		} 
		else 
		{
			$options = array('conditions' => array('Language.' . $this->Language->primaryKey => $id));
			$this->request->data = $this->Language->find( 'first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) 
	{
		$this->Language->id = $id;
		
		if( !$this->Language->exists()) 
		{
			throw new NotFoundException(__('Invalid article'));
		}
		
		$this->request->onlyAllow('post', 'delete');
		
		if( $this->Language->delete()) 
		{
			$this->Session->setFlash(__('The article has been deleted.'));
		} 
		else 
		{
			$this->Session->setFlash(__('The article could not be deleted. Please, try again.'));
		}
		
		return $this->redirect(array('action' => 'index'));
	}
	
/**
 * Setea el catálogo de idiomas disponibles
 *
 * @return void
 */
	private function __setCatalog()
	{
	  $catalog = $this->L10n->catalog();
	  $locales = array();
	  
	  foreach( $catalog as $iso2 => $info)
	  {
	    $locales [$iso2] = $info ['language'];
	  }
	  
	  
	  $this->set( compact( 'locales'));
	}

}
