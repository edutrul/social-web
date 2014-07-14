<div class="header-container inner-header">
  <header class="clearfix header">
    <h1 class="logo"><a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="Activate"> Apptivate</a></h1>
    <nav>
      <?php print render($page['navigation']); ?>
    </nav>
  </header>
</div>
<div class="clearfix main">
  <div class="content wrapper"a>
    <?php print render($page['highlighted']); ?>
    <?php print render($page['help']); ?>
    <?php print $messages; ?>
    <?php print render($tabs); ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <div class="meta">
      <?php print render($page['meta']); ?>
    </div>
    <?php print render($page['content']); ?>
  </div>
  <div class="footer-container">
    <footer class="footer clearfix wrapper flyleft">
      <?php print render($page['footer']); ?>
    </footer>
  </div>
</div>

