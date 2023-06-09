<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Suman | Personal Blog | Single View</title>

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

<!-- page-title -->
<section class="section bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4>As a Designer, I Refuse to Call People ‘Users’</h4>
      </div>
    </div>
  </div>
</section>
<!-- /page-title -->

<!-- blog single -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <ul class="list-inline d-flex justify-content-between py-3">
          <li class="list-inline-item"><i class="ti-user mr-2"></i>Post by Jhon Abraham</li>
          <li class="list-inline-item"><i class="ti-calendar mr-2"></i>June 2, 2018</li>
        </ul>
        <img src="images/post-single.jpg" alt="post-thumb" class="w-100 img-fluid mb-4">
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
            ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
            labore et dolore magnam aliquam quaerat voluptatem.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
            ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
            labore et dolore magnam aliquam quaerat voluptatem.</p>

          <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
          </blockquote>

          <img src="images/post-img.jpg" alt="image" class="img-fluid">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
            ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
            labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
          <h6>Share Post</h6>
          <ul class="list-inline d-inline-block">
            <li class="list-inline-item"><a href="#" class="text-dark"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#" class="text-dark"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item"><a href="#" class="text-dark"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="widget search-box">
          <i class="ti-search"></i>
          <input type="search" id="search-post" class="form-control border-0 pl-5" name="search-post"
            placeholder="Search">
        </div>
        <div class="widget">
          <h6 class="mb-4">LATEST POST</h6>
          <div class="media mb-4">
            <div class="post-thumb-sm mr-3">
              <img class="img-fluid" src="images/masonary-post/post-1.jpg" alt="post-thumb">
            </div>
            <div class="media-body">
              <ul class="list-inline d-flex justify-content-between mb-2">
                <li class="list-inline-item">Post By Jhon</li>
                <li class="list-inline-item">June 2, 2018</li>
              </ul>
              <h6><a class="text-dark" href="blog-single.php">Lorem ipsum dolor sit amet, consectetur</a></h6>
            </div>
          </div>
          <div class="media mb-4">
            <div class="post-thumb-sm mr-3">
              <img class="img-fluid" src="images/masonary-post/post-6.jpg" alt="post-thumb">
            </div>
            <div class="media-body">
              <ul class="list-inline d-flex justify-content-between mb-2">
                <li class="list-inline-item">Post By Jhon</li>
                <li class="list-inline-item">June 2, 2018</li>
              </ul>
              <h6><a class="text-dark" href="blog-single.php">Lorem ipsum dolor sit amet, consectetur</a></h6>
            </div>
          </div>
          <div class="media mb-4">
            <div class="post-thumb-sm mr-3">
              <img class="img-fluid" src="images/masonary-post/post-3.jpg" alt="post-thumb">
            </div>
            <div class="media-body">
              <ul class="list-inline d-flex justify-content-between mb-2">
                <li class="list-inline-item">Post By Jhon</li>
                <li class="list-inline-item">June 2, 2018</li>
              </ul>
              <h6><a class="text-dark" href="blog-single.php">Lorem ipsum dolor sit amet, consectetur</a></h6>
            </div>
          </div>
        </div>
        <div class="widget">
          <h6 class="mb-4">TAG</h6>
          <ul class="list-inline tag-list">
            <li class="list-inline-item m-1"><a href="blog-single.php">ui ux</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">developmetns</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">travel</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">article</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">travel</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">ui ux</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">article</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">developmetns</a></li>
          </ul>
        </div>
        <div class="widget">
          <h6 class="mb-4">CATEGORIES</h6>
          <ul class="list-inline tag-list">
            <li class="list-inline-item m-1"><a href="blog-single.php">ui ux</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">developmetns</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">travel</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">article</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">travel</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">ui ux</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">article</a></li>
            <li class="list-inline-item m-1"><a href="blog-single.php">developmetns</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /blog single -->

<?php
include('include\footer.php');
include('include\js.php');
?>

</body>
</html>