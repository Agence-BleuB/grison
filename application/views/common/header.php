<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header class="container">
  <div class="row">
    <h1 class="col-xs-12 col-md-3">
      <a href="<?php echo site_url('accueil'); ?>">
        <img src="<?php echo img_url("grison_logo.png"); ?>" class="img-responsive">
      </a>
    </h1>
    <div class="col-xs-12 col-md-9">
      <!-- <h3 class="col-md-12"><small>Pose de conduits de désenfumage</small></h3> -->
      <nav class="h3 text-center">
        <a href="<?php echo site_url('accueil'); ?>" class="col-xs-12 col-sm-4 <?php if ($pagecours == 'accueil') echo 'actif' ?>">Accueil</a>
        <a href="<?php echo site_url('references'); ?>" class="col-xs-12 col-sm-4 <?php if ($pagecours == 'references') echo 'actif' ?>">Références</a>
        <a href="<?php echo site_url('contact'); ?>" class="col-xs-12 col-sm-4 <?php if ($pagecours == 'contact') echo 'actif' ?>">Contact</a>
      </nav>
    </div>
  </div>
</header>