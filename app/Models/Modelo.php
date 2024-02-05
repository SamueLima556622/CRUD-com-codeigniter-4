<?php

namespace App\Model;

use CodeIgniter\Model;

class Modelo extends Model{
    protected $table = 'pessoas';
    protected $primarykey = 'id';
    protected $allowedFields = ['nome', 'sobrenome','email','fone'];
}
