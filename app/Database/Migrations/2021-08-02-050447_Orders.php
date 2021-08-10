<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'dari'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'ke'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'pulang' => [
				'type'           => 'date',
			],
			'pergi' => [
				'type'			=> 'date',
			],
			'maskapai'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'room' => [
				'type'			=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'jumlah' => [
				'type'	=> 'varchar',
				'constraint' => '255',
			],
			'kelas'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'slug'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('Orders', TRUE);
	}

	public function down()
	{
		// menghapus tabel news
		$this->forge->dropTable('Orders');
	}
}
