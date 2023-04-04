<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Suman | Personal BLog | Contact US</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php
include ('include\css.php');
?>

</head>

<body>
  <!-- preloader -->
  <div class="preloader">
    <div class="loader">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- /preloader -->

<?php
include ('include\navber.php');
?>

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="mb-4">Contact Us</h2>
        <img src="images/contact.jpg" alt="author" class="img-fluid w-100 mb-4">
        <p class="mb-5">Strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream and, as I lie close to the earth, a thousand unknown plants are noticed by me.<br><br>When I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath of that universal love which bears and sustains.</p>
        <form action="" method="post" class="row" >
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="name" id="name" placeholder="Name">
          </div>
          <div class="col-lg-6">
            <input type="email" class="form-control mb-4" name="email" id="email" placeholder="Email">
          </div>
          <div class="col-lg-12">
            <input type="text" class="form-control mb-4" name="subject" id="subject" placeholder="Subject">
          </div>
          <div class="col-12">
            <textarea name="message" id="message" class="form-control mb-4" placeholder="Message..."></textarea>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" onclick="javascript:alert('Thank You For Send Message.')">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- instagram -->
<section>
  <div class="container-fluid px-0">
    <div class="row no-gutters instagram-slider" id="instafeed" data-userId="4044026246"
      data-accessToken="4044026246.1677ed0.8896752506ed4402a0519d23b8f50a17"></div>
  </div>
</section>
<!-- /instagram -->
<?php
include('include\footer.php');
include('include\js.php');
?>
</body>
</html>