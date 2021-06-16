<?php
echo '<pre>';

$entrada = $_POST["EntradaN"];
var_dump($_POST);

$entrada = array();
function ehpar($entrada) {

  if ($entrada % 2 == 0) {
    $retorno = true;
  } else {
      $retorno = false;
  }

  return $retorno;
}
 $entrada ["ehpar"]= ehpar($_POST["EntradaN"]);

 for ($i=0; $i % 2 == 0; $i++) {
   ehpar($_POST["EntradaN"]);
 }

 var_dump($entrada);

foreach ($_POST as $key => $valor) {
  echo "O numero $valor ";
   if (ehpar($valor)) {
    echo "É par";
  } else {
    echo "É Impar";
  }
  echo "<br>";
}
echo "<br>";
echo "<br>";
echo "Agora vou mostrar numeros aleatorios que são: Par ou Impar.";
echo "<br>";
for ($i=0; $i < 5; $i++) {
  $aleatorios[] = rand();
}

var_dump($aleatorios);
echo "<br>";
for ($i=0; $i % 2 == 0; $i++) {
  ehpar($_POST["EntradaN"]);
}

foreach ($aleatorios as $key => $value) {
  echo "O numero $value ";
   if (ehpar($value)) {
    echo "É par";
  } else {
    echo "é Impar";
  }
  echo "<br>";
}












 ?>
