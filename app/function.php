<?php
include("config.php");
$conn = conexao();



/************
* 
* Insere uma nova menssagem
*
*/
if (isset($_GET["insere"])) {
    $nome = htmlspecialchars($_POST["nome"]);
    $msg = htmlspecialchars($_POST["msg"]);

    //qry
    $insere = $conn->query("INSERT INTO msg(nome, menssagem) VALUES('$nome','$msg')");
}



/************
* 
* Busca todas as menssagens
*
*/
if (isset($_GET["msgs"])) {

    //busca todas as menssagens
    $get_msgs = $conn->query("SELECT * FROM msg");

    //conta a quantidade de menssagens
    $num_msgs = $get_msgs->rowCount();

    //busca todas as menssagens em ordem decrecente 
    $get_msg_dec = $conn->query("SELECT * FROM msg order by id desc");

    //Verifica se tem menssagens para mostrar 
    if ($num_msgs != 0) {
        echo '<div class="form-floating" id="msgbody"><div class="my-3 p-1 text-left border border-while border-3">';
        while ($linha = $get_msg_dec->fetch(PDO::FETCH_ASSOC)) {
            $nick = $linha["nome"];
            $ms = $linha["menssagem"];
            echo '<p><b class="text-primary">'.$nick.': </b>'.$ms.'</p>';
        }
        echo '</div></div>';
    }else {
        echo '
        <div class="form-floating">
            Nenhuma menssagem.
        </div>
        ';
    }
}



/************
* 
* Deletar todas as menssagens
*
*/
if (isset($_GET["delete"])) {
    $dell = $conn->query("DELETE FROM msg");
}
?>