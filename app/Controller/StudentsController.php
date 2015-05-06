<?php
class StudentsController extends AppController
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
			
			$student = $this->request->data['Student'];
			$this->Student->create();
			if($this->Student->save($student))
			{
				$this->Session->setFlash(__('Reponse Successful'));
			}
		}
	}
	
	public function view($id)
	{
		echo $id;
	}
	
	public function viewall()
	{
		if(!$this->Session->check('User.email'))
		{
			$this->redirect(array('controller' => 'users', 'action' => 'login'));
		}
		$this->set('students', $this->Student->find('all'));
	}
}
?>