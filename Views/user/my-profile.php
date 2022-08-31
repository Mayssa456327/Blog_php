<?php

include '../headerFront.php';
include '..\..\Controller\UserC.php';
$userC = new UserC();

$error = "";
$user=null;
if (

    isset($_POST["username"]) &&		
    isset($_POST["password"]) 
    
   ) {
    if (
       
        !empty($_POST['username']) &&
        !empty($_POST["password"])
       // !empty($_POST["CategorieId"])
    ) {
        $user = new User(
   
            $_POST['username'],
            $_POST["password"]
        
        );
        $userC->modifierUtilisateur($user,$_GET["id"]);
     
    }
    else
        $error = "Missing information";
   }

?>



        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row">
                   
                        <!--end col-md-3-->
                        <div class="col-md-9">
                      
                        <form class="form" mathod="POST">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Personal Information</h2>
                                   
                                            <div class="row">
                                                <div class="col-md-4">
                                  
                                                    <!--end form-group-->
                                                </div>
                                                <label for="id" >
                                                   </label>
        
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="name" class="col-form-label required">Your Name</label>
                                                        <input name="username" type="text" class="form-control" id="name" placeholder="Your Name" value="<?php echo $_GET['username']?> 
                                                    </div>
                                                    <!--end form-group-->
                                               
                                                        <label for="password" class="col-form-label required">Your Password</label>
                                                        <input name="password" type="password" class="form-control" id="pwd" placeholder="Your Pasword" value="<?php echo $_GET['password']?>" required />
                                                    </div>
                                                    
                                                   
                                                     
                                    </div>
                                 
                            </form>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        