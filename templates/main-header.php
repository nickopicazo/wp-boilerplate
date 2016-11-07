<header>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <i class="fa fa-bars fa-lg fa-fw"></i></button>
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <?php get_template_part( 'templates/nav', 'primary' ); ?>
        <?php get_template_part( 'templates/nav', 'secondary' ); ?>
      </div>
    </div>
  </nav>
</header>
