<?php
include("cabecalho.php");
include("disciplina.php");
include("professores.php");
?>
<div class='coluna10'>.</div>
<article class='coluna80'>
	<h2>Lista das Ofertas</h2>
	<?php
	$turmas = array("1info1","1info2","1info3");
	$anos = array("2017");
	foreach ($turmas as $turma) {
		foreach ($anos as $ano) {
			?>
			<section class='lista'>
				<h2> <?=$turma?> </h2>
				<ul>
					<?php
					$ofertas =  listaOfertas($turma , $ano);
					foreach ($ofertas as $oferta) {
						$professor = buscaProfessor($oferta['codprof']);
						$disciplina=buscadisciplina($oferta['coddis']);
						?>
						<li class="letra"> <a href="detalhaProfessor.php?cod=<?=$professor['Siape']?>"><?=$professor['Nome']?></a> - <?=$disciplina['Disciplina']?> </li>
						<?php
					}
					?>
				</ul>
			</section>
			<?php
		}
	}
	?>
</article>
<?php
include("rodape.php");
?>