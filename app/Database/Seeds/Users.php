<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
	public function run()
	{
		// membuat data
		$news_data = [
			[
				'nama' => 'bagushermawan admin',
				'username'  => 'baher',
				'password' => 'qwe',
				'slug' => 'babababaa',
				'role' => '1',
			],
			[
				'nama' => 'ini userrr',
				'username'  => 'user',
				'password' => 'qwe',
				'slug' => 'ususususu',
				'role' => '2',
			],
			
		];

		foreach($news_data as $data){
			// insert semua data ke tabel
			$this->db->table('Users')->insert($data);
		}
	}
}
