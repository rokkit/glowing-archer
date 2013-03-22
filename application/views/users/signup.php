<?php echo form_open('users/signup',array('class' => "" )); ?>
<label for="title">Login</label> 
	<?php
		echo form_input('user[name]', set_value('user[name]'),"id='name' class='input-block-level'", 'autofocus');
    ?>

	<label for="text">Password</label>
	<?php
		echo form_password('user[password]', set_value('user[password]'),"id='pass' class='input-block-level'", 'autofocus');
    ?>
	
	<input type="submit" name="submit" class="btn btn-large btn-primary" value="Sign Up!" /> 
</form>