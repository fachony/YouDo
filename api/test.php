<?php
require_once dirname(__FILE__)- "/dao/UserDao.class.php";


$user_dao = new UserDao();

//$user = $user_dao-> get_user_by_email("mirsada.ala@gmail.com");


$user = [
"name" => "keno",
"email" => "keno@gmail.com",
"password"=> "23",
"account_id"=>1

];
$user_dao-> add_user($user);

print_r($user);
 ?>
