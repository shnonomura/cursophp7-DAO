<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);

// Carrega um usuário
// $root = new Usuario();
// $root->loadbyId(2);
// echo $root;

// Carrega uma lista de usuário
// $lista = Usuario::getList();
//  echo json_encode($lista);

// Carrega uma lista de usuário
// $search = Usuario::search("te");
// echo json_encode($search);

// Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("teste","79166");
echo $usuario;

?>