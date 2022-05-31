        <?php
            include("connection.php");
            $sql="select * from registration";
            $query=mysqli_query($connection,$sql);
            $row=mysqli_num_rows($query);
            if($row)
            {
                while($row=mysqli_fetch_array($query))      
                {
                    $username=$row['username'];
                    $contact=$row['contact'];
                    $emailAddress=$row['email-address'];
                    $location=$row['location'];
                    $userImage=$row['user-image'];
                    $user_id=$row['user_id'];
                    ?>
                        <!-- person-one -->
                        <div class="col-md-3"> 
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
                                            <div class="button mb-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button type="button"  class="btn bg-edit btn-sm" data-id="<?php echo $row['id'];?>"><i class="fa fa-pencil fa-2x mx-1"></i></button>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="button" class="btn bg-delete btn-sm" data-id="<?php echo $row['id'];?>" ><i class="fa fa-trash fa-2x mx-1 "></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                        
                                            
                                            
                                        </div>
                                    </div>  
                                </div>
                            </div> -->
                    <!-- person-one -->
                    <?php
                }
             }
             else{
                    
              }
         ?>


