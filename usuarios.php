<?php
require_once "UsuarioDAO.php";

$sql = 'SELECT nome,mensagem FROM mira;';

if ($result = $con->query($sql)) :
    if ($result->rowCount() > 0) :

            $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'UsuarioDAO');

            while ($usuario = $result->fetch()) :
                $usuario->imprime();
            endwhile;
        


        endif;
    endif;


    