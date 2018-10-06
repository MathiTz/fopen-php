<?php

//$file = fopen("log.txt", "w+"); //abri um arquivo de acordo com a permissão
$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s") . "\r\n"); //o que vai ser escrito

fclose($file); //fecha o arquivo

echo "Arquivo criado com sucesso!";

?>