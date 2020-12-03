<?php

require 'db.php';

$file = fopen('CIDADES_CAPITAIS_IBGE.csv','r');

$i = 0;
while($line = fgets($file)){
  $i++;
  echo "<pre>$line</pre>";
  if($i == 1) continue; //I don't want the title
  $line = explode(';', $line); //line into array
  end($line);

  $line[2] = str_replace(",", ".", $line[2]);
  $line[3] = str_replace(",", ".", $line[3]);

  $obj = $banco->prepare("INSERT INTO IMPORTACAO (id_cidade, nome, latitude, longitude) VALUES (?,?,?,?)");

  try {
    $obj->execute($line);
  }catch(Exception $e){
    echo 'Deu erro: ';
    echo $e->getMessage();
  }
}

fclose($file);