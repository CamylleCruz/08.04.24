<?php
require_once('./conexao.php');

$txtNomeLinhasDoTempo = $_POST ['txtNomeLinhasDoTempo'];
$tctDescricaoLinhasDoTempo = $_POST ['txtDescricaoLinhasDoTempo'];

$str_sql_cadastrar_LinhasDoTempo = "insert into projetos (`nome`, `descricao`) values ('$txtNomeLinhasDoTempo','$txtDescricaoLinhasDoTempo');";

try {
    $str_sql_cadastrar_LinhasDoTempo = mysqli_query($conexao, $str_sql_cadastrar_LinhasDoTempo);
    $ultimo_id = $conexao -> insert_id;
    $_SESSION['idLinhasDoTempo'] = $ultimo_id;
    die('idLinhasDoTempo: ' . $_SESSION['idLinhasDoTempo']);
} catch (Exception) {
    die('Não foi possível cadastrar o projeto str sql: ' . $str_sql_cadastrar_LinhasDoTempo);
}
?>