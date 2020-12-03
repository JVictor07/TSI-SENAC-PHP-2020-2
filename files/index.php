<?php

$fp = fopen('planilha.csv', 'w');

fwrite($fp, "Name;Phone\r\n");
fwrite($fp, "João;11912345678\r\n");

fclose($fp);

echo "GENERATED FILE\r\n";

$fp = fopen('planilha.csv', 'w');

fwrite($fp, "Teste;11912345678\r\n");
fwrite($fp, "Teste2;11912345678\r\n");
fwrite($fp, "Teste3;11912345678\r\n");

fclose($fp);

echo "CHANGED FILE\r\n";

echo "SEE THE FILE CONTENT\r\n";

$fp = fopen('planilha.csv', 'r');

while($line = fgets($fp)){
  echo $line;
}

fclose($fp);