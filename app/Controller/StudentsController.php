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
			
			$exp =array();
			for($i=1; $i<=6; $i++)
			{
				//echo $this->request->data['Student']['previousexperience' . $i];
				if((isset($this->request->data['Student']['previousexperience' . $i])) && $this->request->data['Student']['previousexperience' . $i] == 1)
				{
					$exp[] = $i;
				}
			}
			//$this->set('debug', $exp);
			$student = $this->request->data['Student'];
			$student['previousexperience'] = implode(',',$exp);
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