<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel='stylesheet' href="<?php echo URLROOT; ?>/css/generic.css">

<a href="<?php echo URLROOT; ?>/posts" class="btn btn-outline-primary div-placement font">Back Button</a>
<br>

<h1 class='div-placement font'><?php echo $data['post']->title; ?></h1>
<div class='bg-secondary text-white p-2 mb-3 font'>
	Written By: <?php echo $data['user']->name ?>
</div>
<p class='font'>
	<?php echo $data['post']->body; ?>
</p>

<?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
	<hr>
	<a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class='btn btn-outline-dark font'>Edit</a>
	
	<form class='float-right' action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
		<input type="submit" value='Delete' class='btn btn-outline-danger font'>
	</form>

<?php endif; ?>


<?php require APPROOT . '/views/inc/footer.php'; ?>