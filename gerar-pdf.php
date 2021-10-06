<?php

	ob_start();
	include("templateFinanceiro.php");
	$conteudo = ob_get_contents();
	ob_end_clean();

	//echo $conteudo;

	$mpdf = new mPDF();
	$mpdf->WriteHTML($conteudo);
	$mpdf->Output();

?>
