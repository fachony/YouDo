<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class UserDao extends BaseDao{


  public funtion get_user_by_email($email){
    return $this->query_unique("Select * FROM users WHERE email = :email", ["email" => $email])

  }

   public function get_user_by_id($id)
  {
    return $this->query_unique("Select * FROM users WHERE id = :id", ["id" => $id])
}

public function add_user($user){

  $insert="";
  $sql = "INSERT INTO users (name, email, password, account_id) VALUES (:name, :email, :password, :account_id)";
  $stmt= $this->connection->prepare($sql);
  $stmt->execute($user);
  $user['id'] = $this->connection->lastInsertId();
return $user;


}
public function update_user($id, $user){


}

 ?>
