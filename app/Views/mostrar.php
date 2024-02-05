<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <style>
        body{
            background-color: gray;
        }
        .first{
            margin-top:10px;
            text-align:center;
        }
        .sec{
            background:none;
            border:none;
            position: fixed;
            right: 700px;
            
        }
        .btn1{
            background: green;
            margin-top:5px;
            padding-left:20px;
            padding-right:20px;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:5px;
        }
        .btn1:hover{
            background:red;
            cursor:pointer;
        }
        .btn2{
            text-decoration:none;
            background: red;
            padding-left:20px;
            padding-right:20px;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:5px;
            position: relative;
            left:10px;
            margin-bottom:10px;
            color: white;
        }
        .btn2:hover{
            background: green;
            cursor:pointer;
        }
        h1{
            text-align:center;
        }
        footer{
            background:black;
            color:white;
            text-align:center;
            position:static;
            bottom:0px;
            width: 100%;
        }
        table{
            margin-left:30%;
            margin-right:10%;
            border: 1px solid black;
            padding:15px;
            background: blue;
            border-radius:5px;   
        }
        td{
            background:white;
        }
        th{
            background:white;
        }
    </style>

</head>
<body>
    <h1>Usuários</h1>
<table border="2" class="first">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($mostrar as $result):?>
            <tr>
                <td><?php echo $result['id']?></td>
                <td><?php echo $result['nome'] ?></td>
                <td><?php echo $result['sobrenome'] ?></td>
                <td><?php echo $result['email'] ?></td>
                <td><?php echo anchor('editarInfo/?id=' . $result['id'], 'Editar')?></td>
                <td><?php echo anchor('excluir/ExcluirInfo/?id=' . $result['id'], 'Excluir')?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <a href="voltar" class="btn2">Adicionar</a>
    <footer>
        <hr color="white">
        <p>Site teste criado pelo Samuel</p>
        <p>Sem direitos reservados</p>
        <p>Samlima638@gmail.com</p>
    </footer>

</body>
</html>