<?php

if($_FILES){

  $dir_ano = $_SERVER['DOCUMENT_ROOT'].'userfiles/ano-'.$_GET['ano']; 
  if(!is_dir($dir_ano)){
      mkdir($dir_ano);
    }

    $dir_mes = $_SERVER['DOCUMENT_ROOT'].'userfiles/ano-'.$_GET['ano'].'/mes-'.$_GET['mes'].'/'; 
    if(!is_dir($dir_mes)){
        mkdir($dir_mes);
      }

    	$dir_medico = $_SERVER['DOCUMENT_ROOT'].'userfiles/ano-'.$_GET['ano'].'/mes-'.$_GET['mes'].'/medico-'.$_GET['medico']; 
    	if(!is_dir($dir_medico)){
      		mkdir($dir_medico);
      	}

        $dir_convenio = $_SERVER['DOCUMENT_ROOT'].'userfiles/ano-'.$_GET['ano'].'/mes-'.$_GET['mes'].'/medico-'.$_GET['medico'].'/convenio-'.$_GET['convenio'];
        if(!is_dir($dir_convenio)){
            mkdir($dir_convenio);
          }

          	$uploaddir = $_SERVER['DOCUMENT_ROOT'].'userfiles/ano-'.$_GET['ano'].'/mes-'.$_GET['mes'].'/medico-'.$_GET['medico'].'/convenio-'.$_GET['convenio'].'/tipo-'.$_GET['tipo'].'/';
          	if(!is_dir($uploaddir)){
          		mkdir($uploaddir);
          	}

  	$uploadfile = $uploaddir.basename($_FILES['file']['name']);

  	if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
      	echo "File is valid, and was successfully uploaded.\n";
  	}else{
  		echo "Possible file upload attack!\n";
  	}
}