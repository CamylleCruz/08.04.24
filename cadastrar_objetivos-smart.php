<?php
require_once('./conexao.php');

$txtNomeObjetivosSmart = $_POST ['txtNomeObjetivosSmart'];
$tctDescricaoObjetivosSmart = $_POST ['txtDescricaoObjetivosSmart'];

$str_sql_cadastrar_ObjetivosSmart = "insert into projetos (`nome`, `descricao`) values ('$txtNomeObjetivosSmart','$txtDescricaoObjetivosSmart');";

try {
    $str_sql_cadastrar_ObjetivosSmart = mysqli_query($conexao, $str_sql_cadastrar_ObjetivosSmart);
    $ultimo_id = $conexao -> insert_id;
    $_SESSION['idObjetivosSmart'] = $ultimo_id;
    die('idObjetivosSmart: ' . $_SESSION['idObjetivosSmart']);
} catch (Exception) {
    die('Não foi possível cadastrar o projeto str sql: ' . $str_sql_cadastrar_ObjetivosSmart);
}
?>