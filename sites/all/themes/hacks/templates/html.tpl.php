<!DOCTYPE html>
<html <?php print $html_attributes; ?>>
  <head>
    <title><?php print $head_title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php print $head; ?>
    <link href="http://fonts.googleapis.com/css?family=Raleway|Lato" rel="stylesheet">
    <?php print $styles; ?>
  </head>
  <body>
    <?php print $page; ?>
    <?php print $scripts; ?>
  </body>
</html>

