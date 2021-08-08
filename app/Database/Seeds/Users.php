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
				'nama' => 'Ali',
				'tgl_lahir'  => '2021-01-01',
				'umur' => '20',
				'slug' => 'ali',
			],
			[
				'nama' => 'Adit',
				'tgl_lahir' => '2022-02-02',
				'umur' => '21',
				'slug' => 'adit',
			],
			[
				'nama' => 'Baher',
				'tgl_lahir'	=> '2023-03-03',
				'umur' => '22',
				'slug' => 'baher',
			],
			[
				'nama' => 'Rezi',
				'tgl_lahir'	=> '2024-04-04',
				'umur' => '23',
				'slug' => 'rezi',
			]
		];

		foreach($news_data as $data){
			// insert semua data ke tabel
			$this->db->table('Users')->insert($data);
		}
	}
}
