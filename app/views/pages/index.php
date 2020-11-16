<?php require APPROOT . "/views/inc/header.php"; ?>
<link rel='stylesheet' href="<?php echo URLROOT; ?>/css/home.css">

<div class="jumbotron jumbotron-fluid text-center jumbotron_container">
  <div class='jumbotron_div_area'>
    <h1 class='display-3'><?php echo $data['title'] ?></h1>
    <p class='lead'><?php echo $data['description'] ?></p>
  </div>
</div>

<main> 

  <section>
    <div>
      <h1>Write</h1>
    </div>
    <div class='image_one'>
    </div>
  </section>

  <section>
    <div class='image_two'>
    </div>
    <div>
      <h1>Post</h1>
    </div>
  </section>

  <section>
    <div>
      <h1>Rate</h1>
    </div>
    <div class='image_three'>
    </div>
  </section>

</main>


<?php require APPROOT . "/views/inc/footer.php"; ?>