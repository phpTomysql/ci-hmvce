
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
   
    
    <?php echo form_open('blog/do_submit'); ?>

        <div class="well">
                    <h4>Title:</h4>
                    
                        <div class="form-group">
                            <input type="text" class="form-control" name="title">
                        </div>
                     
             
                    <h4>Content:</h4>
                    
                        <div class="form-group">
                            <textarea rows="3" class="form-control" name="content"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                
                </div>

   

        

    <?php echo form_close(); ?>


