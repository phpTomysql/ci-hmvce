<?php
foreach($blogs as $key=>$blog) {
 
?>
<div>
    <h2><?php echo $blog->blogtitle; ?></h2>
    <div>
        <?php echo $blog->blogtext; ?>.....
        <br>
        <button class="btn btn-info" onclick="window.location='blog/single/<?php echo $blog->blogid; ?>'">Read More</button>
    </div>
</div>
<h5>Posted Date: <?php echo  date('Y-m-d ,g:i A' ,$blog->postdate); ?></h5>
<?php } ?>