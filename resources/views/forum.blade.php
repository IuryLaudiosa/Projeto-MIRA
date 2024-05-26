@extends('layouts.template')

@section('title', 'Mira')

@section('content')

<form action="" method="post">
    <div class="forum">
      <h1><b>Nosso Forum</b></h1>
      <h1>FORUM INTERATIVO</h1>
      <div id="quadro">
        <h3 id="nomeForum">Nome: <input type="text" name="nome" placeholder="   INSIRA SEU NOME AQUI" value=""></h3>
        <input type="text" name="mensagem" id="campoForum" placeholder="PROIBIDO OFENSAS E EXPRESSOẼS RACISTAS"/>
        <input type="submit" name="enviar" value="ENVIAR" id="botaoEnviar" />
      </div>
    </div>
  </form>

  <div class="botaoEnvio">
    <a href="/forum.html">
      <input id="envio" type="button" value="ENVIAR UMA MENSAGEM" /></a>
  </div>
  
@endsection