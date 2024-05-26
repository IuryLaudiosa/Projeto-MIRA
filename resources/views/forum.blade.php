@extends('layouts.template')

@section('title', 'Mira')

@section('content')

<form action="" method="post" class="col-md-4">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome: </label>
    <input type="text" name="nome" class="form-control" placeholder="Insira seu nome" value="">
  </div>
  <div class="mb-3">
    <label for="mensagem" class="form-label">Deixe sua mensagem: </label>
    <textarea name="mensagem" id="campoForum" class="form-control" placeholder="Proibido ofensas e expreções racistas" rows="5"></textarea>
  </div>   
    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" />
</form>

<div class="container-mensagem background-Lightgray box-shadow">
  <div class="flex-mensagem-foto">
    <img src="/img/perfilsemFoto.jpg" alt="Imagem_Perfil" class="img-perfil-forum">
    <span class="nome-perfil-forum">Arthur Fernades</span>
  </div>
  <p class="texto-mensagem-forum">A semana da Ciência vai ser super legal!</p>
</div>

<div class="container-mensagem background-Lightgray box-shadow">
  <div class="flex-mensagem-foto">
    <img src="/img/perfilsemFoto.jpg" alt="Imagem_Perfil" class="img-perfil-forum">
    <span class="nome-perfil-forum">Cláudio</span>
  </div>
  <p class="texto-mensagem-forum">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam repellendus tempora facere aliquam unde animi, officia praesentium ipsum pariatur recusandae eius ab accusamus ipsa voluptates mollitia soluta inventore eligendi nihil.!</p>
</div>

@endsection