<?php
class homeModel
{
  public $connect = null;
  public function __construct()
  {
    try {
      $this->connect = new PDO("mysql:host=localhost;dbname=test", "root", "Root@1234");
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  // public function page($id)
  // {
  //   $sql = "SELECT title,data FROM page WHERE id = '$id'";
  //   $stmt = $this->connect->prepare($sql);
  //   $stmt->execute();
  //   $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
  //   $arr = $data[0];
  //   return $arr;
  // }

  public function home()
  {
    $sql = "SELECT title,data FROM page WHERE id = '1'";
    $stmt = $this->connect->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $arr = $data[0];
    return $arr;
  }

  public function about()
  {
    $sql = "SELECT title,data FROM page WHERE id = '2'";
    $stmt = $this->connect->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $arr = $data[0];
    return $arr;
  }

  public function contact()
  {
    $sql = "SELECT title,data FROM page WHERE id = '3'";
    $stmt = $this->connect->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $arr = $data[0];
    return $arr;
  }
}
?>