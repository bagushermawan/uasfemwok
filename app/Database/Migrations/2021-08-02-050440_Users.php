<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'tgl_lahir'      => [
				'type'           => 'date',
			],
			'umur' => [
				'type'           => 'INT',
				'constraint'     => 3,
			],
			'slug' => [
				'type'	=> 'varchar',
				'constraint' => 100,
			],
			'role' => [
				'type'	=> 'varchar',
				'constraint' => 100,
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
		$this->forge->createTable('Users', TRUE);
	}

	public function down()
	{
		// menghapus tabel news
		$this->forge->dropTable('Users');
	}
}
