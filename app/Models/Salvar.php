<?php 
namespace App\Models;

use CodeIgniter\Model;

class Salvar extends Model{
    protected $table      = 'pessoas';
    protected $primarykey = 'id';
    protected $allowedFields = ['nome', 'sobrenome','email'];
    
}