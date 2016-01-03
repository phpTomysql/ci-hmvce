<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
 	<?php foreach ($articles as $article) : ?>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                             <?php echo $article->title; ?>
                        </h2>
                        <h3 class="post-subtitle">
                           <?php echo $article->content; ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#"><?php echo $article->users->name; ?></a> on September 24, 2014</p>
                </div>
                <hr>
                <?php endforeach;?>
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
</div>