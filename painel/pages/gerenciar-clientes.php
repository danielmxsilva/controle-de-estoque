<div class="wraper-titulo">
		<div class="titulo-content">
			<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/notebook.png">
			<h2>Painel de Controle</h2>
		</div><!--titulo-content-->
		<div class="breadcrump">
		<a href="<?php echo INCLUDE_PATH_PAINEL?>index.php">
			<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/home.png">
			<h2>Home</h2>
		</a>
		<a href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-clientes">
			<span>/</span>
			<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/listar.png">
			<h2>Cadastrar Clientes</h2>
		</a>
			<span>/</span>
			<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/lapis.png">
			<h2 class="active-btn">Listar Clientes</h2>
		</div><!--breadcrump-->
</div><!--wraper-titulo-->

<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/listar.png">
	<h2>Clientes Cadastrados</h2>

	<div class="box-wraper">

		<?php
		$clientes = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.clientes`");
		$clientes->execute();
		$clientes = $clientes->fetchAll();
		foreach($clientes as $value){
		?>

		<div class="box-single-wraper">

			<div class="box-single">

				<div class="box-topo">
					<?php
					if($value['foto'] == ''){
					?>
						<img src="<?php echo INCLUDE_PATH_PAINEL?>img/icone-user.png">
					<?php }else{ ?>
						<img src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $value['foto']?>">
					<?php }?>
				</div><!--box-topo-->

				<div class="box-corpo">
					<p><b>Nome:</b> <?php echo $value['nome']?></p>
					<p><b>E-mail:</b> <?php echo $value['email']?></p>
					<p><b>Tipo:</b> <?php echo ucfirst($value['tipo'])?></p>
					<p><b><?php
							  if($value['tipo'] == 'fisico')
								  echo 'CPF: ';
							  else
								  echo 'CNPJ: ';
							?></b> <?php echo $value['cpf_cnpj'];?></p>
				</div><!--box-corpo-->

				<div class="box-btn">

					<a href=""><img src="img/editar-depoimento-verde.png">Editar
					</a>

					<a <?php
							if($_SESSION['cargo'] >= 1){
						  ?>
						   class="btn-delete" item_id="<?php echo $value['id']?>" href=""
						  <?php }else{ ?> 
						  	actionBtn="negado" href="#"
						  <?php } ?>
						  ><img src='img/excluir-depoimento-red.png'>Deletar
					</a>

				</div><!--box-btn-->

			</div><!--box-single-->

		</div><!--box-single-wraper-->

		<?php
 		}
		?>

		<div class="clear"></div><!--clear-->

	</div><!--box-wraper-->

</div><!--box-content-->

