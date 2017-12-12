<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <title>RETORNO CADASTRO FORMULÁRIO</title>
   <style>
      body  {
      margin: 100px 40px 10px 70px;
      color:#CCC;
      background-color:#099;
      font-family:Verdana, Geneva, sans-serif;
      font-size:18px;
      }
   </style>
</head>
<body>
<?php
   include ('conecta.php'); // comando que inclui a conexão php feita em outro arquivo
   define('SITE', 'http://localhost/trabalho/');

   $nome = $_POST ['nome']; 
   $nascimento= $_POST ['nascimento'];
   $endereco= $_POST ['endereco'];
   $cpf= $_POST ['cpf'];
   $rg= $_POST ['rg'];
   $cargo= $_POST ['cargo'];
   $admissao= $_POST ['admissao'];  
   
   echo 'Nome do funcionário: '.$nome.'<br>';         
      
   $sql= "insert into funcionarios (nome, nascimento, endereco, cpf, rg, cargo, admissao) values ('$nome', '$nascimento', '$endereco', '$cpf', '$rg', '$cargo', '$admissao')";
   
   $result = $mysqli->query($sql);
   //as aspas devem ser usadas com cuidado para haver o cadastro da string!
   
   if ($result)
        echo ' <br> Dados cadastrados com sucesso!';
   else
        echo ' <br> Erro ao tentar cadastrar dados no banco!';
     
   ?>
   </body>
</html>