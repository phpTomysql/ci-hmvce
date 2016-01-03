<?php
foreach($comments as $key=>$comment) {
 
?>
<div class="media">
                    <a href="#" class="pull-left">
                        <img alt="" src="http://placehold.it/64x64" class="media-object">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo  $comment->email; ?>
                            <small><?php echo  date('Y-m-d ,g:i A' ,$comment->commentdate); ?></small>
                        </h4>
           <?php echo $comment->comment; ?>         </div>
                </div>

<?php } ?>