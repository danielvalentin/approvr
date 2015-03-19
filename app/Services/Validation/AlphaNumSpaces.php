<?php namespace App\Services\Validation;

use Illuminate\Validation\Validator;

class AlphaNumSpaces extends Validator {
	
	private $_custom_messages = array(
		'alpha_dash_spaces' => 'The :attribute may only contain letters, spaces, and dashes.',
		'alpha_num_spaces' => 'The :attribute may only contain letters, numbers, and spaces.'
	);
	
	public function __construct($translator, $data, $rules, $messages = array(), $customAttributes = array())
	{
		parent::__construct( $translator, $data, $rules, $messages, $customAttributes );
		$this->setCustomMessages( $this->_custom_messages );
	}
	
	public function validateAlphaDashSpaces( $attribute, $value )
	{
		return (bool) preg_match( "/^[A-Za-z\s-_]+$/", $value );
	}
	
	public function validateAlphaNumSpaces( $attribute, $value )
	{
		return (bool) preg_match( "/^[A-Za-z0-9\s]+$/", $value );
	}
	
}
