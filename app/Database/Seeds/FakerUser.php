<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class FakerUser extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');

		for ($i = 0; $i < 50; $i++) {
			$data = [
				'nama' => $faker->name,
				'tgl_lahir' => $faker->date('Y-m-d'),
				'umur' => $faker->numberBetween($min = 10, $max = 100),
				'created_at' => Time::now()
			];
			$this->db->table('users')->insert($data);
		}
	}
}