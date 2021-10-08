<div class="wraper-titulo">
				<div class="titulo-content">
					<img src="<?php echo INCLUDE_PATH_PAINEL?>img/icon-adm.png">
					<h2>Administrar Painel</h2>
				</div><!--titulo-content-->
				<div class="breadcrump">
				<a href="<?php echo INCLUDE_PATH_PAINEL?>index.php">
					<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/home.png">
					<h2>Home</h2>
				</a>
					<span>/</span>
					<img src="<?php echo INCLUDE_PATH_PAINEL?>img/icon-adm.png">
					<h2 class="active-btn">Cadastrar Produto</h2>
				</div><!--breadcrump-->
</div><!--wraper-titulo-->

<?php permissaoPagina(1)?>

<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/editar-usuario.png">
	<h2>Cadastrar Produto</h2>

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">

			<div class="form-group form-produto">
				<span class="block-span">Nome:</span>
				<input style="width:100%;" type="text" name="nome" value="" >
			</div><!--from-group-->

			<div class="form-group form-produto">
				<span class="block-span">Descrição:</span>
				<input style="width:100%;" type="text" name="descricao" value="" >
			</div><!--from-group-->

			<div class="form-group form-produto">
				<span class="block-span">Largura:</span>
				<span id="printLarg"></span>
				<input style="width:100%;" type="range" value="50" step="10" min="10" max="100" id="Larg">
			</div><!--form-group-->

			<div class="form-group form-produto">
				<span class="block-span">Altura:</span>
				<span id="printAlt"></span>
				<input style="width:100%;" type="range" value="50" step="10" min="10" max="100" id="Alt">
			</div><!--form-group-->

			<div class="form-group form-produto">
				<span class="block-span">Comprimento:</span>
				<span id="printCom"></span>
				<input style="width:100%;" type="range" value="50" step="10" min="10" max="100" id="Com">
			</div><!--form-group-->

			<div class="form-group form-produto">
				<span class="block-span">Peso:</span>
				<span id="printPes"></span>
				<input style="width:100%;" type="range" value="50" step="10" min="10" max="100" id="Pes">
			</div><!--form-group-->

			<div class="form-group form-produto">
				<span class="block-span">Imagen:</span>
				<input type="hidden" name="imagem_default" value=" ">
				<input multiple type="file" name="imagem_adicionar" id="input-img-adicionar">
				<label style="width: 150px; left: 0;" for="input-img-adicionar" name="imagem_adicionar"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->

			<div class="form-group">
				<input type="hidden" name="tipo_acao" value="cadastrar_cliente">
				<input <?php permissaoInput(1,'acao_adicionar','Cadastrar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

</div><!--box-content-->


<script>
	var slider01 = document.getElementById("Larg");
	var output01 = document.getElementById("printLarg");
	output01.innerHTML = slider01.value;

	slider01.oninput = function() {
	  output01.innerHTML = this.value;
	};

	var slider02 = document.getElementById("Alt");
	var output02 = document.getElementById("printAlt");
	output02.innerHTML = slider02.value;

	slider02.oninput = function() {
	  output02.innerHTML = this.value;
	};

	var slider03 = document.getElementById("Com");
	var output03 = document.getElementById("printCom");
	output03.innerHTML = slider03.value;

	slider03.oninput = function() {
	  output03.innerHTML = this.value;
	};

	var slider04 = document.getElementById("Pes");
	var output04 = document.getElementById("printPes");
	output04.innerHTML = slider04.value;

	slider04.oninput = function() {
	  output04.innerHTML = this.value;
	};
</script>

