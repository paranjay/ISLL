<?php

class UsersController extends AppController
{
	public $helpers = array('Html', 'Form');
	public $components = array('RequestHandler');
			
	public function register()
	{
		if($this->request->is('post'))
		{
			
			$user = $this->request->data['User'];
			$this->User->create();
			if($this->User->save($user))
			{
				$this->Session->setFlash(__('Registration Successful'));
			}
		}
	}
	
	function authenticate()
	{
		if($this->request->is('post'))
		{
			$userFromRequest = $this->request->data['User'];
			$userFromDB = $this->User->findByemail($userFromRequest['email']);
			if(isset($userFromDB['User']))
			{
				if($userFromRequest['password'] == $userFromDB['User']['password'])
				{
					$this->Session->write('User.email', $userFromDB['User']['email']);
					$this->Session->write('User.name', $userFromDB['User']['name']);
					$this->Session->setFlash(__('all set!'));
				}
				else
				{
					$this->Session->setFlash(__('Password doesnt match!'));
					$this->Session->delete('User.email');
				}
			}
			else
			{
				$this->Session->setFlash(__('Email not found!'));
				$this->Session->delete('User.email');
			}
		}
	}
	
	function edit($id)
	{
		if(!$id)
		{
			throw new NotFoundException(__('Invalid User'));
		}
		$user = $this->User->findById($id);
		if(!$user)
		{
			throw new NotFoundException(__('invalid User'));
		}
		if($this->request->is(array('post','put')))
		{
			$this->User->id = $id;
			if($this->User->save($this->request->data))
			{
				$this->Session->setFlash(__('update successful'));
				//echo "<h1>done</h1>";
				return $this->redirect(array('action' => 'index'));
				
			}
			$this->Session->setFlash(__('unable to update your User'));
		}
		
		if(!$this->request->data)
		{
			$this->request->data = $user;
		}
	}
	
	function index()
	{
		$this->set('users', $this->User->find('all'));
	}
}

?>