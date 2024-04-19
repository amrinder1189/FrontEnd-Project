<?php include('db.php'); ?>
<?php session_start(); ?>



<?php
 

if(isset($_POST['login'])){
    $username = $_POST['email'];
    $pass     = $_POST['password'];

    $query = "SELECT * FROM admin WHERE user_name = '{$username}'";
    $res = mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($res)){
        $user_name = $row['user_name'];
        $passs  = $row['pass'];
     }

     if($username == $user_name && $pass == $passs){
        $_SESSION['username'] = $username; 
         header('Location: admin.php');
     }
     elseif($username !== $user_name && $pass !== $passs)
{
    echo"please register yourself";
    header("Location: login.php");

}
else{
    
    header("Location: login.php");
    echo"PASSWORD OR Email is INCORRECT";
}


}


?>