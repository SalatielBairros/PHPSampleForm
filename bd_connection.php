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
   $mae= $_POST ['mae'];
   $pai= $_POST ['pai'];
   $telefone= $_POST ['telefone'];
   $email= $_POST ['email'];
   $serie= $_POST ['serie'];
   $turno= $_POST ['turno'];
   $atividades= $_POST ['atividades'];
   
   echo 'Nome do Aluno: '.$nome.'<br>';         
      
   $sql= "insert into alunos (nome, nascimento, telefone, mae, pai, email, serie, turno, atividades) values ('$nome', '$nascimento', '$telefone', '$mae', '$pai', '$email', '$serie', '$turno', '$atividades')";
   
   $result = $mysqli->query($sql);
   //as aspas devem ser usadas com cuidado para haver o cadastro da string!
   
   if ($result)
        echo ' <br> Dados cadastrados com sucesso!';
   else
        echo ' <br> Erro ao tentar cadastrar dados no banco!';
     
   ?>
   </body>
</html>