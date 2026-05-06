<?php 
	$nome = $_POST['nome'];
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];
	$imc = $imc = $peso/($altura*$altura);
	$class;

	if ($imc < 18.5 ) {
		$class = "Magreza";
	}elseif($imc > 18.5 && $imc <24.9){
		$class = "Peso Ideal";
	}elseif($imc > 25 && $imc <29.9){
		$class = "Sobrepeso";
	}elseif($imc > 30 && $imc <39.9){
		$class = "Obesidade";
	}else{
		$class = "Obesidade Grave";
	}

	echo "Olá $nome! <br> Peso inserido: $peso <br> Altura inserida: $altura <br> IMC: $imc <br> Classifição do IMC: $class";
 ?>