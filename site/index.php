<?php

	require "header.php";

	if($_POST){
		// print_r($_POST); die;

		$reciclagem = new Reciclagem();
		$id_reciclagem = $reciclagem->cadastrar($_POST);

		if($id_reciclagem){		
			//die("1");
			 echo  "<script>alert('Cadastrado com sucesso');</script>";			 
		}else{		
			//die("0");	
			echo  "<script>alert('Ocorreu algum erro');</script>";
		}
	}

	if($_GET){
		$reciclagem_obj = new Reciclagem();		
		$reciclagem = $reciclagem_obj->buscar_por_id($_GET['id']);

		if(!$reciclagem)
			header("Location: lista-reciclagem.php");		
	}

?>

<body>

<link rel="stylesheet" type="text/css" href="assets/select2/select2.min.css">
	<div class="container">
		<div class="logo">
			<div class="row">
				<div class="col-sm-8">
					<img src="assets/imagens/logo.png" alt="" />
				</div>
				<div class="col-sm-3">					
					<a href="lista-reciclagem.php">
						<button type="button" class="btn btn-danger sair btn_lista_reciclagem">
							<i class="glyphicon glyphicon-list"></i>
							Listar locais de Reciclagem
						</button>
					</a>				
					<a href="sistema_ct.php">
						<button type="button" class="<?=$classe_inicio?>btn btn-danger sair btn_voltar">
							<i class="glyphicon glyphicon-circle-arrow-left"></i>
							Voltar
						</button>
					</a>						
					<a href="<?=url_sair?>">
						<button type="button" class="btn btn-danger sair pull-right">
							<i class="glyphicon glyphicon-remove"></i>
							Sair
						</button>
					</a>
				</div>
			</div>
		</div>

		<div class="form_cadastro">	
			<div class="row">				
				<div class="col-sm-12">					
					<div class="row">
						<div class="col-sm-4 col-sm-offset-4">
							<h3>
								<center>CADASTRO</center>
							</h3>
						</div>	
					</div>
					<form id="frm_novo_reciclagem"  name="form_validar" method="post">
						<div class="row">							
							<div class="col-sm-12">		
								<div class="form-group">
									<label for="exampleInputEmail1">NOME DA RUA</label>
								    <input type="text" class="form-control" placeholder="O NOME DA RUA AQUI" name="nome_rua">								   
								</div>
							</div>
						</div>
						<div class="row">							
							<div class="col-sm-3">															
								<div class="form-group">
									<label for="exampleInputEmail1">NÚMERO</label>
								    <input type="text" class="form-control" id="numero" placeholder="9999999" name="numero">
								</div>								
							</div>

							<div class="col-sm-3">															
								<div class="form-group">
									<label for="exampleInputEmail1">CEP</label>
								    <input type="text" class="form-control" id="cep" placeholder="CEP" name="CEP">
								</div>
							</div>							
								
							<div class="col-sm-6">		
								<div class="form-group">
									<label for="exampleInputEmail1">BAIRRO</label>
								    <input type="text" class="form-control" id="bairro" placeholder="BAIRRO" name="bairro">
								</div>
							</div>
						</div>

						<div class="row">							
							<div class="col-sm-3">															
								<div class="form-group">
									<label for="exampleInputEmail1">CIDADE</label>
								    <input type="text" class="form-control" id="cidade" placeholder="cidade" name="cidade">
								</div>
							</div>

							<div class="col-sm-3">															
								<div class="form-group">
									<label for="exampleInputEmail1">ESTADO</label>
								    <input type="text" class="form-control" id="estado" placeholder="estado" name="estado">
								</div>
							</div>

							<div class="col-sm-3">															
								<div class="form-group">
									<label for="exampleInputEmail1">LATITUDE</label>
								    <input type="text" class="form-control" id="latitude" placeholder="LATITUDE" name="latitude">
								</div>
							</div>

							<div class="col-sm-3">															
								<div class="form-group">
									<label for="exampleInputEmail1">LONGITUDE</label>
								    <input type="text" class="form-control" id="longitude" placeholder="LONGITUDE" name="longitude">
								</div>
							</div>

						</div>					

						<div class="row">	

							<div class="col-sm-6">															
								<div class="form-group">
									<label for="exampleInputEmail1">FOTO</label>
								    <input type="text" class="form-control" id="link_foto_sit_lixo" name="link_foto_sit_lixo">
								</div>
							</div>							

							<div class="col-sm-6">															
								<div class="form-group">
									<label for="exampleInputEmail1">COMENTÁRIO</label>
								    <input type="text" class="form-control" id="comentario" placeholder="COMENTÁRIO" name="comentario">
								</div>
							</div>
						</div>										

						<div class="row">
							<div class="col-sm-6">								
								<a href="javascript:;" id="btn_limpar">
									<button type="button" class="btn btn-danger btn_limpar">
										<i class="glyphicon glyphicon-share-alt"></i>
										LIMPAR
									</button>
								</a>					
							</div>

							<div class="col-sm-6">
								<a href="javascript:;" id="btn_cadastrar">
									<button type="button" class="btn btn-success btn_cadastrar pull-right">
										<i class="glyphicon glyphicon-floppy-saved"></i>
										CADASTRAR
									</button>
								</a>					
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
	$('.btn_cadastrar').click(function(){

	//validar se os campos estão preenchidos ou não
	var nome_rua = form_validar.nome_rua.value;
 
      if (nome_rua == "") {
        alert('Preencha o campo com o nome da rua');
          form_validar.nome_rua.focus();
          return false;
       }
		document.getElementById('frm_novo_reciclagem').submit();
	});

	$('.btn_limpar').click(function(){
		document.getElementById('frm_novo_reciclagem').reset();
	});
</script>

<script type="text/javascript">
	$('#cep').mask('00.000-000');	
</script>

</body>

</html>