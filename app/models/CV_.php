<?php

/**
 * Image manipulation class
 */
namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * User class
 */
class CV_
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


}