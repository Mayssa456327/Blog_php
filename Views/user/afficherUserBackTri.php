<?php
include '../headerBack.php'; 

include '../../Model/User.php';
include '..\..\Controller\UserC.php';
$userC=new UserC();
$listeUser=$userC->afficherUsertri(); 

?>


<div class="row" style="margin-left:20%">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#id</th>
                                            <th class="border-top-0">username</th>
                                            <th class="border-top-0">password</th>
                                         
                                            <th class="border-top-0">Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
			    foreach($listeUser as $user){
			?>
                                        <tr>
                                            <td><?php echo $user['id']; ?></td>
                                            <td><?php echo $user['username']; ?></td>
                                            <td><?php echo $user['password']; ?></td>
                                            <td><?php echo $user['role']; ?></td>


                                            <td>     
                                            <form method="POST" action="modifierUserBack.php">
						<input type="submit" name="Modifier" value="Modifier" class="btn btn-primary btn-block text-uppercase sm-1">
						<input type="hidden" value=<?php echo $user['id']; ?> name="id">
					</form>
                </td>

                <td>
				<a href="supprimerUserBack.php?id=<?php echo $user[
        'id'
    ]; ?>"  class="tm-product-delete-link" >
				<i class="far fa-trash-alt tm-product-delete-icon"></i>
			</a>
			
                    
                    </td>
                                        </tr>


	        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
</div>
 