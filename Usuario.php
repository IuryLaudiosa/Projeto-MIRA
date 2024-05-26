<?php
class Usuario
{
    public $id;
    public $nome;
    public $mensagem;


    function imprime()
    {
        echo "
        <div class='pergunta'>
    <div class='nomeComentario'>

        <img class='image' src='/img/perfilsemfoto.jpg' />
        <h3>{$this->nome}</h3>
        <p id='dataHora'>21:58 12 abril</p>s
        </div>
        <p class='comentario'>{$this->mensagem}</p>

        </div>
        </div>
        ";
    }

}
