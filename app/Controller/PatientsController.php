<?php
class PatientsController extends AppController
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
			$patient = $this->request->data['Patient'];
			$this->Patient->create();
			if($this->Patient->save($patient))
			{
				$this->Session->setFlash(__('Reponse Successful'));
				//return $this->redirect(array('controller' => 'GADs', 'action' => 'viewall'));
			}
		}
	}
	
	public function view($id)
	{
		$patient = $this->Patient->findByPatientid($id);
		//$id = $patient['Patient']['id'];
		$this->loadModel('AnxietyTest');
		$gads = $this->AnxietyTest->findBypatientid($id);
		
		$this->set('gads', $gads);
	}
}
?>