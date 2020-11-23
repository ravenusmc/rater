<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel='stylesheet' href="<?php echo URLROOT; ?>/css/generic.css">
<link rel='stylesheet' href="<?php echo URLROOT; ?>/css/post-show.css">

<a href="<?php echo URLROOT; ?>/posts" class="btn btn-outline-primary div-placement font">Back Button</a>
<br>

<h1 class='div-placement font'><?php echo $data['post']->title; ?></h1>
<div class='bg-secondary text-white p-2 mb-3 font'>
	Written By: <?php echo $data['user']->name ?>
</div>

<p class='font'>
	<?php echo $data['post']->body; ?>
</p>

<h4 class='font'>Rate Posts</h4>

<div class='rating-div'>

	<form action="<?php echo URLROOT; ?>/posts/rateUp/<?php echo $data['post']->id; ?>" method="post">
		<button class='btn btn-success rate-form'><i class="fa fa-thumbs-up"></i></button>
	</form>

	<form action="<?php echo URLROOT; ?>/posts/rate/<?php echo $data['post']->id; ?>">
		<button class='btn btn-danger rate-form'><i class="fa fa-thumbs-down"></i></button>
	</form>

</div>

<?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
	<hr>
	<a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class='btn btn-outline-dark font'>Edit</a>
	
	<form class='float-right' action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
		<input type="submit" value='Delete' class='btn btn-outline-danger font'>
	</form>

<?php endif; ?>


<?php require APPROOT . '/views/inc/footer.php'; ?>