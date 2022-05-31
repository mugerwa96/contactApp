<!-- add-contact-page -->
<?php
$id=$_POST['id'];
            include("./php/connection.php");
            $sql="select * from registration where id='$id'";
            $query=mysqli_query($connection,$sql);
            $row=mysqli_num_rows($query);
           
                while($row=mysqli_fetch_array($query))      
                {
                    $username=$row['username'];
                    $contact=$row['contact'];
                    $emailAddress=$row['email-address'];
                    $location=$row['location'];
                    $userImage=$row['user-image'];
                } 
?>

<div class="add-contact-page">

<div class="form">
        <div class="form-header font-weight-bold text-center"> 
        <span class="head left-arrow" style="font-size:12px;padding:10px;cursor:pointer">  <i class="fa fa-arrow-left fa-1x mx-2"></i>Back</span>
            <span class="head" >  <i class="fa fa-plus-circle fa-1x mx-2"></i>Update Contact</span> 
            
          
        </div>
            <!-- form-details -->

                    <div class="form-details">
                            <!-- form-left-content -->
                                    <div class="form-left-content">
                                    <p class="logo">
                                        <span class="text-light"> <i class="fa fa-circle-o-notch mx-2"></i> Quick  </span>

                                         <span class="text-color">Phone <i class="fa fa-circle-o-notch mx-2"></i></span></p>
                                    </div>
                        <!-- form-left-content -->

                            <!-- form-left-content -->
                                <div class="form-right-content" >
                                    <div class="container">
                                        <form autocomplete="off" id="form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="username"name="username" placeholder="Username" value="<?php echo $username;?>">
                                                <span class="username-error"></span>
                                            </div>
                
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" name="email"placeholder="Email address" value="<?php echo $emailAddress;?>">
                                                <span class="email-error"></span>
                                            </div>
                
                                            <div class="form-group">
                        
                                            <input type="text" placeholder="Contact" id="contact" name="contact" class="form-control" value="<?php echo $contact;?>">
                                            <span class="contact-error"></span>
                                            </div>
                                    
                                            <div class="form-group">
                        
                                            <input type="text" placeholder="Location" id="location" name="location" class="form-control" value="<?php echo $location;?>">
                                            <span class="location-error"></span>
                                            </div>
                                            <input type="hidden" name="edit-id" id="" value="<?php echo $id;?>">
                                            <div class="form-group">
                        
                                                    <label for="exampleFormControlFile1">UserImage</label>
                                                    <input type="file" class="form-control-file" id="file" name="file">
                                                    <span class="file-error"></span>
                                            </div>
                                            
                                            <div class="form-group ">
                                            <button type="button" id="edit-btn"class="btn  bg-color text-light font-weight-bold"> <i class="fa fa-pencil mx-2 fa-2x"></i>Update contact</button>
                                            </div>
                                        </form>
                                    </div>
                                
                                    </div>
                            <!-- form-left-content -->
                    </div>  

            <!-- form-details -->
</div>

</div>


<!-- add-contact-page -->



