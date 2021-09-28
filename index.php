<?php
	
	//Conexao com a base de dados
	$conn = new mysqli('localhost', 'root', '', 'db_cadastro');

	//Veruficar se existe um erro de conexao
	if ($conn -> connect_error) {
		exit("Erro: {$conn->connect_error}");
	}

	//Deletar/Delete
	$sql = "delete from tbl_clientes where id>5 ";
	$conn -> query($sql);


	//Actualizar/Update
	$sql = "update tbl_clientes set nome = 'Fernando Gomes' where id='1'";
	$conn ->query($sql);


	//Insert/Inserir
	$sql = "insert into tbl_clientes (nome, email, cidade, estado) values ('Ana', 'ana@gmail.com', 'Tete', 'TE')";
	$conn -> query($sql);



	//Ler
	$sql = "select * from tbl_clientes";
	$result = $conn -> query($sql);

	//Listar os dados na tela
	//Verificar se a tabela possui uma linha
	if ($result -> num_rows) {
		while ($cliente = $result -> fetch_object()) {
			echo $cliente -> id." - ".$cliente -> nome."<br>";
			//echo ;
		}
	} else {
		//caso nao tenha alguma linha
		echo "Nenhum cliente encomtrado";
	}
	

	





?>