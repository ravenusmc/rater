<?php require APPROOT . "/views/inc/header.php"; ?>
<link rel='stylesheet' href="<?php echo URLROOT; ?>/css/generic.css">
<link rel='stylesheet' href="<?php echo URLROOT; ?>/css/post-index.css">
	<?php flash('post_message'); ?>

	<div class='row div-placement'>

		<div class='col-md-6'>
			<h1 class='font'>Posts</h1>
		</div>

		<div class='col-md-6'>
			<a href="<?php echo URLROOT; ?>/posts/add" class='btn btn-primary pull-right'>
				<i class='fa fa-pencil'>Add Posts</i>
			</a>
		</div>

		<div class='col-md-12'>
			<?php foreach($data['posts'] as $post) : ?>
				<div class='card card-body mb-3'>
					<h4 class="card-title"><?php echo $post->title; ?></h4>
					<div class="bg-light p-2 mb-3 font">
						Written by: <?php echo $post->name ?>
					</div>
					<p class='card-text font'>
						<?php echo $post->body; ?>
						<a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class='btn btn-outline-dark font'>
							More 
						</a>
					</p>
				</div>
			<?php endforeach ?>
		</div>

	</div>


<?php require APPROOT . "/views/inc/footer.php"; ?>