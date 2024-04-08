<?php
require_once('./conexao.php');

$txtNomeStakeholders = $_POST ['txtNomeStakeholders'];
$tctDescricaoStakeholders = $_POST ['txtDescricaoStakeholders'];

$str_sql_cadastrar_Stakeholders = "insert into projetos (`nome`, `descricao`) values ('$txtNomeStakeholders','$txtDescricaoStakeholders');";

try {
    $str_sql_cadastrar_Stakeholders = mysqli_query($conexao, $str_sql_cadastrar_Stakeholders);
    $ultimo_id = $conexao -> insert_id;
    $_SESSION['idStakeholders'] = $ultimo_id;
    die('idStakeholders: ' . $_SESSION['idStakeholders']);
} catch (Exception) {
    die('Não foi possível cadastrar o projeto str sql: ' . $str_sql_cadastrar_Stakeholders);
}
?>