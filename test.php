


<?php include('db.php')?>


<?php


$query="CREATE TABLE users ( user_id int primary key AUTO_INCREMENT,user_name varchar(255),pass varchar(120))";
$res=mysqli_query($conn,$query);


$query="INSERT INTO `users`(`user_id`, `user_name`, `pass`) VALUES (1,'birlag@birlag.com','123@birla')";
$res=mysqli_query($conn,$query);

$query="CREATE TABLE form ( nam varchar(120),email varchar(255),phone varchar(120),visa varchar(120),country varchar(120))";
$res= mysqli_query($conn,$query);

$query = "INSERT INTO `form`(`nam`, `email`, `phone`, `visa`, `country`) VALUES ('BirlaG','birla@gmail.com','8360851078','StudentVisa','Canada')";
$res=mysqli_query($conn,$query);

$query="CREATE TABLE feeds ( feed_id int primary key AUTO_INCREMENT,feed_info varchar(255))";
$res=mysqli_query($conn,$query);


$query="INSERT INTO `feeds`(`feed_info`) VALUES ('birlag the famous company')";
$res=mysqli_query($conn,$query);



?>