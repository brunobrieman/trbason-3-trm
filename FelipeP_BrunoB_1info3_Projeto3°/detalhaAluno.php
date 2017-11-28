<?php
include 'cabecalho.php';
include 'aluno.php';
$Matricula=$_GET['cod'];
$alunos=buscaAluno($Matricula);
?>
<div class="coluna10">.</div>
<article class="coluna80">
		<section class="clicavel" id="foto1">
			<img src="<?=$alunos['Foto']?>">
		</section>

		<section class="modal escondido">
			<section class="conteudo">
				<section class="fechar">Fechar</section>
				<img src="<?=$alunos['Foto']?>">
			</section>
		</section>
	<section class="dados">
		<p>Nome: <?=$alunos['Nome']?></p>
		<p>Matricula: <?=$alunos['Matricula']?></p>
		<p>Email: <?=$alunos['Email']?></p>
		<p>Turma: <?=$alunos['Turma']?></p>
	</section>
</article>
<?php
include 'rodape.php';
?>

