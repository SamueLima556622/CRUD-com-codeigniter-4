<?php 
namespace App\Controllers;

use App\Models\Salvar;

class Editar extends BaseController{
public function EditarInfo(){
    $modelo = new Salvar();
    $data = [
        'nome' => $this->request->getGet('nome'),
        'sobrenome' => $this->request->getGet('sobrenome'),
        'email' => $this->request->getGet('email'),
        'telefone' =>$this->request->getGet('fone'),
    ];

    $id = $this->request->getGet();
    $modelo -> uptade($id, $data);
}
}

