<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penjual extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'      		=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE,
			],
			'email'   		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'username'		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'password'		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'salt'    		=> [
				'type'           => 'TEXT',
			],
			'avatar'  		=> [
				'type'           => 'TEXT',
				'null'			 => TRUE,
			],
			'role'    		=> [
				'type'           => 'INT',
				'constraint'     => 2,
			],
			'nama_lengkap'  => [
				'type'           => 'TEXT',
			],
			'alamat'		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'no_hp'			=> [
				'type'           => 'VARCHAR',
				'constraint'     => 15,
			],
			'created_by'    => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'created_date'  => [
				'type'           => 'DATETIME',
			],
			'updated_by'    => [
				'type'           => 'INT',
				'constraint'     => 11,
				'null'			 => TRUE,
			],
			'updated_date'  => [
				'type'           => 'DATETIME',
				'null'			 => TRUE,
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('penjual');
	}

	public function down()
	{
		$this->forge->dropTable('penjual');
	}
}
