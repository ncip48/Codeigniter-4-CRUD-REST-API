<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $user = [
		'username' => 'required',
		'password' => 'required',
		'email' => 'required',
		'first_name' => 'required',
		'last_name' => 'required',
		'address' => 'required'
	];

	public $user_errors = [
		'username' => [
			'required'  => 'Must enter username'
		],
		'password' => [
			'required'  => 'Must enter password'
		],
		'email' => [
			'required' => 'Must enter email'
		],
		'first_name' => [
			'required' => 'Must enter first name'
		],
		'last_name' => [
			'required' => 'Must enter last name'
		],
		'address' => [
			'required' => 'Must enter address'
		]
	];
}
