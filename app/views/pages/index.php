<?php require APPROOT . "/views/inc/header.php"; ?>
<link rel='stylesheet' href="<?php echo URLROOT; ?>/css/generic.css">
<link rel='stylesheet' href="<?php echo URLROOT; ?>/css/home.css">

<div class="jumbotron jumbotron-fluid text-center jumbotron_container">
  <div class='jumbotron_div_area'>
    <h1 class='display-3'><?php echo $data['title'] ?></h1>
    <p class='lead'><?php echo $data['description'] ?></p>
  </div>
</div>

<main> 

  <section>
    <div class='description-div'>
      <h1 class='center font-title-effects'>Write</h1>
      <p>Have an idea or thought, write it down...</p>
    </div>
    <div class='image_one'>
    </div>
  </section>

  <section>
    <div class='image_two'>
    </div>
    <div class='description-div'>
      <h1 class='center font-title-effects'>Post</h1>
      <p>Post what you write on the site...</p>
    </div>
  </section>

  <section>
    <div class='description-div'>
      <h1 class='center font-title-effects'>Rate</h1>
      <p>Have your idea rated by others!</p>
    </div>
    <div class='image_three'>
    </div>
  </section>

</main>


<?php require APPROOT . "/views/inc/footer.php"; ?>