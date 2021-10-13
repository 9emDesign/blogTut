<div class="cell small-12 medium-5 large-5" style="margin:0 auto">
	<h2><?php echo $title?></h2>
	<?php if($this->session->flashdata('success')) {?>
	<?php echo $this->session->userdata('success');?>
	<?php }?>
	<?php echo form_open();?>
	<fieldset class="fieldset">
	<legend>New User Creation Form</legend>
	<label for="name">Name
	<input type="text" name="name" placeholder="Benetton" value="<?php set_value('name')?>">
		<?php echo form_error('name', '<div class="callout alert">', '</div>') ?>
	</label>
	<label for="address">Address
		<input type="text" name="address" placeholder="Keizersgracht 205" value="<?php set_value('address')?>">
		<?php echo form_error('address', '<div class="callout alert">', '</div>') ?>
	</label>
	<label for="zipcode">Zipcode
		<input type="text" name="zip" placeholder="KB5611" value="<?php set_value('zipcode')?>">
	</label>
	<label for="email">Email
		<input type="email" name="email" placeholder="Benetton@gmail.com" value="<?php set_value('email')?>">
		<?php echo form_error('email', '<div class="callout alert">', '</div>') ?>
	</label>
	<label for="password">Password
		<input type="password" name="password" placeholder="Ke2055611k@Bentt">
		<?php echo form_error('password', '<div class="callout alert">', '</div>') ?>
	</label>
	<label for="confpassword">Confirm Password
		<input type="password" name="conf_pass" placeholder="Ke2055611k@Bentt">
		<?php echo form_error('conf_pass', '<div class="callout alert">', '</div>') ?>
	</label>
	<input type="submit" class="button" value="Create User Account">
	</fieldset>
	<?php echo form_close()?>
</div>

