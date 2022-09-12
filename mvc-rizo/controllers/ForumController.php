<?php

// Posts de tout le monde
function forum_controller_home(){
  require(MODEL_DIR.'/forum.php');
  $data = forum_model_home();
  render(VIEW_DIR.'/forum/home.php', $data);
}

// Posts de l'user connecté
function forum_controller_index(){
  require(MODEL_DIR.'/forum.php');
  $data = forum_model_index();
  render(VIEW_DIR.'/forum/index.php', $data);
}

// Redirection vers page de création d'un post
function forum_controller_create(){
  render(VIEW_DIR.'/forum/create.php');
}

// Pour créer un post
function forum_controller_insert($request){
  require(MODEL_DIR.'/forum.php');
  require(MODEL_DIR.'/user.php');
  forum_model_insert($request);
  header("Location: ?module=forum&action=index");
}

// Pour supprimer un post
function forum_controller_delete($request){
  require(MODEL_DIR.'/forum.php');
  forum_model_delete($request);
  header("Location: ?module=forum&action=index");
}

// Redirection vers page de modification d'un post
function forum_controller_view($request){
  require(MODEL_DIR.'/forum.php');
  $data = forum_model_view($request);
  render(VIEW_DIR.'/forum/view.php', $data);
}

// Pour modifier un post
function forum_controller_edit($request){
  require(MODEL_DIR.'/forum.php');
  forum_model_edit($request);
  header("Location: ?module=forum&action=index");
}