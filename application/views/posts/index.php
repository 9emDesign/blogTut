<div class="cell small-12 medium-6 large-6" style="margin:0 auto">
	<h2><?php echo $title?></h2>
	<?php foreach($posts as $row) {?>
		<h3><?php echo $row['title']?></h3>
		<h5><?php echo $row['sub_title']?></h5>
		<small><div class="callout secondary">Posted on: <b><?php echo $row['created_at']?></b> in <?php echo $row['name']?></div></small>
		<p><?php echo word_limiter($row['body'],50);?></p>
		<div><a class="button" href="<?php echo site_url('/posts/'.$row['slug'])?>">Full article</a><br><br><br></div>
		<?php }?>

</div>

