<?php
$entrada = $_POST;
echo "como a raiz de 384 é quebrada, então o numero fica o mesmo";

function multiplicacao($ax,$bx²,$c)
{
    return  -4 * $ax * $c;
  }
  function expoenciacao($ax,$bx²,$c) {
    return $bx² ** 2 ;
  }
  function delta($ax,$bx²,$c) {
    return 64 + 320;
  }
  function raiz($ax,$bx²,$c) {
    return sqrt(384) ;
  }
  function x1($ax,$bx²,$c) {
    return (-12 + 320) /2 ;
  }
  function x2($ax,$bx²,$c) {
  return  (-12 - 320) /2 ;
  }

$resultados = array();
$resultados["expoenciacao"] = expoenciacao($entrada["EntradaA"], $entrada["EntradaB"], $entrada["EntradaC"] );
$resultados["multiplicacao"] = multiplicacao($entrada["EntradaA"], $entrada["EntradaB"], $entrada["EntradaC"] );
$resultados["delta"] = delta($entrada["EntradaA"], $entrada["EntradaB"], $entrada["EntradaC"] );
$resultados["raiz"] = raiz($entrada["EntradaA"], $entrada["EntradaB"], $entrada["EntradaC"] );
$resultados["x1"] = x1($entrada["EntradaA"], $entrada["EntradaB"], $entrada["EntradaC"] );
$resultados["x2"] = x2($entrada["EntradaA"], $entrada["EntradaB"], $entrada["EntradaC"] );

echo "<pre>";
var_dump($resultados);
echo "<br>";


 ?>
