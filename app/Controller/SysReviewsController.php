<?php

class SysReviewsController extends AppController
{
	public $helpers = array('Html', 'Form');
	public $components = array('RequestHandler');
	
	public function add()
	{
		if($this->request->is('post'))
		{
			
			$user = $this->request->data['SysReview'];
			$this->User->create();
			if($this->User->save($user))
			{
				$this->Session->setFlash(__('SysReview Added'));
			}
		}	
	}
	
	public function viewall()
	{
		$this->set('sysreviews', $this->SysReview->find('all'));
	}
	
}

?>