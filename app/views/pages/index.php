<?php require APPROOT . "/views/inc/header.php"; ?>
<link rel='stylesheet' href="<?php echo URLROOT; ?>/css/generic.css">
<link rel='stylesheet' href="<?php echo URLROOT; ?>/css/home.css">

<header role='banner' class="jumbotron jumbotron-fluid text-center jumbotron_container">
  <div class='jumbotron_div_area'>
    <h1 class='display-3 font'><?php echo $data['title'] ?></h1>
    <p class='lead font'><?php echo $data['description'] ?></p>
  </div>
</header>

<main role="main"> 

  <section>
    <div class='description-div'>
      <h1 class='center font-title-effects font'>Write</h1>
      <p class='font'>Have an idea or thought, write it down...</p>
    </div>
    <div class='image_one'>
    </div>
  </section>

  <section>
    <div class='image_two'>
    </div>
    <div class='description-div'>
      <h1 class='center font-title-effects font'>Post</h1>
      <p class='font'>Post what you write on the site...</p>
    </div>
  </section>

  <section>
    <div class='description-div'>
      <h1 class='center font-title-effects font'>Rate</h1>
      <p class='font'>Have your idea rated by others!</p>
    </div>
    <div class='image_three'>
    </div>
  </section>

</main>


<?php require APPROOT . "/views/inc/footer.php"; ?>