<?php
include '../headerBack.php';
include '..\..\Controller\UserC.php';
include_once '../../Model/User.php';
$UserC = new UserC();

$error = '';

// create adherent
$user = null;

if (isset($_POST['username']) && isset($_POST['password']))
 {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $user = new user($_POST['username'], $_POST['password'], $_POST['role']);
        $UserC->modifierUtilisateur($user, $_POST["id"]);

    } else {
        $error = 'Missing information';
    }
}

?>
<div class="row" style="margin-left:30%">
<?php
			if (isset($_POST['id'])){
				$user = $UserC->recupererUser($_POST['id']);
				
		?>

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Modifier utilisateur</h1>
                            </div>
                            <form class="user"  method="POST" action="" >
                            <input type="text" style="color :transparent ; background:transparent ; border-color:transparent"  name="id" id="id" class="form-control validate" value="<?php echo $user['id']; ?>" maxlength="20">
                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Username : <br>
                                        <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName"
                                        value="<?php echo $user['username']; ?>">
                                    </div>
                                
                                </div>
                                <div class="form-group">
                                    <br>
                                    Password
                                    <input name="password" class="form-control form-control-user" id="exampleInputEmail"
                                    value="<?php echo $user['password']; ?>"> </input>
                                </div>

                                <div class="form-group">
                                    <br>
                                    Role
                                    <input name="role" class="form-control form-control-user" id="exampleInputEmail"
                                    value="<?php echo $user['role']; ?>"> </input>
                                </div>
                             
                               <input type="submit" href="afficherUserBack.php" class="btn btn-primary btn-user btn-block" value="Modifier" ></input>
                            </form>
                            <hr>
                            
                        </div>
                    </div>

                    <?php
		}
		?>
                </div>
            </div>