<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penjualan extends Migration
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
			'id_penjual'      		=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
			],
			'id_produk'      		=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
			],
			'id_order'      		=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
			],
			'total_penjualan'  => [
				'type'           => 'INT',
				'constraint'     => 11,
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
		$this->forge->addForeignKey('id_penjual', 'penjual', 'id');
		$this->forge->addForeignKey('id_produk', 'produk', 'id');
		$this->forge->addForeignKey('id_order', 'order', 'id');
		$this->forge->createTable('penjualan');
	}

	public function down()
	{
		$this->forge->dropTable('penjualan');
	}
}
