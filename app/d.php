<?php
include("config.php");
$conn = conexao();

if (isset($_GET["delete"])) {
    $dell = $conn->query("DELETE FROM msg");
    $dell_num = $dell->rowCount();

    if ($dell_num == 1) {
        echo "Menssagens deletadas!!!!";
    }else {
        echo "Nenhuma Menssagem deletada";
    }
}

?>
