<?php
function conexao(){
    try {
        
        //config conexao
        $db_host = "localhost";
        $db_db = "chat";
        $db_user = "root";
        $db_pass = "";
        
        $conn = new PDO("mysql:host=$db_host;dbname=$db_db;","$db_user","$db_pass");
        
    } catch (PDOExeception $deuruim) {
        echo exit("ERROR AO CONECTAR COM O SERVIDOR (contate ao desenvolvedor)".$deuruim->getMensage());
    }
    return $conn;
}
?>
