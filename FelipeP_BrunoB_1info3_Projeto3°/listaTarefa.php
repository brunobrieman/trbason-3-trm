<?php
include 'cabecalho.php';
include 'tarefas.php';
?>
<div class="coluna10">.</div>
<article class="coluna80">
	<h1>Todas as Tarefas</h1>
	<?php
	$turmas=array('1info1','1info2','1info3');
	foreach ($turmas as $turma) {
		?>
		<section class="lista">
			<div class="sala">
				<h2><?=$turma?></h2>
			</div>
			<ul>
				<?php
				$tarefas=listaTarefaTurmas($turma);
				foreach ($tarefas as $tarefa) {
					?>
					<li class="letra"><?=$tarefa['Data']?></li>
					<li class="letra"><?=$tarefa['Disciplina']?></li>
					<li class="letra"><?=$tarefa['Titulo']?></li>
					<li class="letra"><?=$tarefa['Descricao']?></li>
					<?php
				}
				?>
			</ul>
		</section>
		<?php
	}
	?>
</article>
