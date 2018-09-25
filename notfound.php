<?php session_start();
require_once 'init.php';
require_once 'layout/header.php';
require_once 'layout/nav.php';?>

<section class="four04">
<h1>404 Not Found</h1>
<p>We have been notified and are looking into it...</p>
</section>

<section class="four04 main">
  <img src="<?=image_url('404.png')?>" alt="404 Not Found">
</section> 

<?php require_once 'layout/footer.php'; 
