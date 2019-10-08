<?php
require "bd/conexao.php"; 


function parseToXML($htmlStr){
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}

//trazer os valores do banco
$reciclagem = new Reciclagem();
$reciclagem =  $reciclagem->buscar_todos();

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
foreach ($reciclagem as $key => $value):
  // Add to XML document node
  echo '<marker ';
  echo 'name="' . parseToXML($value['name']) . '" ';
  echo 'address="' . parseToXML($value['nome_rua']) . '" ';
  echo 'lat="' . $value['latitude'] . '" ';
  echo 'lng="' . $value['longitude'] . '" ';
  echo '/>';

endforeach;

// End XML file
echo '</markers>';



