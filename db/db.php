<?php

// Conexión con la base de datos 'users.sqlite3'
$db = new SQLite3('users.sqlite3');

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
  $query = "INSERT INTO users VALUES (?, ?, ?)";
  $statement = $db->prepare($query);
  $statement->bindParam(1, $user);
  $statement->bindParam(2, $email);
  $statement->bindParam(3, $password);
  $statement->exec();
}

?>
