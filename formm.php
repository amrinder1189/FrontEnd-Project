<?php include('db.php')?>
<?php 



if(isset($_POST['submit']))

{

    // $id = $_POST['id'];
    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $visa= $_POST['visa'];
    $country= $_POST['country'];


    $query="INSERT INTO form(nam,email,phone,visa,country)";
    $query.="VALUES('{$name}','{$email}','{$phone}','{$visa}','{$country}')";
    $res= mysqli_query($conn,$query);

    if($res){
        // header('Location: index.php');
        echo"<script>alert('Hi Your Data has been sent to the Organization 😊, they will soon contact you.');</script>";
        echo"<script> window.location.href='index.php'</script>";
       
        
       
    }
    else{
        echo"shit";
        die("erroe".mysqli_error($conn));
    }
    











}

?>