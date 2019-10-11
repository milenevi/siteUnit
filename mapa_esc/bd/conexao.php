<?php

    /*
        Conexão com o banco de dados mydb_reciclagem
    */

require "config.php";

class Reciclagem {
  
    public $conn;

    function __construct(){
      $this->conn = new PDO('mysql:host='.host.';dbname='.db.'', username, password);  
      $this->conn->exec("set names utf8");      
    }
  
  //depois verificar aqui
    public function disconnect() // fecha conexao
    {
    if($this->conn)
    {
        if(@mysql_close())
        {
                        $this->conn = false;
            return true;
        }
        else
        {
            return false;
        }
    }
    }

    function buscar_todos(){
      $stmt = $this->conn->prepare('SELECT * FROM reciclagem');
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    }
     
    function remover($id){
      try{        
        $sql = "DELETE FROM reciclagem WHERE idreciclagem = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);   
        $stmt->execute();
        return true;
      }catch(Exception $e){
        return false;
      }
    }

    function buscar_por_id($id){      
      $stmt = $this->conn->query("SELECT * FROM reciclagem WHERE idreciclagem = '".$id."' ");
      $result = $stmt->fetchObject();
      return $result;
    }

    function cadastrar($dados){
      // print_r($dados); die;
       $stmt = $this->conn->prepare('INSERT INTO reciclagem (nome_rua, numero, CEP, bairro, cidade, estado, link_foto_sit_lixo, latitude, longitude, comentario, name) 
                              VALUES(:nome_rua, :numero, :CEP, :bairro, :cidade, :estado, :link_foto_sit_lixo, :latitude, :longitude, :comentario, :name)');  

       $stmt->execute(array(
          ':nome_rua' => $dados['nome_rua'],
          ':numero' => $dados['numero'],
          ':CEP' => $dados['CEP'],
          ':bairro' => $dados['bairro'],
          ':cidade' => $dados['cidade'],
          ':estado' => $dados['estado'],
          ':link_foto_sit_lixo' => $dados['link_foto_sit_lixo'],
          ':latitude' => $dados['latitude'],
          ':longitude' => $dados['longitude'],
          ':comentario' => $dados['comentario'],
          ':name' => $dados['name']
          
      ));

       // print_r($dados);
       // die;

      $lastId = $this->conn->lastInsertId();

      return $lastId;

    }

    function editar($dados){
       $stmt = $this->conn->prepare('UPDATE reciclagem SET nome_rua = :nome_rua, numero = :numero, CEP = :CEP, bairro = :bairro, cidade = :cidade, estado = :estado, link_foto_sit_lixo = :link_foto_sit_lixo,
                                                  latitude = :latitude, longitude = :longitude, comentario = :comentario, name = :name
                                                  WHERE idreciclagem = :id');
        try{
           $stmt->execute(array(
              ':id' => $dados['id'],
              ':nome_rua' => $dados['nome_rua'],
              ':numero' => $dados['numero'],
              ':CEP' => $dados['CEP'],
              ':bairro' => $dados['bairro'],
              ':cidade' => $dados['cidade'],
              ':estado' => $dados['estado'],
              ':link_foto_sit_lixo' => $dados['link_foto_sit_lixo'],
              ':latitude' => $dados['latitude'],
              ':longitude' => $dados['longitude'],
              ':comentario' => $dados['comentario'],
              ':name' => $dados['name']
          ));
          
        }catch(Exception $e){
          die($e);
        }
    }

}


/* -    para chave   - */

class Chave {
  
    public $conn;

    function __construct(){
      $this->conn = new PDO('mysql:host='.host.';dbname='.db.'', username, password);  
      $this->conn->exec("set names utf8");      
    }
  
  
    public function disconnect() // fecha conexao
    {
    if($this->conn)
    {
        if(@mysql_close())
        {
                        $this->conn = false;
            return true;
        }
        else
        {
            return false;
        }
    }
    
    }

    function buscar_todos(){
      $stmt = $this->conn->prepare('SELECT * FROM chave_maps');
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    }

//fim chave
}

?>
