<?php
class AnxietyTestsController extends AppController
{
	public $helpers = array('Html', 'Form');
	public $components = array('RequestHandler');
	
	public function add()
	{
		if(!$this->Session->check('User.email'))
		{
			$this->redirect(array('controller' => 'users', 'action' => 'login'));
		}
		if($this->request->is('post'))
		{
			
			$GAD = $this->request->data['AnxietyTest'];
			$this->AnxietyTest->create();
			if($this->AnxietyTest->save($GAD))
			{
				$this->Session->setFlash(__('Reponse Successful'));
				
				//return $this->redirect(array('controller' => 'GADs', 'action' => 'viewall'));
			}
			else
			{
				$this->Session->setFlash(__('unable to add'));
			}
		}
	}

}
?>