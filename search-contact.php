<style>
    #search{
        box-shadow:none!important;
        width: 60%!important;
        
        margin:auto;
       
    }

    
    .alert{
        width: 50%;
        margin:auto;
    }
    @media screen and (max-width:786px)
    {
        #search{
            width:400px!important;
        }
       .img-fluid .loader{
           width: 500px;
        }
    }
    .form-control:focus {
    border-color:2px solid rgba(0, 128, 0, 0.747)!important;
    outline: 0;
    box-shadow: 0 0 0 0.2rem 1px solid rgba(0, 128, 0, 0.747);
}


.form-control {
 
    border: 1px solid rgba(0, 128, 0, 0.747);

  }
</style>
<div class="view-contact-page">
    <div class="contact-header-view bg-color text-center">
        <p style="font-size: 15px;" class="font-weight-bold py-2 text-light">Search Contact</p>
    </div>

  
    <input type="text" name="" id="search" class="form-control" placeholder="Search by name,location ">
        <div class="row" id="dynamicView">

         
    </div>

</div>

<script>
    $("#search").keyup(function(){
        var inputVal=$("#search").val();
       $.ajax({
           url:"./php/searchContact.php",
           method:"POST",
           data:{inputVal:inputVal},
           success:function(response)
           {
               $("#dynamicView").html(response);
           },error:function()
           {
               console.log("Error in searcing contact ffrom the database");
           }
       })
    })
</script>