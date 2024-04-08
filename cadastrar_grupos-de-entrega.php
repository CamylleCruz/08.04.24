<?php
require_once('./conexao.php');

$txtNomeGruposDeEntrega = $_POST ['txtNomeGruposDeEntrega'];
$tctDescricaoGruposDeEntrega = $_POST ['txtDescricaoGruposDeEntrega'];

$str_sql_cadastrar_GruposDeEntrega = "insert into projetos (`nome`, `descricao`) values ('$txtNomeGruposDeEntrega','$txtDescricaoGruposDeEntrega');";

try {
    $str_sql_cadastrar_GruposDeEntrega = mysqli_query($conexao, $str_sql_cadastrar_GruposDeEntrega);
    $ultimo_id = $conexao -> insert_id;
    $_SESSION['idGruposDeEntrega'] = $ultimo_id;
    die('idGruposDeEntrega: ' . $_SESSION['idGruposDeEntrega']);
} catch (Exception) {
    die('Não foi possível cadastrar o projeto str sql: ' . $str_sql_cadastrar_GruposDeEntrega);
}
?>