<?php
$origem=$_FILES['foto']['tmp_name'];
$partesNome=explode(' ',$_POST['nome']);
$primeiroNome=$partesNome[0];
$sobrenome=end($partesNome);
$nomeArquivo=$primeiroNome.'.'.$sobrenome;
$extensao=explode('/', $_FILES['foto']['type']);
$destino='imagens/professores/'.$nomeArquivo.'.'.$extensao[1];
move_uploaded_file($origem,$destino);
$siape=$_POST['siape'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$foto=$destino;
	$linha="\n".$siape.",".$nome.",".$email.",".$destino;
	$arquivo=fopen("dados/professores.csv", "a+");
	fwrite($arquivo, $linha);
	fclose($arquivo);
	echo ("<meta http-equiv='refresh' content='0;url=index.php'> ");
?>