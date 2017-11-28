<?php
function listaAlunos(){
	$alunos=array();
	$dados=file("dados/alunos.csv");
	foreach ($dados as $linha) {
		$colunas=explode(",", $linha);
		$aluno['Matricula']=$colunas[0];
		$aluno['Nome']=$colunas[1];
 		$aluno['Turma']=$colunas[2];
		$aluno['Email']=$colunas[3];
		$aluno['foto']=$colunas[4];

		$alunos[]=$aluno;
	}
	return $alunos;
}
	function buscaAluno($Matricula){
	$alunos=array();
	$dados=file("dados/alunos.csv");
	foreach ($dados as $linha) {
		$colunas=explode(",", $linha);
		if ($colunas[0]==$Matricula) {
			$alunos['Matricula']=$colunas[0];
			$alunos['Nome']=$colunas[1];
			$alunos['Turma']=$colunas[2];
			$alunos['Email']=$colunas[3];
			$alunos['Foto']=$colunas[4];
		}
	}
	return $alunos;	
}


function ListaAlunosTurma($turma){
	$alunos=array();
	$dados=file("dados/alunos.csv");

	foreach ($dados as $posicao=>$linha) {
			if ($posicao!=0) {
				$colunas=explode(",", $linha);
				$aluno = array();
				if ($colunas[2]== $turma) {
					$aluno['Matricula']=$colunas[0];
					$aluno['Nome']=$colunas[1];
					$aluno['Turma']=$colunas[2];
					$aluno['Email']=$colunas[3];
					$aluno['Foto']=$colunas[4];
					$alunos[]=$aluno;
			}

		}
	}	
	return $alunos;
}



	

?>