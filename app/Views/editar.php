<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
    <style>
    body{
            background-color: gray;
        }
        form{
            text-align:center;
            background: blue;
            padding:5px;
            border: 1px solid black;
            border-radius:3px;
            color:white;
            margin-left:500px;
            margin-right:500px;
        }
        .first{
            margin-top:10px;
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
            background: red;
            padding-left:20px;
            padding-right:20px;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:5px;
            position: fixed;
            left:10px;
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
            position:fixed;
            bottom:1px;
            max-width: 2000px;
            width: 100%;
        }
    </style>

</head>
<body>
    <h1>Edição</h1>
<form action="editar" method="post" class="first">
        <input type="hidden" name="id" id="id" value="<?= $post['id'] ?>"> 
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome" value="<?= $post['nome'] ?>" ><br>
        <label for="sobrenome">Sobrenome</label><br>
        <input type="text" name="sobrenome" value="<?= $post['sobrenome'] ?>"><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" value="<?= $post['email'] ?>"><br>
        <input type="submit" value="Enviar" class="btn1"><br>
    </form>
<form action="mostrar" method="get" class="sec">
    <input type="submit" value="Tabela" class="btn2">
</form>
<footer>
        <hr color="white">
        <p>Site teste criado pelo Samuel</p>
        <p>Sem direitos reservados</p>
        <p>Samlima638@gmail.com</p>
    </footer>

</body>
</html>

