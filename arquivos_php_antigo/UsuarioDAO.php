<?php
require_once "Usuario.php";
require_once "InterfaceDAO.php";

class UsuarioDAO extends Usuario implements InterfaceDAO
{

    public static function criar($dados)
    {
        $con = DataBase::getConnection();

        $nome = $dados['nome'];
        $mensagem = $dados['mensagem'];
        $sql = "INSERT INTO mira
            (nome, mensagem)
            VALUES(:nome, :mensagem)";

        $stmt = $con->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':mensagem', $mensagem);
        $stmt->execute();
    }
}
