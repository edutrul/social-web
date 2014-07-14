<div class="header-container front-header">
  <header class="clearfix header">
    <h1 class="logo"><a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="Activate"> Apptivate</a></h1>
    <nav>
      <?php print render($page['navigation']); ?>
    </nav>
  </header>
  <div class="clearfix welcome">
    <?php print render($page['home_welcome']); ?>
  </div>
</div>
<div class="clearfix main">
  <div class="filter-container">
    <div class="filter wrapper superflyleft">Filtrar por
      <?php print render($page['filter_items']); ?>
    </div>
  </div>
  <div class="activities wrapper">
    <?php print render($page['home_activities']); ?>
  </div>
  <div class="footer-container">
    <footer class="footer clearfix wrapper flyleft">
      <?php print render($page['footer']); ?>
    </footer>
  </div>
</div>

