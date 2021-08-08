<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class FakerOrder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');

		for ($i = 0; $i < 20; $i++) {
			$data = [
				'nama' => $faker->name,
				'tujuan' => $faker->city,
				'pulang' => $faker->date,
				'pergi' => $faker->date,
				'jumlah' => $faker->numberBetween($min = 1, $max = 10),
				'created_at' => Time::now()
			];
			$this->db->table('orders')->insert($data);
		}
	}
}