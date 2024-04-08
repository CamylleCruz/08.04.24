<?php
require_once('./conexao.php');

$txtNomeProdutos = $_POST ['txtNomeProdutos'];
$tctDescricaoProdutos = $_POST ['txtDescricaoProdutos'];

$str_sql_cadastrar_Produtos = "insert into projetos (`nome`, `descricao`) values ('$txtNomeProdutos','$txtDescricaoProdutos');";

try {
    $str_sql_cadastrar_Produtos = mysqli_query($conexao, $str_sql_cadastrar_Produtos);
    $ultimo_id = $conexao -> insert_id;
    $_SESSION['idProdutos'] = $ultimo_id;
    die('idProdutos: ' . $_SESSION['idProdutos']);
} catch (Exception) {
    die('Não foi possível cadastrar o projeto str sql: ' . $str_sql_cadastrar_Produtos);
}
?>