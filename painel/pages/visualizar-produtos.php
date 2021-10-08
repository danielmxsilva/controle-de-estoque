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
		<a href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-produto">
			<span>/</span>
			<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/listar.png">
			<h2>Cadastrar Produto</h2>
		</a>
			<span>/</span>
			<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/lapis.png">
			<h2 class="active-btn">Visualizar Produtos</h2>
		</div><!--breadcrump-->
</div><!--wraper-titulo-->

<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/listar.png">
	<h2>Produtos Cadastrados</h2>

	<div class="busca">
		<h2>Realizar uma busca</h2>
		<form method="post">
			<input type="text" name="busca" placeholder="Procure por nome">
			<input type="submit" name="acao" value="Buscar">
		</form>
	</div><!--busca-->

	<div class="box-wraper">

		<?php
			for($i = 0; $i < 6; $i++){
		?>

		<div class="box-single-wraper">

			<div class="box-single">

				<div class="box-topo">
					<img style="width: 50%;height: auto;border-radius: unset;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/60f71fb1acd72.jpg">
				</div><!--box-topo-->

				<div class="box-corpo">
					<p><b>Nome:</b> Camiseta Top demais</p>
					<p><b>Descrição:</b> Camiseta top top</p>
					<p><b>Largura:</b> 10</p>
					<p><b>Altura:</b> 10</p>
					<p><b>Comprimento:</b> 100</p>
					<p><b>Peso:</b> 10</p>
					<form class="form-quantity">
						<p><b>Quantidade Atual:</b> <input type="number" value="10" name="quantidade" max="999" min="0" step="1"></p>
						<input type="submit" name="quantidade_atual" value="Atualizar">
					</form>
				</div><!--box-corpo-->

				<div class="box-btn">

					<a href="<?php echo INCLUDE_PATH_PAINEL?>editar-clientes?id=<?php echo $value['id']?>"><img src="img/editar-depoimento-verde.png">Editar
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

		<?php } ?>

		<div class="clear"></div><!--clear-->

	</div><!--box-wraper-->

</div><!--box-content-->

