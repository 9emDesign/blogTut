<div class="cell small-12 medium-12 large-12">
	<h2><?php echo $title?></h2>
	Welcome <i>here comes name and <b>[email]</b> of user</i> to Dashboard
</div>

<div class="cell small-12 medium-2 large-3">
Quick links
<ul class="menu vertical">
	<li><a href="<?php echo base_url()?>create">Create New Post</a></li>
	<li><a href="<?php echo base_url()?>logout">Logout</a></li>
</ul>
</div>
<div class="cell small-12 medium-10 large-9">
	<div class="grid-x grid-padding-x">
		<div class="cell small-12 medium-5 large-5">
			<?php echo form_open('users/newPass');?>
			<fieldset class="fieldset">
			<legend>Create New Password Form</legend>
			<label for="password">New Password
				<input type="password" name="password" placeholder="Ke2055611k@Bentt">
				<?php echo form_error('password', '<div class="callout alert">', '</div>') ?>
			</label>
			<label for="conf_pass">Confirm Password
				<input type="password" name="conf_pass" placeholder="Ke2055611k@Bentt">
				<?php echo form_error('conf_pass', '<div class="callout alert">', '</div>') ?>
			</label>
			<input type="submit" class="button" value="Create Password">
			</fieldset>
			<?php echo form_close()?>
		</div>
	</div>
</div>
