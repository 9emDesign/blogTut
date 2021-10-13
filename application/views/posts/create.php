<div class="cell small-12 medium-5 large-5" style="margin:0 auto">
	<h2><?php echo $title?></h2>
	<?php echo $this->session->userdata('success');?>
	<?php echo form_open('posts/create');?>
	<fieldset class="fieldset">
	<legend>Post Creation Form</legend>
	<label for="categories">Categories
	<select name="categories">
		<?php foreach ($categories as $row) {?>
			<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
		<?php }?>
	</select>
	</label>
	<label for="title">Title
		<input type="text" name="title" placeholder="Benefits of a good title" value="<?php set_value('title')?>">
		<?php echo form_error('title', '<div class="callout alert">', '</div>') ?>
	</label>
	<label for="sub title">Sub Title
		<input type="text" name="sub_title" placeholder="Benefits of a good sub title" value="<?php set_value('su_title')?>">
		<?php echo form_error('sub_title', '<div class="callout alert">', '</div>') ?>
	</label>
	<label for="slug">Slug
		<input type="text" name="slug" placeholder="Benefits-of-a-good-slug-repeat-good-sub-title" value="<?php set_value('slug')?>">
		<?php echo form_error('slug', '<div class="callout alert">', '</div>') ?>
	</label>
	<label for="body">Body
		<textarea name="body" placeholder="Benefits of a good body text"></textarea>
		<?php echo form_error('body', '<div class="callout alert">', '</div>') ?>
	</label>
	<input type="submit" class="button" value="Create Post">
	</fieldset>
	<?php echo form_close()?>
</div>

