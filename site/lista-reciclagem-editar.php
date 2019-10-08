<?php	
	require "header.php";

	if($_POST){		

		$reciclagem_obj = new Reciclagem();		
		$editar = $reciclagem_obj->editar($_POST);

		if(!$editar){			
			//die("1");
			 echo  "<script>alert('Editado com sucesso');</script>";
			 //header("Location: lista-reciclagem.php");
		}else{		
			//die("0");	
			echo  "<script>alert('Ocorreu algum erro');</script>";
		}
	}

//para listar os dados do banco
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
					<a href="lista-reciclagem.php" class="btn_lista_salvar1">
						<button type="button" class="<?=$classe_inicio?>btn btn-danger sair btn_voltar">
							<i class="glyphicon glyphicon-circle-arrow-left"></i>
							Voltar
						</button>
					</a>					
					<a href="logout.php">
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
								<center>Editar Cadastro</center>
							</h3>
						</div>	
					</div>
					<form id="frm_editar_reciclagem" method="POST">					
					<div class="row">							
							<div class="col-sm-12">								
								<div class="form-group">
									<label for="exampleInputEmail1">NOME</label>
								    <input type="text" name="name" class="form-control" id="name"  value="<?=$reciclagem->name?>">
								    <input type="hidden" name="id" id="id" value="<?=$reciclagem->idreciclagem?>">
								</div>
							</div>
						</div>
						<div class="row">							
							<div class="col-sm-12">								
								<div class="form-group">
									<label for="exampleInputEmail1">NOME DA RUA</label>
								    <input type="text" name="nome_rua" class="form-control" id="nome_rua"  value="<?=$reciclagem->nome_rua?>">								    
								</div>
							</div>
						</div>
						<div class="row">							
							<div class="col-sm-3">															
								<div class="form-group">
									<label for="exampleInputEmail1">NÚMERO</label>
								    <input type="text" name="numero" class="form-control" id="numero"  value="<?=$reciclagem->numero?>">

								</div>								
							</div>

							<div class="col-sm-3">															
								<div class="form-group">
									<label for="exampleInputEmail1">CEP</label>
								    <input type="text" class="form-control" placeholder="CEP" id= "cep" name="CEP" value="<?=$reciclagem->CEP?>">
								</div>
							</div>							
								
							<div class="col-sm-6">		
								<div class="form-group">
									<label for="exampleInputEmail1">BAIRRO</label>
								    <input type="text" class="form-control" placeholder="BAIRRO" id= "bairro" name="bairro" value="<?=$reciclagem->bairro?>">
								</div>
							</div>
						</div>

						<div class="row">							
							<div class="col-sm-3">															
								<div class="form-group">
									<label for="exampleInputEmail1">CIDADE</label>
								    <input type="text" class="form-control" placeholder="cidade" id="cidade" name="cidade" value="<?=$reciclagem->cidade?>">
								</div>
							</div>

							<div class="col-sm-3">															
								<div class="form-group">
									<label for="exampleInputEmail1">ESTADO</label>
								    <input type="text" class="form-control" placeholder="ESTADO" id="estado" name="estado" value="<?=$reciclagem->estado?>">
								</div>
							</div>

							<div class="col-sm-3">															
								<div class="form-group">
									<label for="exampleInputEmail1">LATITUDE</label>
								    <input type="text" class="form-control" placeholder="LATITUDE" id="latitude" name="latitude" value="<?=$reciclagem->latitude?>">
								</div>
							</div>

							<div class="col-sm-3">															
								<div class="form-group">
									<label for="exampleInputEmail1">LONGITUDE</label>
								    <input type="text" class="form-control" placeholder="LONGITUDE" id="longitude" name="longitude" value="<?=$reciclagem->longitude?>">
								</div>
							</div>

						</div>

						<div class="row">							
							<div class="col-sm-6">
								<div class="form-group">
									<label for="exampleInputEmail1">FOTO</label>
								    <input  type="text" class="form-control" name="link_foto_sit_lixo" value="<?=$reciclagem->link_foto_sit_lixo?>">
								</div>
							</div>
						
							<div class="col-sm-6">
								<div class="form-group">
									<label for="exampleInputEmail1">COMENTÁRIO</label>
								    <input type="text" class="form-control" name="comentario" value="<?=$reciclagem->comentario?>">
								</div>
							</div>
						</div>
			
						<div class="row">
							<div class="col-sm-12">
								<a href="javascript:;" class="btn_lista_salvar1 pull-right">
									<button type="button" class="btn btn-success btn_lista_salvar1">
										<i class="glyphicon glyphicon-floppy-disk"></i>
										SALVAR
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
	$('.btn_lista_salvar1').click(function(){
		document.getElementById('frm_editar_reciclagem').submit();
	});
</script>

<script type="text/javascript">
	$('#cep').mask('00.000-000');
</script>

</body>

</html>