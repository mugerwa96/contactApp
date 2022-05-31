
        // defaultPageLoading
       
        // defaultPageLoading
          $(".nav-item .nav-link").click(function(){
         
            $(".nav-item .nav-link.current").removeClass("current");
            $(this).addClass("current");
            // loadingSingePages
            var page=$(this).attr("data-page");
            $(".dynamicContent").load(page)
            // loadingSingePages
          
           
          })
 

      

         