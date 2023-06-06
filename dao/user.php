<?php

class User extends Connection
{
  private $table = 'tbuser';
  private $query = 'SELECT * FROM tbuser';
  
  public function getAll()
  {   
    $result = $this->connection->query($this->query);
    $lista = array();
    while ($record = $result->fetch_object()) {
      array_push($lista, $record);
    }
    $result->close();
    return $lista;		
  }

  public function getById($id)
  {
    return $this->connection->query($this->query . ' WHERE id = ' . $id)->fetch_assoc();
  }

  public function insert($user)
  {
    $sql = "INSERT INTO " . $this->table . " (user) VALUES ('" . $user . "')";
    return $this->connection->query($sql);
  }

  public function update($id, $user)
  {
    $sql = "UPDATE " . $this->table . " SET user='" . $user . "' WHERE id=" . $id;
    return $this->connection->query($sql);
  }

  public function delete($id)
  {
    $sql = "DELETE FROM  " . $this->table . " WHERE id=" . $id;
    return $this->connection->query($sql);
  }
}
