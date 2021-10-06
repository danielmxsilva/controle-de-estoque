<?php
	include("config.php");
?>

<style type="text/css">
	.box-content{
		width: 900px;
		margin: 0 auto;
		border: 1px solid gray;
	}
	.header{
		padding: 15px;
		background-color: darkslategray;
		color: white;
	}
	tbody td,thead th{
		padding: 5px;
		border: 1px solid gray;
	}
	thead th{
		font-size: 18px;
	}
</style>

<div class="box-content">
	<div class="header">
		<?php
		$tipo = (isset($_GET['pagamentos']) && $_GET['pagamentos'] == 'concluidos') ? 'Concluidos' : 'Pendentes';
		?>
		<h2>Pagamentos <?php echo $tipo?></h2>
	</div><!--header-->

	<div class="table-wraper">
		<table style="width:900px;text-align: left;border-collapse: collapse;">
			<thead class="titulo-tabela">
				<th>Nome do Pagamento</th>
				<th>Cliente</th>
				<th>Valor</th>
				<th>Vencimento</th>
			</thead>

			
			<?php
			
				if($tipo == 'Pendentes'){
					$tipo = 0;
				}else{
					$tipo = 1;
				}

				$sql = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.financeiro` WHERE status = $tipo");	

				$sql->execute();
				$pendentes = $sql->fetchAll();
				foreach($pendentes as $key => $value) {
					$nomeCliente = Mysql::conectar()->prepare("SELECT `nome` FROM `tb_admin.clientes` WHERE id = $value[cliente_id]");
					$nomeCliente->execute();
					$nomeCliente = $nomeCliente->fetch()['nome'];
					$style = "";
				if(strtotime(date('Y-m-d')) >= strtotime($value['vencimento'])){
					$style = 'style="background-color:#bf360c;color:white;font-weight:bold;"';
				}
			?>

			<?php
			/*
				$query = "";
				if(isset($_POST['acao'])){
					$busca = $_POST['busca'];
					$query = "WHERE nome LIKE '%$busca%' OR valor LIKE '%$busca%' ";
				}
				$clientes = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.financeiro` $query");
				$clientes->execute();
				$clientes = $clientes->fetchAll();
				if(isset($_POST['acao'])){
					echo '<div class="cliente-result">Foram encontrados <b>'.count($clientes).'</b> resultado(s)</div>';
				}
				foreach($clientes as $value){
					$nomeCliente = Mysql::conectar()->prepare("SELECT `nome` FROM `tb_admin.clientes` WHERE id = $value[cliente_id]");
					$nomeCliente->execute();
					$nomeCliente = $nomeCliente->fetch()['nome'];
				}
				*/
			?>
			<tbody <?php echo $style;?>>		
				<td><?php echo $value['nome']; ?></td>
				<td><?php echo $nomeCliente; ?></td>
				<td><?php echo $value['valor']; ?></td>
				<td><?php echo date('d/m/Y',strtotime($value['vencimento'])); ?></td>
			</tbody>
			<?php }?>	
			

		</table>
	</div><!--table-wraper-->

</div><!--box-content-->