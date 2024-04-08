<?php
require_once('./conexao.php');

$txtNomePremissas = $_POST ['txtNomePremissas'];
$tctDescricaoPremissas = $_POST ['txtDescricaoPremissas'];

$str_sql_cadastrar_Premissas = "insert into projetos (`nome`, `descricao`) values ('$txtNomePremissas','$txtDescricaoPremissas');";

try {
    $str_sql_cadastrar_Premissas = mysqli_query($conexao, $str_sql_cadastrar_Premissas);
    $ultimo_id = $conexao -> insert_id;
    $_SESSION['idPremissas'] = $ultimo_id;
    die('idPremissas: ' . $_SESSION['idPremissas']);
} catch (Exception) {
    die('Não foi possível cadastrar o projeto str sql: ' . $str_sql_cadastrar_Premissas);
}
?>