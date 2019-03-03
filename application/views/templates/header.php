<html>
	<head>
		<title>ciFirst</title>
		<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?=site_url('/assets/css/style.css')?>">
	
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="/">ciFirst</a>
			
			<div class="collapse navbar-collapse" id="navbarColor02"> 
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link" href="/"> Home </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="/about">About</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="/posts">Blog </a>
					</li>

					<li class="nav-item ">
						<a class="nav-link" href="/categories">Categories </a>
					</li>


				</ul>

				<ul class="nav navbar-nav navabr-right">

					<?php if(!$this->session->userdata('logged_in')) : ?>
					 <li><a class="nav-link" href="<?=site_url('users/login')?>"> Login</a></li>
					 <li><a class="nav-link" href="<?=site_url('users/register')?>"> Register</a></li>
					<?php endif; ?>

 					<?php if($this->session->userdata('logged_in')) : ?>
					<li><a class="nav-link" href="<?=site_url('posts/create')?>"> Create Post </a></li>
					<li><a class="nav-link" href="<?=site_url('categories/create')?>"> Create Category </a></li>
					<li><a class="nav-link" href="<?=site_url('users/logout')?>"> Logout</a></li>
					<?php endif; ?>
				</ul>
				
			</div>
		</nav>

		<div class="container" style="margin: 0;">
			<br>
		<!--Flash messages-->

		<?php if($this->session->flashdata('user_registered')) : ?>
			<?php echo '<p class="alert alert-success" ?>'.$this->session->flashdata('user_registered').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_created')) : ?>
			<?php echo '<p class="alert alert-success" ?>'.$this->session->flashdata('post_created').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_updated')) : ?>
			<?php echo '<p class="alert alert-success" ?>'.$this->session->flashdata('post_updated').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('category')) : ?>
			<?php echo '<p class="alert alert-success" ?>'.$this->session->flashdata('category').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_deleted')) : ?>
			<?php echo '<p class="alert alert-success" ?>'.$this->session->flashdata('post_deleted').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('login_failed')) : ?>
			<?php echo '<p class="alert alert-danger" ?>'.$this->session->flashdata('login_failed').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedin')) : ?>
			<?php echo '<p class="alert alert-success" ?>'.$this->session->flashdata('user_loggedin').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedout')) : ?>
			<?php echo '<p class="alert alert-success" ?>'.$this->session->flashdata('user_loggedout').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('category_deleted')) : ?>
			<?php echo '<p class="alert alert-success" ?>'.$this->session->flashdata('category_deleted').'</p>'; ?>
		<?php endif; ?>
		
			
		
		

	