<?php
require_once('./conexao.php');

$txtNomeBeneficios = $_POST ['txtNomeBeneficios'];
$tctDescricaoBeneficios = $_POST ['txtDescricaoBeneficios'];

$str_sql_cadastrar_beneficios = "insert into projetos (`nome`, `descricao`) values ('$txtNomeBeneficios','$txtDescricaoBeneficios');";

try {
    $str_sql_cadastrar_beneficios = mysqli_query($conexao, $str_sql_cadastrar_beneficios);
    $ultimo_id = $conexao -> insert_id;
    $_SESSION['idBeneficios'] = $ultimo_id;
    die('idBeneficios: ' . $_SESSION['idBeneficios']);
} catch (Exception) {
    die('Não foi possível cadastrar o projeto str sql: ' . $str_sql_cadastrar_beneficios);
}
?>