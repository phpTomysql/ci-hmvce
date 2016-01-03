
    <?php echo validation_errors(); ?>
    <?php if($this->session->flashdata('success')){ ?>
    <?php echo $this->session->flashdata('success'); ?>
    <?php } ?>
    <?php echo form_open('contact/do_submit'); ?>

        <div class="form-group">

            <label for="inputEmail">Email</label>

            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo set_value('email'); ?>">

        </div>

        <div class="form-group">

            <label for="inputTextarea">Message</label>
            <textarea placeholder="Message" name="message" class="form-control" id="inputTextarea" value="<?php echo set_value('message'); ?>"></textarea>
           

        </div>

       

        <button type="submit" class="btn btn-primary">Contact Us</button>

    <?php echo form_close(); ?>

