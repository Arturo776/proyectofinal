<?php

class DataBase {

  // Conexión con la base de datos 'users.sqlite3'
  public $db;

  public function __construct($route)
  {
    $this->db = new SQLite3($route);
  }

  // Introducir datos
  function getData($id)
  {
    $query = "SELECT user, email FROM users WHERE id = ?";
    $statement = $db->prepare($query);
    $statement->bindParam(1, $id);
    $result = $statement->execute();
    $result = $result->fetchArray(SQLITE3_ASSOC);

    return $result;
  }

  // Insertar datos
  function newUser($user, $email, $password)
  {
    $query = "INSERT INTO users (user, email, password) VALUES (?, ?, ?)";
    $statement = $this->db->prepare($query);
    $statement->bindParam(1, $user);
    $statement->bindParam(2, $email);
    $statement->bindParam(3, $password);
    $statement->execute();
  }
}

?>
