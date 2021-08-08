<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class cok extends Seeder
{
    public function run() {

     $this->call(FakerUser::class);
     $this->call(FakerOrder::class);
}
}