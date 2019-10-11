<?php

if($_FILES){

	$dir_medico = $_SERVER['DOCUMENT_ROOT'].'sistema-ct/userfiles/medico-'.$_GET['medico']; 
	if(!is_dir($dir_medico)){
  		mkdir($dir_medico);
  	}

  	$uploaddir = $_SERVER['DOCUMENT_ROOT'].'sistema-ct/userfiles/medico-'.$_GET['medico'].'/convenio-'.$_GET['convenio'].'/';
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