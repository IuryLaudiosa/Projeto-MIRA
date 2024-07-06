@extends('layouts.template')

@section('title', 'Mira')

@section('content')

<form action="{{ route('forum.store') }}" method="post" class="col-md-4">
  @csrf
  <div class="mb-3">
    <label for="nome" class="form-label">Nome: </label>
    <input type="text" name="name" class="form-control" required placeholder="Insira seu nome">
  </div>
  <div class="mb-3">
    <label for="mensagem" class="form-label">Deixe sua mensagem: </label>
    <textarea name="message" id="campoForum" class="form-control" placeholder="Proibido ofensas" rows="5"></textarea>
  </div>   
    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" />
</form>

@if (count($messages)  > 0)
  @foreach ($messages as $message)
    <div class="container-mensagem background-Lightgray box-shadow">
      <div class="flex-mensagem-foto">
        <img src="/img/perfilsemFoto.jpg" alt="Imagem_Perfil" class="img-perfil-forum">
        <span class="nome-perfil-forum">{{ $message->user_name }}</span>
      </div>
      <p class="texto-mensagem-forum">{{ $message->message }}</p>
    </div>
  @endforeach
  @else
  <span>Nenhuma mensagem a ser exibida.</span>
@endif
@endsection
<!-- 
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
</div> -->