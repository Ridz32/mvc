<?php

// Posts de tout le monde
function forum_model_home(){
  require(CONNEX_DIR);
  $sql = "SELECT * FROM forum LEFT JOIN user ON forum.author = user.userId;";
  $result = mysqli_query($con, $sql);
  $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($con);
  return $result;
}

// Posts de l'user connecté
function forum_model_index(){
  require(CONNEX_DIR);
  session_start();
  $userId = $_SESSION['loggedUserId'];
  $sql = "SELECT * FROM forum WHERE author = '$userId';";
  $result = mysqli_query($con, $sql);
  $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($con);
  return $result;
}

// Pour créer un post
function forum_model_insert($request){
  require(CONNEX_DIR);
  foreach($request as $key=>$value){
    $$key=mysqli_real_escape_string($con,$value);
  }
  $date = date("Y/m/d");
  session_start();
  $userId = $_SESSION['loggedUserId'];
  $sql = "INSERT INTO forum (title, article, creationDate, author) VALUES ('$title', '$article', '$date', '$userId');";
  mysqli_query($con, $sql);
  mysqli_close($con);
}

// Pour supprimer un post
function forum_model_delete($request){
  require(CONNEX_DIR);
  foreach($request as $key=>$value){
      $$key=mysqli_real_escape_string($con,$value);
  }
  $sql = "DELETE FROM forum WHERE idForum = '$idForum'";
  mysqli_query($con, $sql);
  mysqli_close($con);
}

// Redirection vers page de modification d'un post
function forum_model_view($request){
  require(CONNEX_DIR);
  session_start();
  $userId = $_SESSION['loggedUserId'];
  $idForum = $request['id'] ;
  $sql = "SELECT * FROM forum WHERE idForum = '$idForum'";
  $result = mysqli_query($con, $sql);
  $result = mysqli_fetch_assoc($result);
  mysqli_close($con);
  return $result;
}

// Pour modifier un post
function forum_model_edit($request){
  require(CONNEX_DIR);
  foreach($request as $key=>$value){
      $$key=mysqli_real_escape_string($con,$value);
  }
  $sql = "UPDATE forum SET title = '$title', article = '$article' WHERE idForum = '$idForum'";
  mysqli_query($con, $sql);
  mysqli_close($con);
}