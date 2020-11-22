<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel='stylesheet' href="<?php echo URLROOT; ?>/css/generic.css">

<a href="<?php echo URLROOT; ?>/posts" class="btn btn-outline-dark div-placement">Back Button</a>
<div class="card card-body bg-light  mt-5">

    <h2 class='font'>Edit Post</h2>
    <form action="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id']; ?>" method="post">

    <div class="form-group">
        <label class='font' for="title">Title: <sup>*</sup></label>
        <input type="text" name='title' 
        class='font form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>' 
        value="<?php echo $data['title'] ?>">
        <span class='invalid-feedback'><?php echo $data['title_err'] ?></span>
    </div>

    <div class="form-group">
        <label class='font' for="body">Body: <sup>*</sup></label>
        <textarea name='body' 
          class='font form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>'>
        <?php echo $data['body']; ?>
				</textarea>
        <span class='invalid-feedback'><?php echo $data['body_err'] ?></span>
    </div>

		<input type='submit' class='btn btn-outline-success' value='submit'>

    </form>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>