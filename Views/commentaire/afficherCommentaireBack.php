<?php
include '../headerBack.php'; 
include '../../Model/Commentaire.php';
include '..\..\Controller\CommentaireC.php';
$commentaireC=new CommentaireC();
$listeCommentaire=$commentaireC->afficherCommentaire(); 

?>


<div class="row" style="margin-left:20%">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#id</th>
                                            <th class="border-top-0">description</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
			    foreach($listeCommentaire as $commentaire){
			?>
                                        <tr>
                                            <td><?php echo $commentaire['id']; ?></td>
                                            <td><?php echo $commentaire['description']; ?></td>
                                            
                                            <td>     
                                            
                </td>

                <td>
				<a href="supprimerCommentaireBack.php?id=<?php echo $commentaire['id']; ?>"  class="tm-product-delete-link" >
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
<?php
