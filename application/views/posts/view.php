<div class="cell small-12 medium-12 large-12">
	<h2><?php echo $post['title']?></h2>
	<h5><?php echo $post['sub_title']?></h5>
	<p><?php echo $post['body']?></p>
	<?php echo form_open('/posts/delete/'.$post['id']);?>
<input type="submit" value="Delete post" class="button alert float-left">
<?php echo form_close();?><a href="<?php echo base_url('posts/edit/'.$post['slug'])?>" class="button success" style="margin-left:10px">Edit post</a>
	<hr>
	
		<?php if ($comment) { ?>
			
				<?php foreach ($comment as $row) { ?>
					<div class="callout secondary">
					<?php echo $row['name']?> <b>[<?php echo $row['email']?>]</b><br>
					<?php echo $row['body']?>
					</div>
				<?php }?>
			
		<?php } else { ?>
			<div class="callout alert">There are no comments to display</div>
		<?php } ?>
		
	<hr>
	
</div>
<div class="cell small-12 medium-5 large-5" style="margin:0 auto">
	<h3>Add Your Comment</h3>
	<?php echo form_open('comments/create/'.$post['id']);?>
	<fieldset class="fieldset">
	<legend>Comments Form</legend>
		<label for="name">Name
		<input type="text" name="name" placeholder="Robert Lane">
		<?php echo form_error('name', '<div class="callout alert">', '</div>') ?>
	</label>
	<label for="email">Email
		<input type="text" name="email" placeholder="robert@gmail.com">
		<?php echo form_error('email', '<div class="callout alert">', '</div>') ?>
	</label>
	<label for="body">Body
		<textarea name="body" placeholder="Benefits of a good body text"></textarea>
		<?php echo form_error('body', '<div class="callout alert">', '</div>') ?>
	</label>
	<input type="hidden" name="slug" value="<?php echo $post['slug']?>">
	<input type="submit" class="button" value="Add Comment">
</fieldset>
	
	<?php echo form_close();?>
	</div>

<div class="cell small-12 medium-12 large-12">
	
	<hr>
<br><br><br>
</div>

