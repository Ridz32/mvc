<?php

// Création d'un user
function user_model_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $password = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO user (name, userName, birthday, password) VALUES ('$name','$userName','$birthday','$password')";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function user_model_authentification($request){
  require(CONNEX_DIR);
  foreach($request as $key=>$value){
      $$key=mysqli_real_escape_string($con,$value);
  }
  $sql = "SELECT * FROM user WHERE userName = '$userName'";
  $result = mysqli_query($con, $sql);
  $count = mysqli_num_rows($result);
  $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $dbpassword = $user['password'];
  if($count == 1) {
    $dbpassword = $user['password'];
    if(password_verify($password, $dbpassword)){
      session_start();
      $_SESSION['loggedUserId'] = $user['userId'];
      $_SESSION['userName'] = $user['userName'];
      $header = "Location: ?module=forum&action=home";
    } else {
      $header = "Location: ?module=user&action=login&msg=2";
    }
  } else {    
    $header = "Location: ?module=user&action=login&msg=1";
  } 
  mysqli_close($con);
  return $header;
}