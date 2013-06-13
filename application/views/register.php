<h1>Registration</h1>

<?php echo $this->validation->error_string; ?>

<?php echo form_open('user/register'); ?>

	<label for="username">Username : </label>
	<?php echo form_input('username'); ?>
	
	<label for="password">Password : </label>
	<?php echo form_password('password'); ?>
	
	<label for="password2">Repeat Password : </label>
	<?php echo form_password('password2'); ?>
	
	<label for="email">Email : </label>
	<?php echo form_input('email'); ?>
	
	<label for="question">Secret Question : </label>
	<?php echo form_input('question'); ?>
	
	<label for="answer">Answer : </label>
	<?php echo form_input('answer'); ?>
	
	<label for="submit"> </label>
	<?php echo form_submit('submit', 'Register Now'); ?>

<?php echo form_close(); ?>
</div>
