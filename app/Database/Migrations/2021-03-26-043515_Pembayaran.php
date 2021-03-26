<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
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
			'id_order'      		=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
			],
			'nama_lengkap'  => [
				'type'           => 'TEXT',
			],
			'no_rek'			=> [
				'type'           => 'VARCHAR',
				'constraint'     => 20,
			],
			'total_bayar'			=> [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'gambar'			=> [
				'type'           => 'TEXT',
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
		$this->forge->addForeignKey('id_order', 'order', 'id');
		$this->forge->createTable('pembayaran');
	}

	public function down()
	{
		$this->forge->dropTable('pembayaran');
	}
}
