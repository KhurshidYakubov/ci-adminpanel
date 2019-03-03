<h2> <?php echo $post['title']; ?> </h2>
<small class="post-date"> Posted on: <?php echo $post['created_at']; ?> </small> <br>
<img  src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?> " alt="" >
<div class="post-body">
	<?php echo $post['body']; ?>
</div>
<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
<hr>
<a class="btn btn-primary" href="/posts/edit/<?php echo $post['slug'];  ?>">Edit</a>
<a class="btn btn-danger" href="/posts/delete/<?php echo $post['id']; ?>" style="float: right;">Delete</a>
<!--<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" value="Delete" class="btn btn-danger" style="float: right; ">
</form>-->
<?php endif; ?>
<br>
<hr>
<h3>Comments</h3>
<?php if($comments) : ?>
<?php foreach($comments as $comment): ?>
<div class="card card-body bg-light">
<h5><?php echo $comment['body']; ?>  [by <strong><?php echo $comment['name']; ?></strong>]</h5>
</div>
<br>
<?php endforeach; ?>
<?php else : ?>
<p>No comments to display</p>
<?php endif; ?>
<hr>
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" required="">
</div>
<br>
<div class="form-gro up">
<label>E-mail</label>
<input type="text" name="email" class="form-control" required="">
</div>
<br>
<div class="form-group">
<label>Body</label>
<textarea  name="body" class="form-control" required=""></textarea>
</div>
<input type="hidden" name="slug" value=" <?php echo $post['slug']; ?> ">
<br>
<button class="btn btn-primary" type="submit" >Submit</button>
</form>