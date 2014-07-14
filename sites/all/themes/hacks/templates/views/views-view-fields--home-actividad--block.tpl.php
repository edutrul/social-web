<?php
  $title = $fields['title']->content;
  $imagen = $fields['field_imagen_1']->content;
  $ruta = $fields['path']->content;
  $categoria = $fields['field_categoria']->content;
  $pais = $fields['field_pais']->content;
  $ctry = $fields['field_pais_1']->content;
  $empresa = $fields['field_imagen']->content;
  $org = $fields['field_organizacion']->content;

  // Filter
  module_load_include('inc', 'pathauto', 'pathauto');
  module_load_include('inc', 'transliteration', 'transliteration');
  $cl_ctry = pathauto_cleanstring(_transliteration_process($ctry));
  $cl_cat = pathauto_cleanstring(_transliteration_process(strip_tags($categoria)));
  $cl_org = pathauto_cleanstring(_transliteration_process(strip_tags($org)));
?>
<div class="activity all <?php print $cl_ctry . " " . $cl_cat . " " . $cl_org; ?>">
  <div class="image-container"><?php print $imagen; ?><span><?php print $categoria; ?></span></div>
  <div class="description">
    <h3 class="title"><?php print $title; ?></h3>
  </div>
  <div class="meta">
    <div class="ctry meta-item"><?php print $pais; ?></div>
    <div class="org meta-item"><?php print $empresa; ?></div>
  </div>
</div>

