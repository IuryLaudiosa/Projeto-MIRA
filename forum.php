<?php
global $con;
require_once "UsuarioDAO.php";
require_once "Database.php";
$db = new Database();
$con = $db->getConnection();
?>

  <div class="display-flex-row-header">
    <img src="img/logo.png" alt="Logo" id="logo" />
    <header class="header-flex">
      <h1 id="school-title">E.E Maria Ilydia Resende Andrade</h1>
      <nav class="display-flex-row">
        <a href="homePage.html">Inicio</a>
        <a href="">Área do aluno</a>
        <a href="">Contato</a>
        <a href="#sobre-nos">Sobre nós</a>
        <a href="index.php">Forum</a>
      </nav>
    </header>
  </div>


  <form action="" method="post">
    <div class="forum">
      <h1><b>Nosso Forum</b></h1>
      <h1>FORUM INTERATIVO</h1>
      <div id="quadro">
        <h3 id="nomeForum">Nome: <input type="text" name="nome" placeholder="   INSIRA SEU NOME AQUI" value="<?= $usuario->nome ?? '' ?>"></h3>
        <input type="text" name="mensagem" id="campoForum" placeholder="PROIBIDO OFENSAS E EXPRESSOẼS RACISTAS" <?= $usuario->mensagem ?? '' ?>/>
        <input type="submit" name="enviar" value="ENVIAR" id="botaoEnviar" />
      </div>
    </div>
  </form>

  <?php require "usuarios.php"; ?>
  
  <div class="botaoEnvio">
    <a href="/forum.html">
      <input id="envio" type="button" value="ENVIAR UMA MENSAGEM" /></a>
  </div>
  <div class="footer-flex">
    <section class="sobre-nos">
      <h1>Conheça nossas redes socias</h1>

      <div class="social-icons">
        <a href="https://www.instagram.com/maria_ilydia_resende?igsh=Z2pnd3dpeG9ycjhn" target="_blank"><img src="/img/Instagram_icon.png" alt="Instagram" /></a>
        <a href="https://api.whatsapp.com/send?phone=553288472495" target="_blank"><img src="/img/whatsapp.png" alt="WhatsApp" /></a>
        <a href="https://www.facebook.com/p/EE-Maria-Ilydia-Resende-Andrade-100054259580162/?locale=pt_BR" target="_blank"><img src="/img/facebook.png" alt="Facebook" /></a>
      </div>
    </section>
  </div>

  <div class="footer">
    <small>E.E Maria Ilydia Resende Andrade - 2024</small>
  </div>

<?php
if (isset($_POST["enviar"])) {

  UsuarioDAO::criar($_POST);
}
?>

<?php
$db->closeConnection();