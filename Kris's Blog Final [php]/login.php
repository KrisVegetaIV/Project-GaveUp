<?php require_once "core/bootstrap.php";?>
<?php include "view/login,php";

if($_POST['email'] && $_POST['password']) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user->setEmail($email);
    $user->setPassword($password);
    
    if($user->loginUser()){
        header("location: Kris's-Blog.php");
    } else {
        echo "❌ You did not sign in correctly.";
    }
}

?>