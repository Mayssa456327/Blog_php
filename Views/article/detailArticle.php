<?php
include '../headerFront.php'; 

include '..\..\Controller\ArticleC.php';
$articleC=new ArticleC();
$article=$articleC->recupererArticle(1); 

$commentaires=$articleC->afficherCommentaireparArticle(1); 
?>

<section>
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div id="post-content" class="col-sm-12 blog-item mb60 wow fadeIn" data-wow-delay="0.2s">
                            <div class="row">
                                <div class="col-xs-2 post-left-col">
                                    <div class="post-date heading-font">
                                        <span class="the-date"></span>
                                        <span class="the-month"></span>
                                    </div>
                                </div>
                                <div class="col-xs-10 post-center single-post-content">
                                <h3>Article : <?php echo $article['titre']; ?></h3>
                                    <div class="mb50">
                                        <p></p>
                                        <p><?php echo $article['description']; ?></p>
                                    </div>

                                    <div id="comments-list" class="wow fadeIn" data-wow-delay="0.2s">
                                        <div class="mt60 mb50 single-section-title">
                                            
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="avatar comment-avatar" src="http://lorempixel.com/g/80/80/people/9" alt="">
                                            </div>
                                            <?php
                                                foreach($commentaires as $commentaire){
                                            ?>	

                                           <div class="media-body">
                                                <div class="well">
                                                    <div class="media-heading">
                                                            </div>
                                                    <p><?php echo $commentaire['description']; ?></p>
                                                    
                                                </div>
                                                
                                            </div>

                                            <?php } ?>
                                        </div><!--/.media-->
                                       

                                        <div id="comments-form" class="row wow fadeIn" data-wow-delay="0.2s">
                                            <div class="col-md-12">
                                                <div class="mt60 mb50 single-section-title">
                                                    <h3>Ajouter Commentaire</h3>
                                                </div>
                                                <div id="message"></div>
                                                <form method="post" id="commentform" class="comment-form">
                                                    <input type="text" class="form-control col-md-4" name="name" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." />
                                                    <textarea name="comments" class="form-control" id="comments" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                                    <a class="btn btn-primary pull-right mt30" href="#">Reply</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>       
                                <div class="col-xs-2 post-right-col">
                                    <div class="text-right" data-easyshare data-easyshare-url="http://www.distinctivethemes.com/">
                                        <div class="share-button">                                        
                                            <span data-easyshare-total-count>0</span>
                                            <button data-easyshare-button="total">
                                                <span>Total Shares</span>
                                            </button>
                                        </div>

                                        <div class="share-button">
                                            <span data-easyshare-button-count="facebook">0</span>
                                            <button data-easyshare-button="facebook">
                                                <span>Share</span>
                                            </button>                                            
                                        </div>

                                        <div class="share-button">
                                            <span data-easyshare-button-count="twitter">0</span>
                                            <button data-easyshare-button="twitter" data-easyshare-tweet-text="">
                                                <span>Tweet</span>
                                            </button>                                        
                                        </div>

                                        <div class="share-button">                                        
                                            <span data-easyshare-button-count="google">0</span>
                                            <button data-easyshare-button="google">
                                                <span>+1</span>
                                            </button>
                                        </div>

                                        <div data-easyshare-loader>Loading...</div>
                                    </div>
                                </div>                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
