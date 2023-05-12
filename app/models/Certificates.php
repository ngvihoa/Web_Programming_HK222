<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * User class
 */
class Certificates
{
	
	use Model;

	protected $table = 'certificate';
	protected $primaryKey = 'cvid';
	protected $order_column = 'certid';
	// protected $loginUniqueColumn = 'username';

	protected $allowedColumns = [
		'namecert',
		'time',
		'organization',
		'description',
		'cvid'
	];

	/*****************************
	 * 	rules include:
		required
		alpha
		email
		numeric
		unique
		symbol
		longer_than_8_chars
		alpha_numeric_symbol
		alpha_numeric
		alpha_symbol
		m_y
	 * 
	 ****************************/
	protected $onInsertValidationRules = [

		'namecert' => [
			'alpha_space',
			'required',
		],
		'time' => [
			'required',
		],
		'organization' => [
			'alpha_space',
			'required',
		]
	];

	protected $onUpdateValidationRules = [

		'namecert' => [
			'alpha_space',
			'required',
		],
		'time' => [
			'required',
		],
		'organization' => [
			'alpha_space',
			'required',
		]
	];

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