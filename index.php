<?php

require_once("config.php");

/*$sql = new sql();
$usuarios = $sql -> select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

// Carrega um usuário apenas
//$root = new Usuario();
//$root -> loadById(3);
//echo $root;

// Carrega lista
//$list = Usuario::getList();
//echo json_encode($list);

// Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

// Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario -> login("root", "54321");
//echo $usuario;

//$aluno = new Usuario("Professor", "12345");

//$aluno -> setDeslogin("aluno");
//$aluno -> setDessenha("aluno");

//$aluno -> insert();
//echo $aluno;

$usuario = new Usuario();

$usuario -> loadById(8);

$usuario -> update('professor', '12345');

echo $usuario;