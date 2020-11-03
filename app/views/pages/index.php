<?php require APPROOT . "/views/inc/header.php"; ?>

<h1><?php echo $data['title']; ?></h1>
<?php echo APPROOT; ?>

<ul>
	<?php foreach($data['posts'] as $post): ?>
		<li><?php echo $post->post; ?></li>
	<?php endforeach ?>
</ul>

<?php require APPROOT . "/views/inc/footer.php"; ?>