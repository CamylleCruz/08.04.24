<?php
require_once('./conexao.php');

$txtNomeEquipes = $_POST ['txtNomeEquipes'];
$tctDescricaoEquipes = $_POST ['txtDescricaoEquipes'];

$str_sql_cadastrar_Equipes = "insert into projetos (`nome`, `descricao`) values ('$txtNomeEquipes','$txtDescricaoEquipes');";

try {
    $str_sql_cadastrar_Equipes = mysqli_query($conexao, $str_sql_cadastrar_Equipes);
    $ultimo_id = $conexao -> insert_id;
    $_SESSION['idEquipes'] = $ultimo_id;
    die('idEquipes: ' . $_SESSION['idEquipes']);
} catch (Exception) {
    die('Não foi possível cadastrar o projeto str sql: ' . $str_sql_cadastrar_Equipes);
}
?>