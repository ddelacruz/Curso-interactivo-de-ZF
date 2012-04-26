<?php
class Application_Form_Signup extends Zend_Form
{
	public function init()
	{
		$this->setDisableLoadDefaultDecorators(true);
		$this->setDecorators(array(array( 'ViewScript',
				array( 'viewScript' => 'users/_form_signup.phtml') ), 'Form'
			)
		);
			
		$this->addElement('text', 'name', array(
				'decorators'	=> array( 'ViewHelper' ),
				'filters'   	=> array( 'StringTrim', 'StripTags' ),
				'required'  	=> true,
				'placeholder'   => 'Ex. John Smith',
				'class' 		=> 'input-xlarge',
				'id'			=> 'name',
			)
		);
			
		$this->addElement('text', 'email', array(
				'decorators'	=> array( 'ViewHelper' ),
				'filters'   	=> array( 'StringTrim', 'StripTags', 'StringToLower' ),
				'validators'	=> array( 'EmailAddress' ),
				'required'  	=> true,
				'placeholder'   => 'Ex. jhon@smith.com',
				'class' 		=> 'input-xlarge',
				'id'			=> 'email',
			)
		);
		
		$this->addElement('password', 'password', array(
				'decorators'	=> array( 'ViewHelper' ),
				'filters'   	=> array( 'StringTrim', 'StripTags' ),
				'validators'	=> array( array('StringLength', true, array(6,30)) ),
				'required'  	=> true,
				'placeholder'   => 'Pass. 6 to 30 characters length',
				'class' 		=> 'input-xlarge',
				'id'			=> 'password',
			)
		);
		
		$this->addElement('submit', 'submit', array( 
				'decorators'	=> array( 'ViewHelper' ),
				'label' 		=> 'Sign Up',
				'class' 		=> 'btn btn-primary',
			)
		);
	}
}