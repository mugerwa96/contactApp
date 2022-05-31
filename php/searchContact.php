<?php
include("connection.php");
$input=$_POST['inputVal'];
$sql="select * from registration where username like '%$input%'";
$query=mysqli_query($connection,$sql);
$row=mysqli_num_rows($query);
if($row)
{
    while($row=mysqli_fetch_array($query))
    {

      $username=$row['username'];
      $location=$row['location'];
      $email=$row['email-address'];
      $contact=$row['contact'];
      $userImage=$row['user-image'];
      $user_id=$row['user_id'];
      ?>
      
        <!-- person-one -->
        <div class="col-md-3 my-3"> 
                                <div class="card-person">
                                    <div class="card">
                                        <?php
                                        if($userImage)
                                        {
                                            ?>
                                            <img src="./userImage/<?php echo $userImage;?>" alt="">
                                            <?php
                                        }
                                        else

                                        {
                                            ?>
                                                <img src="./images/francisco-venancio-M4Xloxsg0Gw-unsplash.jpg" alt="">
                                            <?php
                                        }

                                        ?>
                                    
                                        <div class="card-person-content font-weight-bold">
                                        <p >
                                            <span>Contact ID:</span>
                                            <span><?php echo $user_id;?></span>
                                        </p>
                                    
                                            <p >
                                                <span><i class="fa fa-user fa-2x fa-icon"></i></span> :
                                                <span><?php echo $username;?></span>
                                            </p>
                                            <p >
                                                <span><i class="fa fa-phone fa-2x fa-icon"></i></span> :
                                                <span><?php echo $contact;?></span>
                                            </p>
                                            <p >
                                                <span><i class="fa fa-address-card fa-2x fa-icon"></i></span> :
                                                <span><?php echo $location;?></span>
                                            </p>
                                            
                                            <p >
                                                <span><i class="fa fa-envelope fa-2x fa-icon"></i></span> :
                                                <span><?php echo $email;?></span>
                                            </p>
                                            
                        
                                            
                                            
                                        </div>
                                    </div>  
                                </div>
                            </div> -->
                    <!-- person-one -->
      <?php
    }
}
else
{
?>

<img src="images\searchloader.gif" class="img-fluid loader" alt="" style="width:20%;margin:auto;">
<!-- <div class="alert alert-primary my-5" role="alert">
  A simple primary alert—check it out!
</div> -->
<?php
}

?>