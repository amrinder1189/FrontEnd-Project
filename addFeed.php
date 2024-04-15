<?php include('db.php') ?>
<?php


if(isset($_POST['submit'])){
    $feed_info = $_POST['feed_info'];
    
    $query = "INSERT INTO feeds(feed_info)";
    $query .= "VALUES('{$feed_info}')";
    $res = mysqli_query($conn,$query);


    if($res){

        $query = "delete from feeds where feed_id=(select max(feed_id) from feeds)-5";
        $res=mysqli_query($conn,$query);

        // echo"congratulations Feed added";


        header('Location: admin.php');
    }
    else{
        die("erroe".mysqli_error($conn));

    }

}