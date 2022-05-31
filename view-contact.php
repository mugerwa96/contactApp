<div class="view-contact-page">
    <div class="contact-header-view bg-color text-center">
        <p style="font-size: 15px;" class="font-weight-bold py-2 text-light">All contacts saved</p>
    </div>

  
   
        <div class="row" id="dynamicView">
         
    </div>

</div>


<script>
    fetchContacts();
    function fetchContacts()
    {
        $.ajax({
            url:"./php/fetch.php",
            method:"POST",
            success:function(response)
            {
               $("#dynamicView").html(response)
            },error:function()
            {
                console.log("Error in fetchinfg records from the data base");
            }
        })
    }

      
     

        // deleteButtonClick
        
            $(document).on("click",".bg-delete",function(){
            var id=$(this).attr('data-id');
            $.ajax({
                url:"delete.php",
                method:"post",
                data:{"id":id},
                success:function(response)
                {
                    fetchContacts();
                    count();
                },error:function()
                {
                    console.log("Error in sebding delete id");
                }
            })
          
           
          })
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
       
          // deleteButtonClick

        
       
      // editButtonClick
      $(document).on("click",".bg-edit",function(){
            var id=$(this).attr('data-id');
          
            $(".dynamicContent").load("editPage.php",{id:id});
          })
     // editButtonClick
   



</script>
