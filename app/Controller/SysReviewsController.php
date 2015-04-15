<?php

class SysReviewsController extends AppController
{
	public $helpers = array('Html', 'Form');
	public $components = array('RequestHandler');
	
	public function add()
	{
		if($this->request->is('post'))
		{
			$review = $this->request->data['SysReview'];
			$review['email'] = $this->Session->read('User.email');
			$this->SysReview->create();
			if($this->SysReview->save($review))
			{
				$this->Session->setFlash(__('SysReview Added'));
			}
			$this->redirect(array('action' => 'add'));
		}	
	}
	
	public function viewall()
	{
		if(!$this->Session->check('User.email'))
		{
			$this->redirect(array('controller' => 'users', 'action' => 'login'));
		}
		//$this->set('sysreviews', $this->SysReview->findAllByemail($this->Session->read('User.email')));
		$this->set('sysreviews', $this->SysReview->find('all'));
	}
	
	public function edit($id)
	{
		if(!$id)
		{
			throw new NotFoundException(__('Invalid User'));
		}
		$sysreview = $this->SysReview->findById($id);
		if(!$sysreview)
		{
			throw new NotFoundException(__('invalid SysReview'));
		}
		if($this->request->is(array('post','put')))
		{
			$this->SysReview->id = $id;
			if($this->SysReview->save($this->request->data))
			{
				$this->Session->setFlash(__('update successful'));
				return $this->redirect(array('action' => 'viewall'));
				
			}
			$this->Session->setFlash(__('unable to update your SysReview'));
		}
		
		if(!$this->request->data)
		{
			$this->request->data = $sysreview;
		}
	}
}

?>