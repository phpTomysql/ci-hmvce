
    <?php echo validation_errors(); ?>
    <?php if($this->session->flashdata('error')){ ?>
    <br>
    <?php echo $this->session->flashdata('error'); ?>
    
    <br>    
    <?php } ?>
    <?php if($this->session->flashdata('success')){ ?>
    <br>
    <?php echo $this->session->flashdata('success'); ?>
    
    <br>    
    <?php } ?>
   
    
    <?php echo form_open('comments/do_submit'); ?>

        <div class="well">
                    <h4>Leave a Comment:</h4>
                    
                        <div class="form-group">
                            <textarea rows="3" class="form-control" name="comment"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                
                </div>

     <?php echo form_hidden('blogid', $pid); ?>

        

    <?php echo form_close(); ?>

