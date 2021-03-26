<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
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
			'id_customer'      		=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
			],
			'id_produk'      		=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
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
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('id_customer', 'customer', 'id');
		$this->forge->addForeignKey('id_produk', 'produk', 'id');
		$this->forge->createTable('order');
	}

	public function down()
	{
		$this->forge->dropTable('order');
	}
}
