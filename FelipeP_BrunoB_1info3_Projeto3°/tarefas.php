<?php
function listaTarefas(){
	$tarefas=array();
	$dados=file('dados/tarefas.csv');
	foreach ($dados as $posicao) {
		$colunas=explode(',', $posicao);
		if ($colunas[0]==$turma and $colunas[1]==$data){
			$tarefa=array();
			$tarefa['Turma']=$colunas[0];
			$tarefa['Data']=$colunas[1];
			$tarefa['Disciplina']=$colunas[2];
			$tarefa['Titulo']=$colunas[3];
			$tarefa['Descricao']=$colunas[4];
			$tarefas[]=$tarefa;
		} 
	}
	return $tarefas;
}

function listaTarefaTurmas($turma){
	$tarefas=array();
	$dados=file('dados/tarefas.csv');
	foreach ($dados as $posicao => $linha) {
		if ($posicao!=0) {
			$colunas=explode(",", $linha);
			$tarefa = array();
			if ($colunas[2]==$disciplina) {
				$tarefa['Turma']=$colunas[0];
				$tarefa['Data']=$colunas[1];
				$tarefa['Disciplina']=$colunas[2];
				$tarefa['Titulo']=$colunas[3];
				$tarefa['Descricao']=$colunas[4];
				$tarefas[]=$tarefa;
			}

		}
	}	
	return $alunos;
}