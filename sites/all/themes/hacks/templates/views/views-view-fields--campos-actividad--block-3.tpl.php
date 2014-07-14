<?php
  $val = $fields['field_pais']->content;
  module_load_include('inc', 'pathauto', 'pathauto');
  module_load_include('inc', 'transliteration', 'transliteration');
  $clean = pathauto_cleanstring(_transliteration_process($val));
?>
<option value="<?php print $clean; ?>"><?php print $val; ?></option>