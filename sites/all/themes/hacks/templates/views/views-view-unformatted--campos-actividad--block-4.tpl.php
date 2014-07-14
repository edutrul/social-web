<select class="filter-act">
    <option value="all" selected>Organización</option>
  <?php foreach ($rows as $id => $row): ?>
    <?php print $row; ?>
  <?php endforeach; ?>
</select>