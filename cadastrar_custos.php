<?php
require_once('./conexao.php');

$txtNomeCustos = $_POST ['txtNomeCustos'];
$tctDescricaoCustos = $_POST ['txtDescricaoCustos'];

$str_sql_cadastrar_Custos = "insert into projetos (`nome`, `descricao`) values ('$txtNomeCustos','$txtDescricaoCustos');";

try {
    $str_sql_cadastrar_Custos = mysqli_query($conexao, $str_sql_cadastrar_Custos);
    $ultimo_id = $conexao -> insert_id;
    $_SESSION['idCustos'] = $ultimo_id;
    die('idCustos: ' . $_SESSION['idCustos']);
} catch (Exception) {
    die('Não foi possível cadastrar o projeto str sql: ' . $str_sql_cadastrar_Custos);
}
?>