<!-- scripts files -->
<script>

    // leftarrow
    $(".left-arrow").click(function(){
        $(".dynamicContent").load("view-contact.php");
    })
    // leftarrow
     // Validation on the username 
 var errorInUsername=false;
 $("#username").keyup(function(){
   checkUsername();
  
 })
 function checkUsername()
 {
    var usernameVal=$("#username").val();
    if(usernameVal.length=="")
    {
      $(".username-error").show();
      $(".username-error").html("<p style='font-size:10px;letter-spacing:1px;color:red; font-style:italic;font-weight:bold;'> <i class='fa fa-times-circle'></i> Username is required please<p>");
      $("#username").css({"border":"1px solid red"});
      $("#edit-btn").attr("disabled",true);
      errorInUsername=true
    }
    else
    {
     $(".username-error").show();
     $(".username-error").html("<p style='font-size:10px;color:red;'><p>");
     $("#username").css({"border":"1px solid green"});
     $("#edit-btn").attr("disabled",false);
     errorInUsername=false;
    }
 }
 // Validation on the username 


  // Validation on the email
  var errorInEmail=false;
  $("#email").keyup(function(){
    checkemail();
 
  })
  function checkemail()
  {
     var emailVal=$("#email").val();
     var reg=/^\w+([-+’]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
     if(emailVal.length=="")
     {
       $(".email-error").show();
       $(".email-error").html("<p style='font-size:10px;letter-spacing:1px;color:red; font-style:italic;font-weight:bold;'> <i class='fa fa-times-circle'></i> email is required please<p>");
       $("#email").css({"border":"1px solid red"});
       $("#edit-btn").attr("disabled",true);
     }
     else if(reg.test(emailVal)==false)
     {
        $(".email-error").show();
        $(".email-error").html("<p style='font-size:10px;letter-spacing:1px;color:orange; font-style:italic;font-weight:bold;'> <i class='fa fa-exclamation-circle'></i>Invalid email address<p>");
        $("#email").css({"border":"1px solid orange"});
        $("#edit-btn").attr("disabled",true);
        errorInEmail=true;
     }
     else
     {
      $(".email-error").show();
      $(".email-error").html("<p style='font-size:10px;color:red;'><p>");
      $("#email").css({"border":"1px solid green"});
      $("#edit-btn").attr("disabled",false);
      errorInEmail=false;
     }
  }
  // Validation on the email 




    // Validation on the location
  var errorInLocation=false;
  $("#location").keyup(function(){
    checklocation();
     
  })
  function checklocation()
  {
     var locationVal=$("#location").val();
   //   var locationReg=/^[a-zA-Z]{2,10}$/;
     if(locationVal.length=="")
     {
       $(".location-error").show();
       $(".location-error").html("<p style='font-size:10px;color:red;'><i class='fa fa-exclamation-circle'></i> location is required please<p>");
       $("#location").css({"border":"1px solid red"});
       $("#edit-btn").attr("disabled",true);
       errorInLocation=true;
     }
   //   else if(locationReg.test(locationVal)==false)
   //   {
   //      $(".location-error").show();
   //      $(".location-error").html("<p style='font-size:10px;letter-spacing:1px;color:orange; font-style:italic;font-weight:bold;'> <i class='fa fa-exclamation-circle'></i>Invalid location<p>");
   //      $("#location").css({"border":"1px solid orange"});
   //      $("#edit-btn").attr("disabled",true);
   //      errorInLocation=true;
   //   }
     else
     {
      $(".location-error").show();
      $(".location-error").html("<p style='font-size:10px;color:red;'><p>");
      $("#location").css({"border":"1px solid green"});
      $("#edit-btn").attr("disabled",false);
      errorInLocation=false;
     }
  }
  // Validation on the location


   // Validation on the Contact
   var errorInContact=false;
   $("#contact").keyup(function(){
     checkcontact();
    
   })
   function checkcontact()
   {
      var contactVal=$("#contact").val();
      var contactReg=/^[0-9]{8,9}$/;
      if(contactVal.length=="")
      {
        $(".contact-error").show();
        $(".contact-error").html("<p style='font-size:10px;color:red;'> <i class='fa fa-exclamation-circle'></i> contact is required please<p>");
        $("#contact").css({"border":"1px solid red"});
        $("#edit-btn").attr("disabled",true);
        errorInContact=true;
      }
      else if(contactReg.test(contactVal)==false)
      {
        $(".contact-error").show();
        $(".contact-error").html("<p style='font-size:10px;letter-spacing:1px;color:orange; font-style:italic;font-weight:bold;'> <i class='fa fa-exclamation-circle'></i>Invalid contact<p>");
        $("#contact").css({"border":"1px solid orange"});
        $("#edit-btn").attr("disabled",true);
        errorInContact=true;
      }
      else
      {
       $(".contact-error").hide();
   
       $("#contact").css({"border":"1px solid green"});
       $("#edit-btn").attr("disabled",false);
       errorInContact=false;
      }
   }
   // Validation on the contact


//    validation on the file input

validateImage();
errorInFile=false;
function validateImage()
   {  
   
         $("#file").change(function(){
         var file=this.files[0];
         fileSize=file.size;
         fileName=file.name;
         var extension=[".jpg",".png",".jpeg"];
     
         var positionOfTheDot=fileName.lastIndexOf(".");
         var imageExtension=fileName.substring(positionOfTheDot);
         console.log(imageExtension);
         if($("#file").val()==" ")
            {
               console.log("image required");
               $("#file").css({"border":"1.5px solid red"});
               $("#file-error").show();
               $("#file-error").html("<p style='color:red;font-size:10px;font-weight:600;letter-spacing:1px;font-style:italic''><i class='fa fa-times-circle'></i>Image  required.......</p>");
               $("#edit-btn").attr("disabled",true);
               errorInFile=true;
            }

        else if(!((imageExtension==extension[0]) || (imageExtension==extension[1]) || (imageExtension==extension[2])))
         {
            $("#file").css({"border":"1.5px solid orange"});
               $("#errorFile").show();
               $("#file").val("");
               $("#errorFile").html("<p style='color:orange;font-size:10px;font-weight:600;letter-spacing:1px;font-style:italic''><i class='fa fa-times-circle'></i>Only images are allowed to be uploaded</p>");
               $("#edit-btn").attr("disabled",true);
               errorInFile=true;
         }
        else if(fileSize>5000000)
               {
                  $("#file").css({"border":"1.5px solid orange"});
                  $("#errorFile").show();
                  $("#file").val("");
                  $("#errorFile").html("<p style='color:orange;font-size:10px;font-weight:600;letter-spacing:1px;font-style:italic''><i class='fa fa-times-circle'></i>Image too large (>5MB).......</p>");
                  $("#edit-btn").attr("disabled",true);
                  errorInFile=true;
               }
               else
               {
                  
                  $("#file").css({"border":""});
                  $("#errorFile").hide();
                  $("#edit-btn").attr("disabled",false);
                  errorInFile=false;
               }
            });
    }
//    validation on the file input


// button validation
$("#edit-btn").click(function(){
 
    errorInContact=false;
    errorInEmail=false;
    errorInUsername=false;
    errorInFile=false;
    errorInLocation=false;
    checkUsername();
    checklocation();
    checkemail();
    validateImage();
    checkcontact();
    if(errorInUsername==false && errorInFile==false && errorInEmail==false && errorInLocation==false && errorInContact==false)
    {
     var formData=$("#form")[0];
      $.ajax({
         url:"php/editContact.php",
         method:"POST",
         data:new FormData(formData),
         contentType:false,
         processData:false,
         cache:false,
         success:function(response){
            $("#form")[0].reset();
         
          
            $(".dynamicContent").load("view-contact.php");
         
      },
         error:function(){
            console.log("Error in sending posts");
         }
      })
    }
    else
    {
        return false
    }
    
})
// button validation
</script>
