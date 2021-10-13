<div class="cell small-12 medium-5 large-5" style="margin:0 auto">
	<h2><?php echo $title?></h2>
	<?php if($this->session->flashdata('success')) {?>
	<?php echo $this->session->userdata('success');?>
	<?php }?>
	<?php echo form_open();?>
	<fieldset class="fieldset">
	<legend>Login User Form</legend>
	<label for="password">Email
		<input type="email" name="email" placeholder="Bentton@gmail.com" autofocus>
		<?php echo form_error('email', '<div class="callout alert">', '</div>') ?>
	</label>
	<label for="password">Password
		<input type="password" name="password" placeholder="Ke2055611k@Bentt">
		<?php echo form_error('password', '<div class="callout alert">', '</div>') ?>
	</label>
	<input type="submit" class="button" value="Login">
	</fieldset>
	<?php echo form_close()?>
</div>

