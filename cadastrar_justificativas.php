<?php
require_once('./conexao.php');

$txtNomeJustificativas = $_POST ['txtNomeJustificativas'];
$tctDescricaoJustificativas = $_POST ['txtDescricaoJustificativas'];

$str_sql_cadastrar_Justificativas = "insert into projetos (`nome`, `descricao`) values ('$txtNomeJustificativas','$txtDescricaoJustificativas');";

try {
    $str_sql_cadastrar_Justificativas = mysqli_query($conexao, $str_sql_cadastrar_Justificativas);
    $ultimo_id = $conexao -> insert_id;
    $_SESSION['idJustificativas'] = $ultimo_id;
    die('idJustificativas: ' . $_SESSION['idJustificativas']);
} catch (Exception) {
    die('Não foi possível cadastrar o projeto str sql: ' . $str_sql_cadastrar_Justificativas);
}
?>