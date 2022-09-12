<?php


// Redirection vers page de login
function user_controller_login(){
    render(VIEW_DIR.'/user/login.php');
}

// Authentification
function user_controller_authentification($request){
  require(MODEL_DIR.'/user.php');
  $header = user_model_authentification($request);
  header($header);
}

// Logout user
function user_controller_logout(){
  session_start();
  session_destroy();
  render(VIEW_DIR.'/user/login.php');
}

// Redirection vers page de création d'un usager
function user_controller_create(){
  render(VIEW_DIR.'/user/create.php');
}

// Création d'un usager
function user_controller_insert($request){
  require(MODEL_DIR.'/user.php');
  user_model_insert($request);
  header("Location: ?module=user&action=login");
}