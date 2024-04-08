<?php
require_once('./conexao.php');

$txtNomeRestricoes = $_POST ['txtNomeRestricoes'];
$tctDescricaoRestricoes = $_POST ['txtDescricaoRestricoes'];

$str_sql_cadastrar_Restricoes = "insert into projetos (`nome`, `descricao`) values ('$txtNomeRestricoes','$txtDescricaoRestricoes');";

try {
    $str_sql_cadastrar_Restricoes = mysqli_query($conexao, $str_sql_cadastrar_Restricoes);
    $ultimo_id = $conexao -> insert_id;
    $_SESSION['idRestricoes'] = $ultimo_id;
    die('idRestricoes: ' . $_SESSION['idRestricoes']);
} catch (Exception) {
    die('Não foi possível cadastrar o projeto str sql: ' . $str_sql_cadastrar_Restricoes);
}
?>