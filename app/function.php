<?php
include("config.php");
$conn = conexao();

if (isset($_GET["insere"])) {
    $nome = htmlspecialchars($_POST["nome"]);
    $msg = htmlspecialchars($_POST["msg"]);

    $insere = $conn->query("INSERT INTO msg(nome, menssagem) VALUES('$nome','$msg')");
}

if (isset($_GET["msgs"])) {
    $conn = conexao();
    $get_msgs = $conn->query("SELECT * FROM msg");
    $num_msgs = $get_msgs->rowCount();
    $get_msg_dec = $conn->query("SELECT * FROM msg order by id desc");

    if ($num_msgs == 0) {
        echo '
        <div class="form-floating">
            Nenhuma menssagem.
        </div>
        ';
    }else {
        echo '<div class="form-floating" id="msgbody"><div class="my-3 p-1 text-left border border-while border-3">';
        while ($linha = $get_msg_dec->fetch(PDO::FETCH_ASSOC)) {
            $nick = $linha["nome"];
            $ms = $linha["menssagem"];
            echo '<p><b class="text-primary">'.$nick.': </b>'.$ms.'</p>';
        }
        echo '</div></div>';
        
    }
}
?>