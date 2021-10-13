<div class="cell small-12 medium-5 large-5" style="margin:0 auto">
	<h2><?php echo $title?></h2>
	<?php echo $this->session->userdata('success');?>
	<?php echo form_open('posts/update');?>
	<fieldset class="fieldset">
	<legend>Post Creation Form</legend>
	<input type="hidden" name="id" value="<?php echo $post['id']?>">
	<label for="categories">Categories
	<select name="categories">
		<?php foreach ($categories as $row) {?>
			<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
		<?php }?>
	</select>
	</label>
	<label for="title">
		<input type="text" name="title" placeholder="Benefits of a good title" value="<?php echo $post['title'];?>">
		<?php echo form_error('title', '<div class="callout alert">', '</div>') ?>
	</label>
	<label for="sub title">
		<input type="text" name="sub_title" placeholder="Benefits of a good sub title"value="<?php echo $post['sub_title'];?>">
		<?php echo form_error('sub_title', '<div class="callout alert">', '</div>') ?>
	</label>
	<label for="slug">
		<input type="text" name="slug" placeholder="Benefits-of-a-good-slug-repeat-good-sub-title"value="<?php echo $post['slug'];?>">
		<?php echo form_error('slug', '<div class="callout alert">', '</div>') ?>
	</label>
	<label for="title">
		<textarea name="body" placeholder="Benefits of a good body text"><?php echo $post['body'];?></textarea>
		<?php echo form_error('body', '<div class="callout alert">', '</div>') ?>
	</label>
	<input type="submit" class="button success" value="Update Post">
	</fieldset>
	<?php echo form_close()?>
</div>

