<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div id="page-wrapper"><div id="page">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php if(isset($page['navbar'])) : ?>
    <?php print render($page['sidebar_left']) ?>
    <?php else: ?>

    <a class="navbar-brand" href="#"><?php print $site_name ?></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <?php foreach($main_menu as $item) { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php print $item['href'] ?>"><?php print $item['title'] ?></a>
        </li>
        <?php } ?>
      </ul>

      <form class="form-inline my-2 my-lg-0" <?php print $logged_in ? "method='GET' action='/logout'" : "method='POST' action='/logout'"; ?>>
        <?php if(!$logged_in): ?>
        <input class="form-control mr-sm-2" type="search" placeholder="Username" aria-label="Search">
        <?php endif; ?>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php print $logged_in ? 'Log Out' : 'Log In'; ?></button>
      </form>

    </div>
    <?php endif; ?>
  </nav> <!-- /#main-menu -->
  <div id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>"><div class="section clearfix">
    <div id="name-and-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
      <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
          <h1 class="display-4"><?php print $site_name ?></h1>
          <p class="lead"><?php $site_slogan ?></p>
          <a class="btn btn-primary btn-lg" href="<?php print $front_page; ?>" role="button" title="<?php print t('Home'); ?>" rel="home">Paula Deen</a>
        </div>
      </div>
    </div> <!-- /#name-and-slogan -->
  </div> <!-- /.section, /#header -->
  <main class="row">

    <?php if(isset($page['sidebar_left'])): ?>
    <div class=" ml-auto col-md-3">
      <?php print render($page['sidebar_left']) ?>
    </div>
    <?php endif; ?>

    <?php if(isset($page['content'])): ?>
    <div class=" mx-3 col-md-4">
      <?php print render($page['content']) ?>
    </div>
    <?php endif; ?>

    <?php if(isset($page['sidebar_right'])): ?>
    <div class=" mr-auto col-md-3">
      <?php print render($page['sidebar_right']) ?>
    </div>
    <?php endif; ?>


  </main>
  <footer class="border-top border-primary">

    <?php if(isset($page['footer'])): ?>
    <div class="col-md-4 mx-auto mt-2 text-center">
      <?php print render($page['footer']); ?>
    </div>
    <?php endif; ?>

  </footer>


</div> <!-- /#page, /#page-wrapper -->
