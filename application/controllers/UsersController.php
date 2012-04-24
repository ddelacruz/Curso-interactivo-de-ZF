<?php
class UsersController extends Zend_Controller_Action
{
	public function init()
	{
		
	}
	
	public function signupAction()
	{
		$form = new Application_Form_Signup();
		if ($this->getRequest()->isPost()){
			if ($form->isValid($this->_getAllParams())){
				echo "<script>
						document.getElementById('users-form-success').style.display='block';
					  </script>";
			} else {
				echo "<script>
						document.getElementById('users-form-errors').style.display='block';
					  </script>";
			}
			
		} 
		$this->view->form = $form;
	}
	
}