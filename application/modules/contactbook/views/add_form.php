<?php
echo form_open('contactbook/save');
?>
<p><label>Name</label><input type="text" name="name"></p>
<p><label>Number</label><input type="text" name="number"></p>
<p><label>City</label><input type="text" name="city"></p>
<input type="submit" value="Save">
<?php
echo form_close();
?>