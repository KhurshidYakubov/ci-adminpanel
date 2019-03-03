<h2> <?= $title ?> </h2>
<br>
<?php foreach ($posts as $post) : ?>
<h3><?php echo $post['title']; ?></h3>
<hr>
<div class="row">
	<div class="col-md-3">
		<img  src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?> " alt="" class="mw-100">
		
	</div>
	<div class="col-md-9">
		<small class="post-date"> Posted on: <?php echo $post['created_at']; ?>  in <strong><?php echo $post['name'];  ?></strong> </small>
		<br>
		<?php echo word_limiter( $post['body'],60);?>
		<br>
		<br>
		<p><a class="btn btn-primary" href="<?php  echo site_url('/posts/'.$post['slug']);?>">Read More</a></p>
		
	</div>
</div>
<br>
<br>
<?php endforeach; ?>
<div class="pagination-links">
 	<?php echo $this->pagination->create_links(); ?>
</div>