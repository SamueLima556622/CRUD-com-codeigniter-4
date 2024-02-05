<?php 
namespace App\Controllers;

use App\Models\Salvar;

class Mostrar extends BaseController{
    public function MostrarInfo(){
        $modelo = new Salvar();
        $data['mostrar'] = null; 
        $data['mostrar'] = $modelo->findAll();
        return view('mostrar', $data);
    }
}
