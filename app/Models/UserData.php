<?php

namespace App\Models;

use CodeIgniter\Model;

class UserData extends Model
{
    protected $table      = 'data_users';
    protected $primaryKey = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType     = \App\Entities\UserData::class;
    protected $allowedFields = ['email', 'username', 'password', 'nama', 'alamat', 'no_tlvn'];
    protected $skipValidation = true;
}