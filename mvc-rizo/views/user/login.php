<?php 
$msg=null;
if(isset($_GET['msg'])){
    if($_GET['msg']==1){
        $msg = "Invalid username";
        echo $data;
    }elseif($_GET['msg']==2){
        $msg = "Invalid password";
    }else{
        $msg=null;
    } 
}
?>

<span><?php echo $msg;
print_r($data)
?></span>
<form action="index.php?module=user&action=authentification" method="post">
  <label>
    Username
    <input type="text" name="userName">
  </label>
  <label>
    Mot de passe
    <input type="password" name="password">
  </label>
  <input type="submit" value="login">
</form>
<small>username: marcos@caramail.com<br>cemporcento</small>
 