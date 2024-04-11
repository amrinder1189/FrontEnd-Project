<?php session_start(); ?>
<?php 
  if(!isset($_SESSION['pas'])){
    header('Location: login.php');
}
else{
  unset($_SESSION['pas']);
}
?>
    <?php
include('header.php');
?>





<!-- the welcome boos  -->
<div class='welcome'>

<!-- to add feeds  -->
    <div class="to-add" style="margin-top:200px">

            <h2 style='text-align:center; margin:2%; font-size:large;'>To Add Feeds</h2>

            <form class='form feeds-form '  method='post' action='addFeed.php'>

                <div class='form-group'>
                    <input class='form-control' type='text' placeholder='Please Enter The Feed or News...' name='feed_info' >
                </div>

                <div class='form-group'>
                    <input class='form-control btn btn-sm btn-primary' type='submit' value='Add Feed' name='submit'  >
                </div>
            </form>

    </div>


    <h3 class="neeed">Student Need Consultation...</h3>
    <div class=" table-responsive">
    
    <table class="table table-responsive table-hover">


    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Visa</th>
        <th>Country</th>
      </tr>
    </thead>


    <tbody>

    <?php
      $query="SELECT * FROM form";
      $res=mysqli_query($conn,$query);
      while($row = mysqli_fetch_assoc($res)){
        $name=$row['nam'];
        $email=$row['email'];
        $phone=$row['phone'];
        $visa=$row['visa'];
        $country=$row['country'];


        echo"<tr>";
        echo"<td>{$name}</td>";
        echo"<td>{$email}</td>";
        echo"<td>{$phone}</td>";
        echo"<td>{$visa}</td>";
        echo"<td>{$country}</td>";
        echo"</tr>";





      }
        ?>



     



      
    </tbody>
  </table>
</div>



















</div>




<?php  include('footer.php') ?>