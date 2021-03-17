<?php

class UserDao extends BaseDao{


  public funtion get_user_by_email($email){
    return $this->query("Select * FROM users WHERE email = :email", ["email" => $email])



  }
}

 ?>
