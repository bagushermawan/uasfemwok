<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Orders extends Seeder
{
	public function run()
	{
		// membuat data
		$news_data = [
			[
				'nama'		=> 'aaa',
				'tujuan'	=> 'daw',
				'pulang'	=> '2021-01-01',
				'pergi'		=> '2023-03-03',
				'jumlah'	=> '4'
			],
			[
				'nama'		=> 'Adit',
				'tujuan'	=> 'Malang',
				'pulang'	=> '2021-01-01',
				'pergi'		=> '2023-03-03',
				'jumlah'	=> '3'
			],
			[
				'nama'		=> 'Baher',
				'tujuan'	=> 'Jogja',
				'pulang'	=> '2021-01-01',
				'pergi'		=> '2023-03-03',
				'jumlah'	=> '3'
			],
			[
				'nama'		=> 'Rezi',
				'tujuan'	=> 'Jakarta',
				'pulang'	=> '2021-01-01',
				'pergi'		=> '2023-03-03',
				'jumlah'	=> '2'
			],
			[
				'nama'		=> 'Mamat',
				'tujuan'	=> 'Bali',
				'pulang'	=> '2021-01-01',
				'pergi'		=> '2023-03-03',
				'jumlah'	=> '1'
			],
			[
				'nama'		=> 'Kirin',
				'tujuan'	=> 'Makasar',
				'pulang'	=> '2021-01-01',
				'pergi'		=> '2023-03-03',
				'jumlah'	=> '2'
			]
		];

		foreach($news_data as $data){
			// insert semua data ke tabel
			$this->db->table('Orders')->insert($data);
		}
	}
}
