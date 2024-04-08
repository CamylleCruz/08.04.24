<?php
require_once('./conexao.php');

$txtNomeRequisitos = $_POST ['txtNomeRequisitos'];
$tctDescricaoRequisitos = $_POST ['txtDescricaoRequisitos'];

$str_sql_cadastrar_Requisitos = "insert into projetos (`nome`, `descricao`) values ('$txtNomeRequisitos','$txtDescricaoRequisitos');";

try {
    $str_sql_cadastrar_Requisitos = mysqli_query($conexao, $str_sql_cadastrar_Requisitos);
    $ultimo_id = $conexao -> insert_id;
    $_SESSION['idRequisitos'] = $ultimo_id;
    die('idRequisitos: ' . $_SESSION['idRequisitos']);
} catch (Exception) {
    die('Não foi possível cadastrar o projeto str sql: ' . $str_sql_cadastrar_Requisitos);
}
?>