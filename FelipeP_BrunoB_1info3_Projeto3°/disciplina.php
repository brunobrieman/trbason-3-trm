<?php
function listaOfertas($turma, $ano){
	$disciplas=array();
	$dados=file('dados/ofertas.csv');
	foreach ($dados as $posicao) {
		$colunas=explode(',', $posicao);
		if ($colunas[0]==$ano and $colunas[1]==$turma) {
			$discipla=array();
			$discipla['Ano']=$colunas[0];
			$discipla['Turma']=$colunas[1];
			$discipla['coddis']=$colunas[2];
			$discipla['codprof']=$colunas[3];
			$disciplas[]=$discipla;
		}
	}
	return $disciplas;
}

function buscadisciplina($codigo){
	$disciplina=array();
	$dados=file("dados/disciplinas.csv");
	foreach ($dados as $linha) {
		$colunas=explode(",", $linha);
		if ($codigo==$colunas[0]) {
			$disciplina['Disciplina']=$colunas[1];
		}
	}
	return $disciplina;	
}
?>