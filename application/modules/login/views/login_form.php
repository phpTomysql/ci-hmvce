
    <?php echo validation_errors(); ?>
    <?php if($this->session->flashdata('success')){ ?>
    <?php echo $this->session->flashdata('success'); ?>
    <?php } ?>
    <?php if($this->session->flashdata('error')){ ?>
    <?php echo $this->session->flashdata('error'); ?>
    <?php } ?>

<?php

echo form_open('login/login_submit');

?>
<table>
    <tr>
        <td><label><?php echo $email_lable ?></label></td>
        <td><?php echo form_input('email'); ?></td>
    </tr>
    <tr>
        <td><label><?php echo $password_lable ?></label></td>
        <td><?php echo form_password('password'); ?></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo form_submit('submit' , 'Login !'); ?></td>
    </tr>

</table>
<?php echo form_close(); ?>