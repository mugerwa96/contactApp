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
      $("#save-btn").attr("disabled",true);
      errorInUsername=true
    }
    else
    {
     $(".username-error").show();
     $(".username-error").html("<p style='font-size:10px;color:red;'><p>");
     $("#username").css({"border":"1px solid green"});
     $("#save-btn").attr("disabled",false);
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
       $("#save-btn").attr("disabled",true);
     }
     else if(reg.test(emailVal)==false)
     {
        $(".email-error").show();
        $(".email-error").html("<p style='font-size:10px;letter-spacing:1px;color:orange; font-style:italic;font-weight:bold;'> <i class='fa fa-exclamation-circle'></i>Invalid email address<p>");
        $("#email").css({"border":"1px solid orange"});
        $("#save-btn").attr("disabled",true);
        errorInEmail=true;
     }
     else
     {
      $(".email-error").show();
      $(".email-error").html("<p style='font-size:10px;color:red;'><p>");
      $("#email").css({"border":"1px solid green"});
      $("#save-btn").attr("disabled",false);
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
     var locationReg=/^[a-zA-Z]{2,10}$/;
     if(locationVal.length=="")
     {
       $(".location-error").show();
       $(".location-error").html("<p style='font-size:10px;color:red;'><i class='fa fa-exclamation-circle'></i> location is required please<p>");
       $("#location").css({"border":"1px solid red"});
       $("#save-btn").attr("disabled",true);
       errorInLocation=true;
     }
     else if(locationReg.test(locationVal)==false)
     {
        $(".location-error").show();
        $(".location-error").html("<p style='font-size:10px;letter-spacing:1px;color:orange; font-style:italic;font-weight:bold;'> <i class='fa fa-exclamation-circle'></i>Invalid location<p>");
        $("#location").css({"border":"1px solid orange"});
        $("#save-btn").attr("disabled",true);
        errorInLocation=true;
     }
     else
     {
      $(".location-error").show();
      $(".location-error").html("<p style='font-size:10px;color:red;'><p>");
      $("#location").css({"border":"1px solid green"});
      $("#save-btn").attr("disabled",false);
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
        $("#save-btn").attr("disabled",true);
        errorInContact=true;
      }
      else if(contactReg.test(contactVal)==false)
      {
        $(".contact-error").show();
        $(".contact-error").html("<p style='font-size:10px;letter-spacing:1px;color:orange; font-style:italic;font-weight:bold;'> <i class='fa fa-exclamation-circle'></i>Invalid contact<p>");
        $("#contact").css({"border":"1px solid orange"});
        $("#save-btn").attr("disabled",true);
        errorInContact=true;
      }
      else
      {
       $(".contact-error").hide();
   
       $("#contact").css({"border":"1px solid green"});
       $("#save-btn").attr("disabled",false);
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
               $("#save-btn").attr("disabled",true);
               errorInFile=true;
            }

        else if(!((imageExtension==extension[0]) || (imageExtension==extension[1]) || (imageExtension==extension[2])))
         {
            $("#file").css({"border":"1.5px solid orange"});
               $("#errorFile").show();
               $("#file").val("");
               $("#errorFile").html("<p style='color:orange;font-size:10px;font-weight:600;letter-spacing:1px;font-style:italic''><i class='fa fa-times-circle'></i>Only images are allowed to be uploaded</p>");
               $("#save-btn").attr("disabled",true);
               errorInFile=true;
         }
        else if(fileSize>5000000)
               {
                  $("#file").css({"border":"1.5px solid orange"});
                  $("#errorFile").show();
                  $("#file").val("");
                  $("#errorFile").html("<p style='color:orange;font-size:10px;font-weight:600;letter-spacing:1px;font-style:italic''><i class='fa fa-times-circle'></i>Image too large (>5MB).......</p>");
                  $("#save-btn").attr("disabled",true);
                  errorInFile=true;
               }
               else
               {
                  
                  $("#file").css({"border":""});
                  $("#errorFile").hide();
                  $("#save-btn").attr("disabled",false);
                  errorInFile=false;
               }
            });
    }
//    validation on the file input


// button validation
$("#save-btn").click(function(){
 
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
         url:"php/addContact.php",
         method:"POST",
         data:new FormData(formData),
         contentType:false,
         processData:false,
         cache:false,
         success:function(response){
            $("#form")[0].reset();
          
           console.log(response)
            count();
      
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
    

   //  count
 
function count()
{
   $.ajax({
      url:"./php/numberCount.php",
      method:"POST",
      success:function(response)
      {
          // console.log(response);   
          $(".badge").text(response);
      },error:function(){
          console.log("Error in counting numbers from the database");
      }
  })
}
  
})
// button validation