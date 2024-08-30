<?php
$host = 'localhost'; // ホスト名
$dbname = 'company'; // データベース名

difine('DSN',"mysql:host=$host;dbname=$dbname;charset=utf8",);
difine('USER','root');
difine('PASS','root');

class Databese
{
  private $pdo;
  private function connect() 
  {
    if(!isset($this->pdo)){
      $this-> pdo = new PDO(
        DSN,USER,PASS,
        [
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false
        ]
      );
    }
  }

  function getallsyain(){
  try{
    $this->connect();
    $stmt= $this->pdo->query("SELECT id, name FROM syain ORDERBY id;");
    $members = $stmt->fetchAll();
    return $members;
  } catch (PDOException $e) {
    echo $e->getMessage() . '<br>';
    exit;
  }

  function getsyain($id){
    try{
      $this->connect();
      $stmt= $this->pdo->query("SELECT id, name FROM syain ORDERBY id = ? ;");
      $stmt->bindParam(1, $id, PDO::PARAM_INT);
      $members = $stmt->execute();
      if ($member) {
        $member = $stmt->feachAll();
        if (count($member) == 0) {
          return null;
        }
        return $members[0];
      }
      return null;
    } catch (PDOException $e) {
      echo $e->getMessage() . '<br>';
      exit;
    }

    function idexist($id){
      if($this->getsyain($id) ! = null){
        return true;
      }
      return false;
    }

    function createsyain($id, $name, $age, $work){
      try{
        $stmt = $pdo -> prepare("INSERT INTO syain VALUES(?, ?, ?, ?);");
        $stmt -> bindParam(1, $id, PDO::PARAM_INT);
        $stmt -> bindParam(2, $name, PDO::PARAM_STR);
        $stmt -> bindParam(6, $age, PDO::PARAM_INT); 
        $stmt -> bindParam(7, $work, PDO::PARAM_STR); 
        $result = $stmt -> execute();
        return true;

      }catch(PDOException $e) {
        echo $e->getMessage() . '<br>';
        exit;
      }
      return false;




}


?>