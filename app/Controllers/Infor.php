<?php 
namespace App\Controllers;

use App\Models\Salvar;

class Infor extends BaseController{
    private $modelo;

    public function __construct(){
        $this -> modelo = new Salvar();
    }
//Pegar as informações e salvar no banco de dados
    public function PegarInfo(){
        $id = $this->request->getPost('id');
        $nome= $this->request->getPost('nome');
        $sobrenome = $this->request->getPost('sobrenome');
        $email = $this->request->getPost('email');

        $modelo = new Salvar();
        $dados = [
            'id' => $id,
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email,
        ];
        $modelo ->insert($dados);
        return view('pagina1');
    }
    public function Voltar(){
        return view('pagina1');
    }
//Mostrar as informações em uma tabela, linkado a mostrar.php
    public function MostrarInfo(){
        $modelo = new Salvar();
        $data['mostrar'] = null; 
        $data['mostrar'] = $modelo->findAll();
        return view('mostrar', $data);
    }
//Enviar uma informação para a página editar.php a partir do id
    public function Info(){
        $id = $this->request->getGet('id');
        $modelo = new Salvar();
        $data['post'] = $modelo->find($id);
        return view('editar',$data);
    }
//Excluir uma linha do banco de dados
    public function ExcluirInfo(){
        $id = $this->request->getGet();
        $modelo = new Salvar();
        if($modelo ->find($id)){
            $modelo -> delete($id);
            return redirect() -> to('mostrar');
        }else{
            echo "Deu erro";
        }
   }
//Editar algo
   public function EditarInfo(){
    $modelo = new Salvar();
    $data = [
        'nome' => $this->request->getPost('nome'),
        'sobrenome' => $this->request->getPost('sobrenome'),
        'email' => $this->request->getPost('email'),
    ];

    $id = $this->request->getPost('id');
    try{
        $this->modelo->update($id, $data);
    }catch(\Throwable $th){
        throw $th;
    }
    return redirect() -> to('mostrar');
}
   /* public function EditarInfo(){
        $id = $this->request->getGet();
        $Outro_id = $this->request->getPost('id');
        $nome= $this->request->getPost('nome');
        $sobrenome = $this->request->getPost('sobrenome');
        $email = $this->request->getPost('email');
        $fone = $this->request->getPost('fone');
    
        $modelo = new Salvar();
        $dados =[
            'id' => $id,
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email,
            'telefone' => $fone,
        ];
        $data['editar'] = $modelo -> update($dados);
        return view('editar', $data);

$modelo = new Salvar();
        if($modelo->save($this->request->getGet())){
            return true;
        } else{
            echo "Erro";
        
        
        
        }


    }*/
    
}

