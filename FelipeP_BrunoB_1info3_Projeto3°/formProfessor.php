<?php
include 'cabecalho.php';
if (!isset($_SESSION['login'])){
?>
<div class="coluna10">.</div>
<article class="coluna80">
<h1 class="semp">Você não tem permissão</h1>
</article>
<?php
}else{
	?>
<div class="coluna10">.</div>
<article class="coluna80">
<form method="post" action="gravaProf.php" enctype="multipart/form-data">
<label class="formp">Siape</label>
<br>
<input class="formi" type="number" name="siape" placeholder="Siape">
<br>
<label class="formp">Nome Completo</label>
<br>
<input class="formi" type="text" name="nome" placeholder="Nome">
<br>
<label class="formp">E-mail</label>
<br>
<input class="formi" type="email" name="email" placeholder="E-mail">
<br>
<label class="formp">Foto</label>
<br>
<input name="foto" type="file" size="25">
<br>
<br>
<input class="sub" type="submit" name="enviar" value="Cadastrar">
</form>
</article>
<?php
}
?>