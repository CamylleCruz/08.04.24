<?php
require_once('./conexao.php');

$txtNomeRiscos = $_POST ['txtNomeRiscos'];
$tctDescricaoRiscos = $_POST ['txtDescricaoRiscos'];

$str_sql_cadastrar_Riscos = "insert into projetos (`nome`, `descricao`) values ('$txtNomeRiscos','$txtDescricaoRiscos');";

try {
    $str_sql_cadastrar_Riscos = mysqli_query($conexao, $str_sql_cadastrar_Riscos);
    $ultimo_id = $conexao -> insert_id;
    $_SESSION['idRiscos'] = $ultimo_id;
    die('idRiscos: ' . $_SESSION['idRiscos']);
} catch (Exception) {
    die('Não foi possível cadastrar o projeto str sql: ' . $str_sql_cadastrar_Riscos);
}
?>