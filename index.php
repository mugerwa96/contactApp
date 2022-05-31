
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact App</title>
    <!---------------------------- BootstrapFiles-------------------- -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/mdb.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./AOS/aos.css">
    <link rel="stylesheet" href="./css/style.css">
    <!---------------------------- BootstrapFiles-------------------- -->
</head>
<body>
    
      <!----------------------------header-section-------------------- -->
      <header>

        <!-- navbar -->
            <nav class="navbar  p-2 navbar-expand-md navbar-dark fixed-top bg-color">
                <div class="container">
                    <a class="navbar-brand font-weight-bold " href="#"><i class="fa fa-circle-o-notch mx-2"></i> Quick  <span class="text-color">Phone <i class="fa fa-circle-o-notch mx-2"></i></span></a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item ">
                                <a class="nav-link  current" href="#" data-page="home.php"> <i class="fa fa-university fa-1x mx-2"></i>Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-page="add-contact.php"> <i class="fa fa-plus-circle fa-1x mx-2"></i>Add contact</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-page="view-contact.php">  <i class="fa fa-eye fa-1x mx-2"></i>View Contact <span><span class="badge badge-pill bg-delete">12</span></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-page="search-contact.php"> <i class="fa fa-search fa-1x mx-2"></i>Search Contact</a>
                            </li>
                        
                        </ul>
                    
                    </div>
                </div>
                
            </nav>
            <!-- navbar -->
            <section id="header-page"class="header-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                             <!---------- dynamicSection------ -->
                            <div class="dynamicContent " >

                            </div>
                    
                     <!---------- dynamicSection------ -->
                        </div>  
                    </div>
                </div>
            </section>
           

      </header>
      <!----------------------------header-section-------------------- -->

<!----------------------------footer-section-------------------- -->
    <section id="footer" class=" font-weight-bold text-light text-center bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-circle-o-notch mx-2"></i> Quick  <span class="text-color">Phone <i class="fa fa-circle-o-notch mx-2"></i></span>
                    
                    <p >Developed and Maintained by <a href="#" class="text-light">cyrix pro</a>   &copy; 2022</p>
                    <p>All rights reserved</p>
                </div>
            </div>
        </div>
    
    </section>
<!----------------------------footer-section-------------------- -->



       <!---------------------------- Scriptiles-------------------- -->
       <script src="./js/jquery.js"></script>
       <script src="./js/popper.js"></script>
       <script src="./js/mdb.js"></script>
       <script src="./js/bootstrap.js"></script>
       <script src="./typed.js/typed.js"></script>
      
   <script src="./js/app.js"></script>      
   <script>
        $(".dynamicContent").load('search-contact.php');
       
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
        
   </script> 
       <!---------------------------- Scriptiles-------------------- -->
</body>
</html>