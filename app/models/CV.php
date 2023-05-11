<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * User class
 */
class CV
{
	
	use Model;

	protected $table = 'cv';
	protected $primaryKey = 'userid';
	protected $order_column = 'cvid';

	// protected $loginUniqueColumn = 'username';

	protected $allowedColumns = [
		'firstname',
		'lastname',
		'jobtitle',
		'country',
		'userid',
		'hobby',
		'city'
	];

	/*****************************
	 * 	rules include:
		required
		alpha_space
		email
		numeric
		unique
		symbol
		longer_than_8_chars
		alpha_numeric_symbol
		alpha_numeric
		alpha_space
	 * 
	 ****************************/
	protected $onInsertValidationRules = [

		'firstname' => [
			'alpha_space',
			'required'
		],
		'lastname' => [
			'alpha_space',
			'required'
		],
		'jobtitle' => [
			'alpha_space',
			'required'
		],
		'city' => [
			'alpha_space',
			'required'
		],
		'country' => [
			'alpha_space',
			'required'
		],
		'userid' => [
			'required'
		]
	];

	protected $onUpdateValidationRules = [

		'firstname' => [
			'alpha_space',
			'required',
		],
		'lastname' => [
			'alpha_space',
			'required',
		],
		'jobtitle' => [
			'alpha_space',
			'required',
		],
		'city' => [
			'alpha_space',
			'required',
		],
		'country' => [
			'alpha_space',
			'required',
		],

		'userid' => [
			'required',
		]
	];


	public function vld($data){
		return $this->validate($data);
	}

	// public function create_submit($data){
	// 	$returnCvId = '';
	// 	if($this->validate($data)){
	// 		$this->insert($data);

	// 	}

	// 	return $returnCvId
	// }

	// public function signup($data)
	// {
	// 	if($this->validate($data))
	// 	{
	// 		//add extra user columns here
	// 		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
	// 		$this->insert($data);
	// 		redirect('login');
	// 	}
	// }

	// public function login($data)
	// {
	// 	$row = $this->first([$this->loginUniqueColumn=>$data[$this->loginUniqueColumn]]);

	// 	if($row){

	// 		//confirm password
	// 		if(password_verify($data['password'], $row->password))
	// 		{
	// 			$ses = new \Core\Session;
	// 			$ses->auth($row);
	// 			redirect('home');
	// 		}else{
	// 			$this->errors[$this->loginUniqueColumn] = "Wrong $this->loginUniqueColumn or password";
	// 		}
	// 	}else{
	// 		$this->errors[$this->loginUniqueColumn] = "Wrong $this->loginUniqueColumn or password";
	// 	}
	// }

}