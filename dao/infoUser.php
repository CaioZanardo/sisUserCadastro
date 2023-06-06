<?php

class InfoUser extends Connection
{
  private $table = 'tbinfoUser';
  private $query = 'SELECT tbinfoUser.id, tbinfoUser.iduser, tbinfoUser.pass, tbinfoUser.cpf, tbuser.user  FROM tbinfoUser INNER JOIN tbuser ON tbinfoUser.iduser = tbuser.id';
  
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
    return $this->connection->query($this->query . ' WHERE tbinfoUser.id = ' . $id)->fetch_assoc();
  }

  public function insert($idUser, $pass, $cpf)
  {
    $sql = "INSERT INTO " . $this->table . " (iduser, pass, cpf) VALUES (".$idUser.", '".$pass."',".$cpf.")";
    return $this->connection->query($sql);
  }

  public function update($id, $user, $pass, $cpf)
  {
    $sql = "UPDATE " . $this->table . " SET iduser='" . $user . "', pass='".$pass."', cpf=".$cpf." WHERE id=" . $id;
    return $this->connection->query($sql);
  }

  public function delete($id)
  {
    $sql = "DELETE FROM  " . $this->table . " WHERE id=" . $id;
    return $this->connection->query($sql);
  }
}
