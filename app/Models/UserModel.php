<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'Users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'tgl_lahir', 'umur', 'slug'];
}