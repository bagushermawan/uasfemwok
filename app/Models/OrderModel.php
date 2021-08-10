<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table      = 'Orders';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    // protected $allowedFields = ['nama', 'tujuan', 'pulang', 'pergi', 'jumlah', 'slug'];
    protected $allowedFields = ['dari', 'ke', '', 'pulang', 'pergi','maskapai', 'room', 'jumlah', 'kelas', 'slug'];
}