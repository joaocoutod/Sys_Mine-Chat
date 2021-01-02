<?php
function conexao(){
    try {
        
        //mysql local
        /*
        $db_host = "localhost";
        $db_db = "chat";
        $db_user = "root";
        $db_pass = "";
        */
        
        $db_host = "localhost";
        $db_db = "id15813679_chat";
        $db_user = "id15813679_chatadm";
        $db_pass = "n8{?u@jd?Z>[Psp9";

        $conn = new PDO("mysql:host=$db_host;dbname=$db_db;","$db_user","$db_pass");
        
    } catch (PDOExeception $deuruim) {
        echo exit("Desculpe: ERROR AO CONECTAR COM O SERVIDOR (contate ao desenvolvedor)".$deuruim->getMensage());
    }
    return $conn;
}
?>