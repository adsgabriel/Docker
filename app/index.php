<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
<?
$a = isset($_POST["a"]) ? $_POST["a"] : '';
$b = isset($_POST["b"]) ? $_POST["b"] : '';
$sinal = isset($_POST["operacao"]) ? $_POST["operacao"] : '';
?>
<form id="formteste" name="formteste" action="" method="post">
    Valor 1: <input name="a" type="number" value="<? echo $a ?>"/><br/>
    Valor 2: <input name="b" type="number" value="<? echo $b ?>"/>
    <br/><br/>
    Selecione uma operação:<br/>
    <input name="operacao" type="radio" value="Soma" <? if($sinal == "Soma") echo "checked" ?> >Soma<br/>
    <input name="operacao" type="radio" value="Subtração" <? if($sinal == "Subtração") echo "checked" ?> >Subtração<br/>
    <input name="operacao" type="radio" value="Multiplicação" <? if($sinal == "Multiplicação") echo "checked" ?>>Multiplicação<br/>
    <input name="operacao" type="radio" value="Divisão" <? if($sinal == "Divisão") echo "checked" ?>>Divisão
    <input type="hidden" name="oculto" value="efetuar"/>
    <br/><br/>
    <input name="calcular" type="submit" value="Calcular"/>
    <br/><br/>
</form>
 
<?
if ($_POST && $_POST["oculto"] == "efetuar") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $sinal = $_POST["operacao"];
    switch ($sinal) {
        case $sinal == "Soma":
            $total = $a + $b;
            break;
        case $sinal == "Subtração":
            $total = $a - $b;
            break;
        case $sinal == "Multiplicação":
            $total = $a * $b;
            break;
        case $sinal == "Divisão":
            if($b == 0){
                $total = "Não é possível dividir por zero";
            }else {
                $total = $a / $b;
            }
            break;
    }
    echo "Valor Total da operação: " . $total;
}
?>
</body>
</html>