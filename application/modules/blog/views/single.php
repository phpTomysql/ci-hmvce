<div>
    <h2><?php echo $blog[0]->blogtitle; ?></h2>
    <div>
        <?php echo $blog[0]->blogtext; ?>
        <br>
    </div>
</div>
<h5>Posted Date: <?php echo  date('Y-m-d ,g:i A' ,$blog[0]->postdate); ?></h5>
<?php //echo Modules::run('comments');
$this->load->module('comments');

echo $this->comments->index($blog[0]->blogid);

?>

<?php
$this->comments->commentlist($blog[0]->blogid);
?>