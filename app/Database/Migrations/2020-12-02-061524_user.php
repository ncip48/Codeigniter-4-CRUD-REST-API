<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'first_name' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'last_name' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'photo_picture' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'address' => [
				'type' => 'TEXT'
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
