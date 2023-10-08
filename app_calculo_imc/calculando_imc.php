<?php
session_start();

class CalcularMassaCorporal {
  public function __construct(public float $peso = 0, public float $altura = 0) {}
  function processar() {
   return $this->peso / ($this->altura * $this->altura);
  }
}

$c = new CalcularMassaCorporal(peso: $_POST['peso'], altura: $_POST['altura']);
if ($_POST['gridRadios'] == "adulto") {
    $retornoResultado = match (true) {
        $c->processar() <= 18.5 => "Abaixo do peso",
        $c->processar() <= 24.9 => "peso ideal (parabéns)",
        $c->processar() <= 29.9 => "Levemente acima do peso",
        $c->processar() <= 34.9 => "Obesidade grau I",
        $c->processar() <= 39.9 => "Obesidade grau II (severa)",
        $c->processar() >= 40.0 => "Obesidade grau III (mórbida)",
    };
} elseif ($_POST['gridRadios'] == "idoso") {
    $retornoResultado = match (true) {
        $c->processar() <= 21.9 => "Abaixo do peso",
        $c->processar() <= 26.9 => "Peso ideal (parabéns)",
        $c->processar() <= 30.0 => "Sobrepeso",
        $c->processar() >= 30.1 => "Obesidade",
     };
}
$_SESSION['peso'] = $c->peso;
$_SESSION['altura'] = $c->altura;
$_SESSION['imc'] = $c->processar();
$_SESSION['situacao'] = $retornoResultado;
header('Location: index.php');


 
?>