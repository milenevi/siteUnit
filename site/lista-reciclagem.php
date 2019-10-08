<?php
	require "header.php";	
?>

<body>
	<div class="container">
		<div class="logo">
			<div class="row">
				<div class="col-sm-8">
					<img src="assets/imagens/logo.png" alt="" />
				</div>
				<div class="col-sm-4">					
					<a href="index.php">
						<button type="button" class="btn btn-danger sair btn_lista_reciclagem_voltar">
							<i class="glyphicon glyphicon-circle-arrow-left"></i>
							voltar
						</button>
					</a>					
					<a href="index.php">
						<button type="button" class="<?=$classe_inicio?>btn btn-danger sair btn_inicio">
							 <i class="glyphicon glyphicon-home"></i>
							Início
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

		<div class="lista">
			<div class="row">				
				<div class="col-sm-10 col-sm-offset-1">	
					<h3>
						<center>Lista de pontos para Reciclagem</center>
					</h3>							
					<table class="table table-bordered">
						<thead>
					    	<tr>
					          <th>Código</th>
					          <th>Nome</th>
					          <th>Nome Rua</th>
					          <th>Ações</th>
					        </tr>
					    </thead>
					    <tbody>
					    <?php 
							    $reciclagem = new Reciclagem();
			    				$reciclagem =  $reciclagem->buscar_todos();

			    				foreach ($reciclagem as $key => $value):
					     ?>

					        <tr id="reciclagem-<?=$value['idreciclagem']?>">
					          	<th width="5%" scope="row"><?=$value['idreciclagem']?></th>
					          	<td width="35%"><?=$value['name']?></td>
					          	<td width="30%"><?=$value['nome_rua']?></td>
					          	<td width="25%">
					          		<a href="lista-reciclagem-editar.php?id=<?=$value['idreciclagem']?>">
					          			<button type="submit" name="submit" value="edit" class="btn btn-success">
					          				<i class="glyphicon glyphicon-pencil"></i>
					          				Editar
					          			</button>
					          		</a>
					          		&nbsp; &nbsp; &nbsp;					          		
				          			<button type="button" class="btn btn-danger btnRemover" data-id="<?=$value['idreciclagem']?>">
				          				<i class="glyphicon glyphicon-trash"></i>
				           				Remover
				          			</button>					          		
					        	</td>
					        </tr>

					    <?php  
					    	endforeach
					    ?>

					    </tbody>
					</table>
				</div>
			</div>
		</div>

	</div>

<script type="text/javascript">
	$('.btnRemover').click(function(){
		id = $(this).attr('data-id');

		var confirmar = confirm("Deseja mesmo remover?");
		if(confirmar){
			$.post("lista-reciclagem-remover.php", {idreciclagem: id}).done(function(data){
				if(data === 1 || data === "1"){
					alert("Ponto da recliclagem removido!");
					
					// remover a linha da tabela.
					$('#reciclagem-'+id).remove();
				}else{
					alert("Falha ao remover!" + data);
				}
			});
		}
	});
</script>

</body> 