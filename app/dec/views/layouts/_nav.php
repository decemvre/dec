<?php

use dec\components\Url;

?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="<?= Url::to('app', 'index')?>">december MVC Framework</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= Url::to('app', 'about')?>">About This</a></li>
        <li><a href="<?= Url::to('app', 'contact')?>">Contact</a></li>
        <li><a href="<?= Url::to('blog', 'index')?>">Blog</a></li>
        <li><a href="<?= Url::to('feed', 'index')?>">Feed</a></li>
        <li><a href="<?= Url::to('not', 'found')?>">Page Not Found</a></li>
        <li><a href="<?= Url::to('user', 'register')?>">Register</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>