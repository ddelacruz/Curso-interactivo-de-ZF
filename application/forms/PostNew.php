<?php
class Application_Form_PostNew extends Zend_Form
{
	public function init()
	{
		$categories = array(
			'1' => 'Real State',
			'2' => 'Cars',
			'3' => 'Classes',
			'4' => 'For Sale',
			'5' => 'Contact',
		);
	
		$this->setDisableLoadDefaultDecorators(true);
		$this->setDecorators(array(array( 'ViewScript',
			array( 'viewScript' => 'posts/_form_new.phtml') ), 'Form') );
		
		$this->addElement('text', 'title', array(
				'decorators'	=> array( 'ViewHelper' ),
				'filters'   	=> array( 'StringTrim', 'StripTags' ),
				'required'  	=> true,
				'placeholder'   => 'Ex. Luxury New Car',
				'class' 		=> 'input-xlarge',
				'id'			=> 'title',
			)
		);
			
		$this->addElement('select', 'category', array(
				'decorators'	=> array( 'ViewHelper' ),
				'filters'   	=> array( 'StringTrim', 'StripTags', 'StringToLower' ),
				'required'  	=> true,
				'multiOptions'  => $categories,
				'id'			=> 'category',
			)
		);
		
		$this->addElement('textarea', 'description', array(
				'decorators'	=> array( 'ViewHelper' ),
				'filters'   	=> array( 'StringTrim', 'StripTags' ),
				'required'  	=> true,
				'cols'  		=> 40,
				'rows'  		=> 3,
				'placeholder'   => 'Ex. It\'s my beatiful old car. Good car.',
				'class' 		=> 'input-xlarge',
				'id'			=> 'description',
			)
		);
		
		$this->addElement('text', 'price', array(
				'decorators'	=> array( 'ViewHelper' ),
				'filters'   	=> array( 'StringTrim', 'StripTags' ),
				'required'  	=> true,
				'placeholder'   => 'Ex. 2800',
				'class' 		=> 'span2',
				'size'  		=> 16,
				'id'			=> 'price',
			)
		);
		
		$this->addElement('textarea', 'contact_data', array(
				'decorators'	=> array( 'ViewHelper' ),
				'filters'   	=> array( 'StringTrim', 'StripTags' ),
				'required'  	=> true,
				'cols'  		=> 40,
				'rows'  		=> 3,
				'placeholder'   => 'Ex. Contact at john@smith.com',
				'class' 		=> 'input-xlarge',
				'id'			=> 'contact_data',
			)
		);
		
		$this->addElement('submit', 'submit', array( 
				'decorators'	=> array( 'ViewHelper' ),
				'label' 		=> 'Create Post',
				'class' 		=> 'btn btn-primary',
			)
		);
	}
}